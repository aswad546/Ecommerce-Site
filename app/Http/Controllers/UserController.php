<?php

namespace App\Http\Controllers;

use App\Connection\connection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use PDO;

class UserController extends Controller
{
    public function showEditPage(){
        $conn = connection::connect_db();
        $id = session('user_id');
        $sql = "SELECT * FROM users WHERE id = $id";
        $query = $conn->prepare($sql);
        $query->execute();
        $result = $query->setFetchMode(PDO::FETCH_ASSOC);
        $res = $query->fetchAll()[0];
        return view('edit-user-profile', compact('res'));

    }

    public function editUser(Request $request) {
        $conn = connection::connect_db();
        $id = session('user_id');
        $hashed_pass = Hash::make($request->password);
        $sql = "UPDATE users
                SET name='$request->name', email='$request->email', password='$hashed_pass'
                WHERE id = $id";
        try {
            $conn->exec($sql);
        } catch(\Exception $e){
            return redirect()->back()->with(['error'=> 'Edit Failed']);
        }
        return redirect('/');

    }

    public function upgradeAccount(Request $request): RedirectResponse
    {
        $conn = connection::connect_db();
        if($conn) {
            $id = session('user_id');
            $sql = "UPDATE users
                    SET user_roles = 'premiumuser'
                    WHERE id = $id";
            $conn->exec($sql);
            $conn = null;
        }
        return redirect()->back();
    }

    public function showOrders(){
        $id = session('user_id');
        $sql = "SELECT *
                FROM transaction_history t
                JOIN orders using(order_id)
                WHERE t.user_id = $id";
        $orders = connection::query($sql);
        return view('order-view', compact('orders'));
    }

    public function showOrderProducts($id){
        $user_id = session('user_id');
        $sql = "SELECT * FROM orders
                JOIN order_item using(order_id)
                JOIN products p using(product_id)
                WHERE order_id = $id";
        $products = connection::query($sql);
        return view('history-product', compact('products'));
    }

    public function cancelOrder($id): RedirectResponse
    {
        $user_id = session('user_id');

        $sql = "SELECT transaction_amount
                FROM transaction_history
                WHERE order_id = $id";
        $transaction_price = connection::query($sql)[0]['transaction_amount'];

        $sql = "DELETE FROM orders
                WHERE order_id = $id";
        connection::execQuery($sql);

        $sql = "SELECT wallet_amount
                FROM wallet
                WHERE user_id = $user_id";
        $wallet_amount = connection::query($sql)[0]['wallet_amount'];

        $new_amount = $wallet_amount + $transaction_price;

        $sql = "UPDATE wallet
                SET wallet_amount = $new_amount
                WHERE user_id = $user_id";
        connection::execQuery($sql);

        return redirect()->back()->with(['success'=>'Order cancelled and amount has been refunded and added to wallet']);
    }

    public function showEmailForm(){
        return view('forgot-password-email-form');

    }

    public function showSecurityQuestionForm(Request $request){
        $sql = "SELECT *
                FROM users
                WHERE email = '$request->email'";
        $user = connection::query($sql);
        if(count($user)){
            $user = $user[0];
            return view('security-question', compact('user'));
        }
        return redirect()->back();
    }

    public function checkSecurityAnswer(Request $request, $id){
        $sql = "SELECT *
                FROM users
                WHERE id = $id";
        $user = connection::query($sql)[0];
        if($request->security_answer == $user['security_answer']){
            return redirect()->to(route('forgot.password.reenter', $id));
        }
        return redirect(route('forgot.password.email.form.show'));
    }

    public function reenterPassword($id){
        return view('reenter-password', compact('id'));
    }

    public function updatePassword(Request $request, $id){
        $hashed_pass = Hash::make($request->password);
        $sql = "UPDATE users
                SET password = '$hashed_pass'
                WHERE id = $id";
        connection::execQuery($sql);
        Session::put('user_id', $id);
        return redirect('/');
    }

}

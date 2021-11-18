<?php

namespace App\Http\Controllers;

use App\Connection\connection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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

    public function upgradeAccount(Request $request){
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
}

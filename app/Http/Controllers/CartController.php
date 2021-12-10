<?php

namespace App\Http\Controllers;

use App\Connection\connection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use PDO;

class CartController extends Controller
{
    public function addToCart(Request $request): JsonResponse
    {

        $id = session('user_id');
        $item = '';
        $sql = "SELECT *
                    FROM cart
                    WHERE product_id = $request->id and user_id = $id";
        $exists = connection::query($sql);
        if (!count($exists)) {
            $sql = "INSERT INTO cart
                     VALUES(DEFAULT, '$request->qty', $id, $request->id, DEFAULT, DEFAULT)";
        } else {
            $new_qty = $exists[0]['cart_qty'] + 1;
            $sql = "UPDATE cart
                        SET cart_qty = $new_qty
                        WHERE product_id = $request->id and user_id = $id";
        }
        connection::execQuery($sql);

        return response()->json(['success' => 'SUCCESS!']);
    }



    public function addCart(Request $request, $id) : RedirectResponse
    {
        $item = '';
        $id = session('user_id');
        $sql = "SELECT *
                    FROM cart
                    WHERE product_id = $request->id and user_id = $id";
        $exists = connection::query($sql);
        if (!count($exists)) {
            $sql = "INSERT INTO cart
                     VALUES(DEFAULT, '$request->qty', $id, $request->id, DEFAULT, DEFAULT)";
        } else {
            $new_qty = $exists[0]['cart_qty'] + $request->quantity;
            $sql = "UPDATE cart
                        SET cart_qty = $new_qty
                        WHERE product_id = $request->id and user_id = $id";
        }
        connection::execQuery($sql);
        return redirect()->to(route('shop.product.detail', $id));
    }

    public function showCart(Request $request){
        $conn = connection::connect_db();
//        dd($request->all());

        $id = session('user_id');
//        dd($id);
        $sql = "SELECT *
                    FROM cart c
                    JOIN products p on p.product_id = c.product_id
                    JOIN users u on u.id = c.user_id
                    WHERE c.user_id = $id";
        $query = $conn->prepare($sql);
        $query->execute();
        $result = $query->setFetchMode(PDO::FETCH_ASSOC);
        $res = $query->fetchAll();
        return view('shopping-cart', compact('res'));

    }

    public function applyPromocode(Request $request): JsonResponse
    {
        $id = session('user_id');

        $sql = "SELECT *
                FROM discounts d
                JOIN products using(user_id)
                JOIN cart c using(product_id)
                WHERE c.user_id = $id and d.discount_code = '$request->promocode'";
        $result = connection::query($sql);

        return response()->json(['success'=>'SUCCESS', 'result'=>$result]);
    }
    public function checkoutPage(){
        return view('credit-card');
    }

    public function confirmOrder(Request $request){
        $id = session('user_id');
        $sql = "SELECT *
                FROM cart
                WHERE user_id = $id";
        $cart_items = connection::query($sql);
        $conn = connection::connect_db();
        $time = Carbon::now();
        $sql = "INSERT INTO orders(order_date)
                VALUES('$time')";
        $conn->exec($sql);
        //get last inserted order
        $order_id = $conn->lastInsertId();
        $conn = null;

        foreach($cart_items as $item){

            //add products from cart to order item table
            $cart_product = $item['product_id'];
            $cart_qty = $item['cart_qty'];
            $sql = "INSERT INTO order_item(order_id, product_id, product_qty)
                    VALUES($order_id, $cart_product, $cart_qty)";
            connection::execQuery($sql);

            //Decrement product quantity
            $sql = "SELECT *
                    FROM products
                    WHERE product_id = $cart_product";
            $result = connection::query($sql)[0];
            $new_qty = $result['quantity'] - $cart_qty;
            $sql = "UPDATE products
                    SET quantity = $new_qty
                    WHERE product_id = $cart_product";
            connection::execQuery($sql);
        }
        //Empty cart for user
        $sql = "DELETE FROM cart
                WHERE user_id = $id";
        connection::execQuery($sql);

        //Add entry in transaction history table
        $sql = "INSERT INTO transaction_history(user_id, order_id, transaction_amount)
                VALUES($id, $order_id, $request->total_final_price)";
        connection::execQuery($sql);

        return redirect(route('checkout.page'));
    }
}

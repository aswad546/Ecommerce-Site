<?php

namespace App\Http\Controllers;

use App\Connection\connection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use PDO;

class CartController extends Controller
{
    public function addToCart(Request $request): JsonResponse
    {

        $id = session('user_id');
        $item = '';
        $sql = "SELECT *
                    FROM cart
                    WHERE product_id = $request->id";
        $exists = connection::query($sql);
        if (!count($exists)) {
            $sql = "INSERT INTO cart
                     VALUES(DEFAULT, '$request->qty', $id, $request->id, DEFAULT, DEFAULT)";
        } else {
            $new_qty = $exists[0]['cart_qty'] + 1;
            $sql = "UPDATE cart
                        SET cart_qty = $new_qty
                        WHERE product_id = $request->id";
        }
        connection::execQuery($sql);

        return response()->json(['success' => 'SUCCESS!']);
    }



    public function addCart(Request $request, $id) : RedirectResponse
    {
        $item = '';
        $sql = "SELECT *
                    FROM cart
                    WHERE product_id = $request->id";
        $exists = connection::query($sql);
        if (!count($exists)) {
            $sql = "INSERT INTO cart
                     VALUES(DEFAULT, '$request->qty', $id, $request->id, DEFAULT, DEFAULT)";
        } else {
            $new_qty = $exists[0]['cart_qty'] + $request->quantity;
            $sql = "UPDATE cart
                        SET cart_qty = $new_qty
                        WHERE product_id = $request->id";
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

    public function applyPromocode(Request $request){
        dd($request->all());
    }
}

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
//        $id = session('user_id');
        $item = '';
//        dd($id);
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
//        return view('product-detail', compact($id));
    }
}

<?php

namespace App\Http\Controllers;

use App\Connection\connection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use PDO;

class CartController extends Controller
{
    public function addToCart(Request $request): JsonResponse
    {
        $conn = connection::connect_db();
        $id = session('user_id');
        if($conn) {
            $sql = "INSERT INTO cart
                     VALUES(DEFAULT, '$request->qty', $id, $request->id, DEFAULT, DEFAULT)";
            $conn->exec($sql);
            $conn= null;
        }
        return response()->json(['success' => 'SUCCESS!']);
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
//        dd($res);
        return view('shopping-cart', compact('res'));
//        return view('edit-user-profile', compact('res'));

    }
    public function applyPromocode(Request $request){
        dd($request->all());
    }
}

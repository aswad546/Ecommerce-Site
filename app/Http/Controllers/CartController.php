<?php

namespace App\Http\Controllers;

use App\Connection\connection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

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
}

<?php

namespace App\Http\Controllers;

use App\Connection\connection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    function register(Request $request)
    {
        $conn = connection::connect_db();
        $user_id = "";
        if ($conn) {
            $hashed_pass = Hash::make($request->password);
            $sql = "INSERT INTO users
                    VALUES (DEFAULT, '$request->name', '$request->email', '$request->address', '$request->user_type', DEFAULT, '$hashed_pass', DEFAULT, DEFAULT, DEFAULT);";
            $conn->exec($sql);
            $user_id = $conn->lastInsertId();
            Session::put('user_id', $user_id);
            $sql = "INSERT INTO wallet
                    VALUES(DEFAULT, 0, $user_id, DEFAULT, DEFAULT)";
            $conn->exec($sql);
        }


        $conn = null;
        return redirect('/');
    }
}

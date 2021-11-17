<?php

namespace App\Http\Controllers;

use App\Connection\connection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    function register(Request $request){
        $conn = connection::connect_db();
        if($conn)
        {
            $hashed_pass = Hash::make($request->password);
            $sql = "INSERT INTO users
                    VALUES (DEFAULT, '$request->name', '$request->email', DEFAULT, '$hashed_pass', DEFAULT, DEFAULT, DEFAULT);";
            $conn->exec($sql);
        }
        $user_id = $conn->lastInsertId();
        Session::put('user_id', $user_id);
        $conn = null;
        return redirect('/');
//        $request->session->put('user_id', $request)
//        return view()
    }
}

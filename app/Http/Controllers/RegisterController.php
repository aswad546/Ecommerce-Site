<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use function App\Connection\connect_db;

class RegisterController extends Controller
{
    function register(Request $request){
        $conn = connect_db();
        if($conn)
        {
            $hashed_pass = Hash::make($request->password);
            $sql = "INSERT INTO users (name, email, password)
                    VALUES ($request->name, $request->email, $hashed_pass);";
            $conn->exec($sql);
        }
        $conn = null;
    }
}

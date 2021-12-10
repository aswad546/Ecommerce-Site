<?php

namespace App\Http\Controllers;

use App\Connection\connection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use PDO;
use RecursiveArrayIterator;

class LoginController extends Controller
{
    public function login(Request $request){
        $conn = connection::connect_db();
        if($conn)
        {
            $sql = "SELECT * FROM users
                    WHERE email = '$request->email'
                    LIMIT 1";
            $query = $conn->prepare($sql);
            $query->execute();
            $result = $query->setFetchMode(PDO::FETCH_ASSOC);
            $res = $query->fetchAll();
            if($res && $res[0]['block'] == 'block')
                return redirect('/');
            if($res && Hash::check($request->password, $res[0]['password'])){
                Session::put('user_id', $res[0]['id']);
            }
            $conn = null;
            return redirect('/');
        }
    }
    public function logout(){
        if(Session::has('user_id')){
            Session::forget('user_id');
        }
        return redirect('/');
    }
}

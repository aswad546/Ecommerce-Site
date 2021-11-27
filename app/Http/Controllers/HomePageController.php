<?php

namespace App\Http\Controllers;

use App\Connection\connection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use PDO;

class HomePageController extends Controller
{
    public function index(){
        if(Session::has('user_id')){
            $conn = connection::connect_db();
            $id = session('user_id');
            $sql = "SELECT * FROM users WHERE id = $id";
            $query = $conn->prepare($sql);
            $query->execute();
            $result = $query->setFetchMode(PDO::FETCH_ASSOC);
            $res = $query->fetchAll();
            if($res) {
                $res = $res[0];
                $id = $res['id'];
                $sql = "SELECT * FROM products
                        WHERE user_id = $id";
                $query = $conn->prepare($sql);
                $query->execute();
                $result = $query->setFetchMode(PDO::FETCH_ASSOC);
                $products = $query->fetchAll();
//                dd($products);
                return view('homepage', compact('res', 'products'));
            }
        }
        return view('homepage');
    }
}

<?php

namespace App\Http\Controllers;

use App\Connection\connection;
use Illuminate\Http\Request;

class WalletController extends Controller
{
    public function showWallet(){
        /*$conn = connection::connect_db();
        $id =
        if($conn){
            $sql =
        }*/
        return view('view-wallet');
    }
}

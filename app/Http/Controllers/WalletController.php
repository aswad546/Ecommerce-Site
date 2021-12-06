<?php

namespace App\Http\Controllers;

use App\Connection\connection;
use Illuminate\Http\Request;
use PDO;

class WalletController extends Controller
{
    public function showWallet(){
        $conn = connection::connect_db();
        $id = session('user_id');
        $wallet = "";
        if($conn){
            $sql = "SELECT *
                    FROM wallet
                    WHERE user_id = $id";
            $query = $conn->prepare($sql);
            $query->execute();
            $result = $query->setFetchMode(PDO::FETCH_ASSOC);
            $wallet = $query->fetchAll()[0];
        }
        return view('view-wallet', compact('wallet'));
    }
}

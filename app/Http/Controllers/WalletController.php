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
    public function useWallet(Request $request){
        $id = session('user_id');
        $sql = "SELECT *
                FROM wallet
                where user_id = $id";
        $current_amount = connection::query($sql)[0]['wallet_amount'];
        if($current_amount >= $request->walletAmount){
            $new_amount = $current_amount - $request->walletAmount;
            $sql = "UPDATE wallet
                    SET wallet_amount = $new_amount
                    WHERE user_id = $id";
            connection::execQuery($sql);
            return response()->json(['success'=>'SUCCESS']);
        }
        else{
            return response()->json(['fail'=>'FAIL']);
        }
    }
}

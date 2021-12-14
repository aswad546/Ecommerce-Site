<?php

namespace App\Http\Controllers;

use App\Connection\connection;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function showTransactions(){
        $id = session('user_id');
        $sql = "SELECT *
                FROM transaction_history
                JOIN orders using(order_id)
                WHERE user_id = $id";
        $transactions = connection::query($sql);
        return view('transaction-history', compact('transactions'));
    }
    public function showTransactionItems($transaction_id){
        $id = session('user_id');

        $sql = "SELECT *
                FROM users
                WHERE id = $id";
        $user = connection::query($sql)[0];
        if($user['user_roles'] == 'user' || $user['user_roles'] == 'premiumuser')
        {
            $sql = "SELECT *
                FROM transaction_history t
                JOIN orders using(order_id)
                JOIN order_item using(order_id)
                JOIN products using(product_id)
                where t.user_id = $id and transaction_id = $transaction_id";
        }
        else{
            $sql = "SELECT *
                FROM transaction_history t
                JOIN orders o using(order_id)
                JOIN order_item oi using(order_id)
				JOIN products p using(product_id)
				WHERE p.user_id = $id and transaction_id = $transaction_id";
        }
        $products = connection::query($sql);
//        dd($products);
        return view('history-product', compact('products'));
    }

    public function showVendorTransactions(){
        $id = session('user_id');

        $sql = "SELECT *
                FROM transaction_history t
                JOIN orders o using(order_id)
                JOIN order_item oi using(order_id)
				JOIN products p using(product_id)
                GROUP BY transaction_id
				HAVING p.user_id = $id
				ORDER BY transaction_id";

        $transactions = connection::query($sql);
        return view('transaction-history', compact('transactions'));
    }
}

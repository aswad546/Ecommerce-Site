<?php

namespace App\Exports;

use App\Connection\connection;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;

class TransactionExport implements FromCollection
{
    /**
    * @return Collection
    */
    public function collection(): Collection
    {
        $id = session('user_id');

        $sql = "SELECT *
                FROM transaction_history t
                JOIN orders o using(order_id)
                JOIN order_item oi using(order_id)
				JOIN products p using(product_id)
				WHERE p.user_id = $id";

        $result = connection::query($sql);

        $invoices[] = array('Transaction ID', 'Product ID', 'Product Name', 'Product Price', 'Quantity Sold', 'Product Total', 'Transaction Total');
        foreach($result as $transaction)
        {
            $invoices[] = array(
                'Transaction ID'  => $transaction['transaction_id'],
                'Product ID'   => $transaction['product_id'],
                'Product Name'    => $transaction['product_name'],
                'Product Price'  => $transaction['price'],
                'Quantity Sold'   => $transaction['product_qty'],
                'Product Total' => $transaction['price'] * $transaction['product_qty'],
                'Transaction Total' => $transaction['transaction_amount']
            );
        }
        return collect($invoices);
    }
}

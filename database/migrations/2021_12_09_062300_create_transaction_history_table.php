<?php

use App\Connection\connection;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $sql = "CREATE TABLE IF NOT EXISTS transaction_history (
                    `transaction_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
                    `user_id` bigint(20) UNSIGNED NOT NULL,
                    `order_id` bigint(20) UNSIGNED NOT NULL,
                    `transaction_amount` int NOT NULL,
                    `created_at` timestamp NULL DEFAULT NULL,
                    `updated_at` timestamp NULL DEFAULT NULL,
                    PRIMARY KEY (`transaction_id`),
                    FOREIGN KEY (`order_id`) REFERENCES orders(order_id) ON DELETE CASCADE ,
                    FOREIGN KEY (`user_id`) REFERENCES users(id) ON DELETE CASCADE
                    )";
        connection::execQuery($sql);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $sql = "DROP TABLE transaction_history";
        connection::execQuery($sql);
    }
}

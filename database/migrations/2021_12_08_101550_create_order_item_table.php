<?php

use App\Connection\connection;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $sql = "CREATE TABLE IF NOT EXISTS order_item (
                    `order_id` bigint(20) UNSIGNED NOT NULL,
                    `product_id` bigint(20) UNSIGNED NOT NULL,
                    `product_qty` int NOT NULL,
                    `created_at` timestamp NULL DEFAULT NULL,
                    `updated_at` timestamp NULL DEFAULT NULL,
                    FOREIGN KEY (`order_id`) REFERENCES orders(order_id) ON DELETE CASCADE ,
                    FOREIGN KEY (`product_id`) REFERENCES products(product_id) ON DELETE CASCADE
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
        $sql = "DROP TABLE order_item";
        connection::execQuery($sql);
    }
}

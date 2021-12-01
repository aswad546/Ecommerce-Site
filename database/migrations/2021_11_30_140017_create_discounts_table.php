<?php

use App\Connection\connection;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiscountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $conn = connection::connect_db();
        if ($conn) {
            $sql = "CREATE TABLE IF NOT EXISTS discounts (
                    `discount_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
                    `discount_code` varchar(255) NOT NULL,
                    `discount_type` varchar(255) NULL DEFAULT NULL,
                    `discount_amount` int NOT NULL,
                    `user_id` bigint(20) UNSIGNED,
                    `created_at` timestamp NULL DEFAULT NULL,
                    `updated_at` timestamp NULL DEFAULT NULL,
                    PRIMARY KEY (`discount_id`),
                    FOREIGN KEY (user_id) REFERENCES users(id)
                    )";
            $conn->exec($sql);
            $conn = null;
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $conn = connection::connect_db();
        if($conn){
            $sql = "DROP TABLE discounts";
            $conn->exec($sql);
            $conn = null;
        }
    }
}

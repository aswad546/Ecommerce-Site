<?php

use App\Connection\connection;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $conn = connection::connect_db();
        if($conn){
            $sql = "CREATE TABLE IF NOT EXISTS products (
                    `product_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
                    `product_name` varchar(255) NOT NULL,
                    `product_image` varchar(255) NULL DEFAULT NULL,
                    `quantity` int UNSIGNED NOT NULL,
                    `price` int NOT NULL,
                    `user_id` bigint(20) UNSIGNED,
                    `created_at` timestamp NULL DEFAULT NULL,
                    `updated_at` timestamp NULL DEFAULT NULL,
                    PRIMARY KEY (`product_id`),
                    FOREIGN KEY (user_id) REFERENCES users(id)
                    )";
            $conn->exec($sql);
            $conn = null;
        }
        /*Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });*/
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
            $sql = "DROP TABLE products";
            $conn->exec($sql);
            $conn = null;
        }
//        Schema::dropIfExists('products');
    }
}

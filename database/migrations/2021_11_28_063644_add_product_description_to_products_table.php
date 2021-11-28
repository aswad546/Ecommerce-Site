<?php

use App\Connection\connection;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProductDescriptionToProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $conn = connection::connect_db();
        if($conn) {
            $sql = "ALTER TABLE `products`
                    ADD product_description TEXT DEFAULT NULL AFTER category";
            $conn->exec($sql);
            $conn = null;
        }
        /*Schema::table('products', function (Blueprint $table) {
            //
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
            $sql = "ALTER TABLE users
                    DROP product_description";
            $conn->exec($sql);
            $conn = null;
        }
       /* Schema::table('products', function (Blueprint $table) {
            //
        });*/
    }
}

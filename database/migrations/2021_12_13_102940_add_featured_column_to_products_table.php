<?php

use App\Connection\connection;
use Illuminate\Database\Migrations\Migration;

class AddFeaturedColumnToProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $sql = "ALTER TABLE products
                ADD featured varchar(255) DEFAULT NULL NULL AFTER category";
        connection::execQuery($sql);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $sql = "ALTER TABLE products
                DROP featured";
        connection::execQuery($sql);
    }
}

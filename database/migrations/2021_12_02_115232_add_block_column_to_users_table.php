<?php

use App\Connection\connection;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBlockColumnToUsersTable extends Migration
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
            $sql = "ALTER TABLE `users`
                    ADD block varchar(255) DEFAULT 'unblock' AFTER password";
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
                    DROP block";
            $conn->exec($sql);
            $conn = null;
        }
    }
}

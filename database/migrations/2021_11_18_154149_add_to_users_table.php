<?php

use App\Connection\connection;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddToUsersTable extends Migration
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
            $sql = "ALTER TABLE `users`
                    ADD user_roles varchar(255) DEFAULT NULL AFTER `email`,
                    ADD address varchar(255) DEFAULT NULL AFTER `email`
                    ";
            $conn->exec($sql);
            $conn = null;
        }
        /*Schema::table('users', function (Blueprint $table) {
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
                    DROP user_roles,
                    DROP address";
            $conn->exec($sql);
            $conn = null;
        }
        /*Schema::table('users', function (Blueprint $table) {
            //
        });*/
    }
}

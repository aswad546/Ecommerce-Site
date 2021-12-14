<?php

use App\Connection\connection;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSecurityQuestionToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $sql = "ALTER TABLE `users`
                ADD security_answer varchar(255) NOT NULL AFTER password,
                ADD security_question varchar(255) NOT NULL AFTER password";
        connection::execQuery($sql);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $sql = "ALTER TABLE users
                DROP security_question,
                DROP security_answer";
        connection::execQuery($sql);
    }
}

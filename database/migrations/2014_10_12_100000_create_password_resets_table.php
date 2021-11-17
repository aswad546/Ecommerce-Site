<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use function App\Connection\connect_db;

class CreatePasswordResetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $conn = connect_db();
        if ($conn) {
            $sql = "CREATE TABLE if not exists `password_resets` (
                    `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                    `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                    `created_at` timestamp NULL DEFAULT NULL
            )";
            $conn->exec($sql);
            $sql = "ALTER TABLE `password_resets`
            ADD KEY `password_resets_email_index` (`email`);";
            $conn->exec($sql);
            $conn = null;
        }

    }

        //
//        Schema::create('password_resets', function (Blueprint $table) {
//            $table->string('email')->index();
//            $table->string('token');
//            $table->timestamp('created_at')->nullable();
//        });


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
//        Schema::dropIfExists('password_resets');
        $conn = connect_db();
        if($conn) {
            $sql = "DROP TABLE IF EXISTS password_resets";
            $conn->exec($sql);
            $conn=null;
        }




    }
}

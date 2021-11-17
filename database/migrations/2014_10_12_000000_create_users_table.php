<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use function App\Connection\connect_db;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $conn = connect_db();
        if($conn)
        {
            $sql = "CREATE TABLE IF NOT EXISTS `users` (
                    `id` bigint(20) UNSIGNED NOT NULL,
                    `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                    `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                    `email_verified_at` timestamp NULL DEFAULT NULL,
                    `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                    `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                    `created_at` timestamp NULL DEFAULT NULL,
                    `updated_at` timestamp NULL DEFAULT NULL
            )";
            $conn->exec($sql);
            $sql = "ALTER TABLE `users`
                    ADD PRIMARY KEY (`id`),
                    ADD UNIQUE KEY `users_email_unique` (`email`);";
            $conn->exec($sql);
            $sql = "ALTER TABLE `users`
                    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;";
            $conn->exec($sql);
            $conn = null;
        }
        /*Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        $conn = connect_db();
        if($conn){
            $sql = "DROP TABLE IF EXISTS users";
            $conn->exec($sql);
            $conn=null;
        }
//        Schema::dropIfExists('users');
    }
}

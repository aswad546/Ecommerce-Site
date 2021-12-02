<?php

use App\Connection\connection;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWalletTable extends Migration
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
            $sql = "CREATE TABLE IF NOT EXISTS wallet (
                    `wallet_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
                    `wallet_amount` int NOT NULL,
                    `user_id` bigint(20) UNSIGNED,
                    `created_at` timestamp NULL DEFAULT NULL,
                    `updated_at` timestamp NULL DEFAULT NULL,
                    PRIMARY KEY (`wallet_id`),
                    FOREIGN KEY (user_id) REFERENCES users(id)
                    )";
            $conn->exec($sql);
            $conn = null;
        }
        /*Schema::create('wallet', function (Blueprint $table) {
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
            $sql = "DROP TABLE wallet";
            $conn->exec($sql);
            $conn = null;
        }
       /* Schema::dropIfExists('wallet');*/
    }
}

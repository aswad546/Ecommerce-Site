<?php

use App\Connection\connection;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbackTable extends Migration
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
            $sql = "CREATE TABLE IF NOT EXISTS feedback (
                    `feedback_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
                    `feedback_text` longtext NOT NULL,
                    `rating` int NOT NULL,
                    `user_id` bigint(20) UNSIGNED,
                    `product_id` bigint(20) UNSIGNED,
                    `created_at` timestamp NULL DEFAULT NULL,
                    `updated_at` timestamp NULL DEFAULT NULL,
                    PRIMARY KEY (`feedback_id`),
                    FOREIGN KEY (user_id) REFERENCES users(id),
                    FOREIGN KEY (product_id) REFERENCES products(product_id)
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
            $sql = "DROP TABLE feedback";
            $conn->exec($sql);
            $conn = null;
        }
    }
}

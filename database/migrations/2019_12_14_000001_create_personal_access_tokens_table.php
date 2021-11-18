<?php

use App\Connection\connection;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use function App\Connection\connect_db;

class CreatePersonalAccessTokensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::create('personal_access_tokens', function (Blueprint $table) {
//            $table->id();
//            $table->morphs('tokenable');
//            $table->string('name');
//            $table->string('token', 64)->unique();
//            $table->text('abilities')->nullable();
//            $table->timestamp('last_used_at')->nullable();
//            $table->timestamps();
//        });
        $conn = connection::connect_db();
        if ($conn) {
            $sql = "CREATE TABLE if not exists `personal_access_tokens` (
                    `id` bigint(20) UNSIGNED NOT NULL,
                      `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                      `tokenable_id` bigint(20) UNSIGNED NOT NULL,
                      `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                      `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
                      `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                      `last_used_at` timestamp NULL DEFAULT NULL,
                      `created_at` timestamp NULL DEFAULT NULL,
                      `updated_at` timestamp NULL DEFAULT NULL
            )";
            $conn->exec($sql);
            $sql = "ALTER TABLE `personal_access_tokens`
              ADD PRIMARY KEY (`id`),
              ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
              ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);
";
            $conn->exec($sql);
            $sql = "ALTER TABLE `personal_access_tokens`
              MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;";
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
//        Schema::dropIfExists('personal_access_tokens');
        $conn = connection::connect_db();
        if($conn){
            $sql = "DROP TABLE IF EXISTS personal_access_tokens";
            $conn->exec($sql);
            $conn=null;
        }
    }

}

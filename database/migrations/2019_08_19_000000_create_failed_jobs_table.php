<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFailedJobsTable extends Migration
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
            $sql = "CREATE TABLE if not exists `failed_jobs` (
              `id` bigint(20) UNSIGNED NOT NULL,
              `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
              `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
              `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
              `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
              `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
              `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
)";
            $conn->exec($sql);
            $sql = "ALTER TABLE `failed_jobs`
                  ADD PRIMARY KEY (`id`),
                  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);";
            $conn->exec($sql);
            $sql = "ALTER TABLE `failed_jobs`
              MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;";
            $conn->exec($sql);
            $conn = null;
        }

//        Schema::create('failed_jobs', function (Blueprint $table) {
//            $table->id();
//            $table->string('uuid')->unique();
//            $table->text('connection');
//            $table->text('queue');
//            $table->longText('payload');
//            $table->longText('exception');
//            $table->timestamp('failed_at')->useCurrent();
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
//        Schema::dropIfExists('failed_jobs');
        $conn = connect_db();
        if($conn){
            $sql = "DROP TABLE IF EXISTS failed_jobs";
            $conn->exec($sql);
            $conn=null;
        }
    }
}

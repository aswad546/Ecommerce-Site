<?php

namespace Database\Seeders;

use App\Connection\connection;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_type = ['vendor', 'user'];
        $faker = Faker::create();
        for ($i = 0; $i < 2000; $i++) {
            $name = $faker->name;
            $address = $faker->word;
            $email = $faker->unique()->safeEmail;
            $type = $user_type[$i%2];
            $password = Hash::make('1234');
            $question = $faker->word;
            $answer = $faker->word;
            $wallet_amount = $faker->numberBetween(0,10000);
            $conn = connection::connect_db();
            $sql = "INSERT INTO users
                VALUES (DEFAULT, '$name', '$email', '$address', '$type', DEFAULT, '$password', '$question', '$answer', 'unblock', DEFAULT, DEFAULT, DEFAULT);";
//            dd($sql);
            $conn->exec($sql);
            $id = $conn->lastInsertId();
            $sql = "INSERT INTO wallet
                    VALUES(DEFAULT, $wallet_amount, $id, DEFAULT, DEFAULT)";
            $conn->exec($sql);
            $conn = null;
        }
    }
}

<?php

namespace App\Connection;

use PDO;
use PDOException;

class connection
{
    public static function connect_db()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $conn = "";
        try {
            $conn = new PDO("mysql:host=$servername;dbname=db_proj", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        return $conn;
    }
}

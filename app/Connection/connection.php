<?php
namespace App\Connection;

use PDO;
use PDOException;

function connect_db()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $conn = "";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=db_proj", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    return $conn;
}

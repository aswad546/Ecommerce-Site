<?php

namespace App\Connection;

use PDO;
use PDOException;

class connection
{
    public static function connect_db()
    {
        $DATABASE_URL=parse_url('DATABASE_URL');
        dd($DATABASE_URL);
        $host = $DATABASE_URL['host'];
        $port = $DATABASE_URL['post'];
        $dsn = "pgsql:host=$host;port=$port;dbname=";
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

    public static function query($sql)
    {
        $conn = self::connect_db();
        if ($conn) {
            $query = $conn->prepare($sql);
            $query->execute();
            $query->setFetchMode(PDO::FETCH_ASSOC);
            return $query->fetchAll();
        }
        $conn = null;
        return null;
    }

    public static function execQuery($sql) {
        $conn = self::connect_db();
        if($conn) {
            $conn->exec($sql);
        }
        $conn = null;
    }

    public static function getLastId(){
        $conn = self::connect_db();
        $id = "";
        if($conn){
            $id = $conn->lastInsertId();
        }
        $conn = null;
        return $id;
    }
}

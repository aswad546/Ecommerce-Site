<?php

namespace App\Connection;

use PDO;
use PDOException;

class connection
{
    public static function connect_db()
    {
        $DATABASE_URL=parse_url('DATABASE_URL');
        $host = "ec2-34-233-192-238.compute-1.amazonaws.com";
        $db = "d754dl5hoij408";
        $dsn = "pgsql:host=$host;port=5432;dbname=$db;";
        $username = 'wgszyqmhcmblyq';
        $password = '699e50532a1fc6b3dfe7fc0a5f59ff29acc3173c6de7697da9d522892251e56a';
        $conn = "";
        try {
            $conn = new PDO($dsn, $username, $password);
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

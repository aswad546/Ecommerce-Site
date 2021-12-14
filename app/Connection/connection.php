<?php

namespace App\Connection;

use PDO;
use PDOException;
$DATABASE_URL=parse_url('DATABASE_URL');
class connection
{
    public static function connect_db()
    {
        $servername = "uzb4o9e2oe257glt.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
        $username = "owlven9xmx9t7wvp";
        $password = "r16gjn8r5uv2lv1g";
        $conn = "";
        try {
            $conn = new PDO("mysql:host=$servername;dbname=hmfaszhqlbfu944j", $username, $password);
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

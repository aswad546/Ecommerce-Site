<?php

namespace App\Http\Controllers;

use App\Connection\connection;
use Illuminate\Http\Request;
use PDO;

class ShopController extends Controller
{
    public function showTops(){
        $res = $this->getUser();
        $products = $this->getProducts('Top');

        return view('product-type-tops', compact('products', 'res'));
    }

    public function showBottoms(){
        $res = $this->getUser();
        $products = $this->getProducts('Bottom');
        return view('product-type-bottoms', compact('products', 'res'));
    }

    public function showShoes(){
        $res = $this->getUser();
        $products = $this->getProducts('Shoe');
        return view('product-type-shoes', compact('products', 'res'));
    }

    /**
     * @return array|false|string
     */
    public function getProducts($category)
    {
        $conn = connection::connect_db();
        $products = "";
        if ($conn) {
            $sql = "SELECT *
                    FROM products p
                    WHERE p.category = '$category'";
            $query = $conn->prepare($sql);
            $query->execute();
            $result = $query->setFetchMode(PDO::FETCH_ASSOC);
            $products = $query->fetchAll();
            $conn = null;
        }
        return $products;
    }

    public function getUser()
    {
        $conn = connection::connect_db();
        $user = "";
        if ($conn) {
            $id = session('user_id');
            $sql = "SELECT *
                    FROM users u
                    WHERE u.id = $id";
            $query = $conn->prepare($sql);
            $query->execute();
            $result = $query->setFetchMode(PDO::FETCH_ASSOC);
            $user = $query->fetchAll()[0];
            $conn = null;
        }
        return $user;
    }


}

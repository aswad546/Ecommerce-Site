<?php

namespace App\Http\Controllers;

use App\Connection\connection;
use Illuminate\Http\Request;
use PDO;

class ShopController extends Controller
{
    public function showTops(){
        $res = $this->getUser();
        $cart = $this->getCart();
        $products = $this->getProducts('Top');

        return view('product-type-tops', compact('products', 'res', 'cart'));
    }

    public function showBottoms(){
        $res = $this->getUser();
        $products = $this->getProducts('Bottom');
        $cart = $this->getCart();
        return view('product-type-bottoms', compact('products', 'res', 'cart'));
    }

    public function showShoes(){
        $res = $this->getUser();
        $products = $this->getProducts('Shoe');
        $cart = $this->getCart();
        return view('product-type-shoes', compact('products', 'res', 'cart'));
    }

    public function searchProducts(Request $request){
        $res = $this->getUser();
        $cart = $this->getCart();
        $conn = connection::connect_db();
        $search = $request->search;
        $products = "";
        if($conn){
            $sql = "SELECT * FROM products
                    where product_name LIKE '%$search%' or category LIKE '%$search%'";
            $query = $conn->prepare($sql);
            $query->execute();
            $result = $query->setFetchMode(PDO::FETCH_ASSOC);
            $products = $query->fetchAll();
            $conn = null;
        }
        return view('search-result', compact('res', 'products', 'cart'));
    }

    /**
     * @return array|false|string
     */
    protected function getProducts($category)
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
    protected function getCart(){
        $conn = connection::connect_db();
        $product = "";
        if ($conn) {
            $id = session('user_id');
            $sql = "SELECT *
                    FROM cart c
                    JOIN users u on u.id = c.user_id
                    JOIN products p on p.product_id = c.product_id
                    WHERE c.user_id = $id";
            $query = $conn->prepare($sql);
            $query->execute();
            $result = $query->setFetchMode(PDO::FETCH_ASSOC);
            $product = $query->fetchAll();
            $conn = null;
        }
        return $product;
    }

    protected function getUser()
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

    public function showProductDetail($product_id){
//        dd($product_id);
        $res = $this->getUser();
        $conn = connection::connect_db();
        $product = "";
        $feedback = "";
        if ($conn) {
            $user_id = session('user_id');
            $sql = "SELECT *
                    FROM products p
                    JOIN users u on u.id = p.user_id
                    WHERE p.product_id = $product_id";
            $query = $conn->prepare($sql);
            $query->execute();
            $result = $query->setFetchMode(PDO::FETCH_ASSOC);
            $product = $query->fetchAll()[0];

            $sql = "SELECT *
                    FROM feedback f
                    JOIN users u on u.id = f.user_id
                    WHERE f.product_id = $product_id";
            $query = $conn->prepare($sql);
            $query->execute();
            $result = $query->setFetchMode(PDO::FETCH_ASSOC);
            $feedback = $query->fetchAll();
//            dd($feedback);

//            dd($product);
//            $feedback = $query->fetchAll()[0];
            $conn = null;
        }
        return view('product-detail', compact('res', 'product', 'feedback'));
    }


}

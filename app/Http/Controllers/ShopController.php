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

    public function searchProducts(Request $request){
        $res = $this->getUser();
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
        return view('search-result', compact('res', 'products'));
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

    public function showProductDetail($id){
        $res = $this->getUser();
        $conn = connection::connect_db();
        $product = "";
        if ($conn) {
            $user_id = session('user_id');
            $sql = "SELECT *
                    FROM products p
                    WHERE p.product_id = $id";
            $query = $conn->prepare($sql);
            $query->execute();
            $result = $query->setFetchMode(PDO::FETCH_ASSOC);
            $product = $query->fetchAll()[0];
            $conn = null;
        }
        return view('product-detail', compact('res', 'product'));
    }


}

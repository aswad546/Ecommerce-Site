<?php

namespace App\Http\Controllers;

use App\Connection\connection;
use Illuminate\Http\Request;
use PDO;

class VendorController extends Controller
{

    public function showProducts(Request $request)
    {
        $conn = connection::connect_db();
        if ($conn) {
            $id = session('user_id');
            $sql = "SELECT *
                    FROM products p
                    JOIN users u on u.id = p.user_id
                    WHERE u.id = $id";
            $query = $conn->prepare($sql);
            $query->execute();
            $result = $query->setFetchMode(PDO::FETCH_ASSOC);
            $res = $query->fetchAll();
//            dd($res);
            $conn = null;
            return view('show-products-page', compact('res'));
        }
    }

    public function removeProducts(Request $request, $id)
    {
        $conn = connection::connect_db();
        if ($conn) {
            $sql = "DELETE FROM products WHERE product_id = $id";
            $conn->exec($sql);
            $conn = null;
        }
        return redirect()->back();
    }

    public function editProduct(Request $request, $id)
    {
        return view('edit-product-page', compact('id'));
    }

    public function addProduct(Request $request)
    {
        return view('add-product-page');
    }

    public function createProduct(Request $request)
    {
        $conn = connection::connect_db();
        if ($conn) {
            $id = session('user_id');
            $name = round(microtime(true) * 10000) . '_' . $id . '.' . $request->file('product_image')->getClientOriginalExtension();

            $destinationPath = public_path('\assets\images');

            $request->file('product_image')->move($destinationPath, $name);

            $sql = "INSERT INTO products
                    VALUES (DEFAULT, '$request->product_name', '$name', '$request->quantity', '$request->price', $id, DEFAULT, DEFAULT);";
            $conn->exec($sql);
            $conn = null;
        }
        return redirect('/vendor-products');
    }


    public function saveProduct(Request $request, $id)
    {
        $conn = connection::connect_db();
        if ($conn) {
            $name1 = round(microtime(true) * 10000) . '_' . $id . '.' . $request->file('product_image')->getClientOriginalExtension();

            $destinationPath = public_path('\assets\images');

            $request->file('product_image')->move($destinationPath, $name1);
            $sql = "UPDATE products
                    SET
                        product_name = '$request->product_name',
                        product_image = '$name1',
                        price = '$request->price',
                        quantity = '$request->quantity'
                    WHERE product_id = $id";
            $conn->exec($sql);
            $conn = null;
        }
        return redirect('/vendor-products');
    }
}

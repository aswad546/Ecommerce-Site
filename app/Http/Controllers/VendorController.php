<?php

namespace App\Http\Controllers;

use App\Connection\connection;
use App\Exports\TransactionExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use PDO;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

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

    public function removeDiscount(Request $request, $id)
    {
        $conn = connection::connect_db();
        if ($conn) {
            $sql = "DELETE FROM discounts WHERE discount_id = $id";
            $conn->exec($sql);
            $conn = null;
        }
        return redirect()->back();
    }

    public function editProduct(Request $request, $id)
    {
        $conn = connection::connect_db();
        $res = "";
        if ($conn) {
            $user_id = session('user_id');
            $sql = "SELECT *
                    FROM products p
                    JOIN users u on u.id = p.user_id
                    WHERE p.product_id = $id";
            $query = $conn->prepare($sql);
            $query->execute();
            $result = $query->setFetchMode(PDO::FETCH_ASSOC);
            $res = $query->fetchAll()[0];
            $conn = null;
        }
        return view('edit-product-page', compact('id', 'res'));
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
                    VALUES (DEFAULT, '$request->product_name', '$name', '$request->quantity', '$request->price', '$request->category', '$request->description',  $id, DEFAULT, DEFAULT);";
            $conn->exec($sql);
            $conn = null;
        }
        return redirect('/vendor-products');
    }


    public function saveDiscount(Request $request)
    {
        $conn = connection::connect_db();
        if ($conn) {

            $id = session('user_id');
//            dd($id);
            $sql = "INSERT INTO discounts
                    VALUES (DEFAULT, '$request->discount_code', '$request->discount_type', '$request->discount_amount', $id, DEFAULT, DEFAULT);";
            $conn->exec($sql);
            $conn = null;
        }
        return redirect('/vendor-products/discounts');
    }

    public function showDiscount(Request $request)
    {
        $conn = connection::connect_db();
        if ($conn) {
            $id = session('user_id');
            $sql = "SELECT *
                    FROM discounts
                    WHERE user_id = $id";;
            $query = $conn->prepare($sql);
            $query->execute();
            $result = $query->setFetchMode(PDO::FETCH_ASSOC);
            $res = $query->fetchAll();
            $conn = null;
            return view('vendor-discount', compact('res'));
        }

    }

    public function editDiscount(Request $request, $id)
    {
        $conn = connection::connect_db();
        $res = "";
        if ($conn) {
            $user_id = session('user_id');
            $sql = "SELECT *
                    FROM discounts d
                    WHERE d.discount_id = $id";
            $query = $conn->prepare($sql);
            $query->execute();
            $result = $query->setFetchMode(PDO::FETCH_ASSOC);
            $res = $query->fetchAll()[0];
            $conn = null;
        }
        return view('edit-discount', compact('id', 'res'));
    }


    public function saveProduct(Request $request, $id)
    {
        $conn = connection::connect_db();
        if ($conn) {
            $name1 = "";
            if ($request->file('product_image')) {
                $name1 = round(microtime(true) * 10000) . '_' . $id . '.' . $request->file('product_image')->getClientOriginalExtension();
                $destinationPath = public_path('\assets\images');
                $request->file('product_image')->move($destinationPath, $name1);
            }
            $product_name = $request->product_name ? "product_name = '$request->product_name'" . ($request->file('product_image') || $request->category || $request->price || $request->description || $request->quantity ? "," : "") : "";
            $product_image = $request->file('product_image') ? "product_image = '$name1'" . ($request->price || $request->category || $request->description || $request->quantity ? "," : "") : "";
            $product_price = $request->price ? "price = '$request->price'" . ($request->quantity || $request->description || $request->category ? "," : "") : "";
            $product_quantity = $request->quantity ? "quantity = '$request->quantity'" . ($request->category || $request->description ? "," : "") : "";
            $product_category = $request->category ? "category = '$request->category'" . ($request->description ? "," : "") : "";
            $product_description = $request->description ? "product_description = '$request->description'" : "";
            $sql = "UPDATE products
                    SET
                        $product_name $product_image $product_price $product_quantity $product_category $product_description
                    WHERE product_id = $id";

            $conn->exec($sql);
            $conn = null;
        }
        return redirect('/vendor-products');
    }

    public function editDiscountSave(Request $request, $id)
    {

        $conn = connection::connect_db();

        if ($conn) {

            $discount_code = $request->discount_code ? "discount_code = '$request->discount_code'" . ($request->discount_type || $request->discount_amount ? "," : "") : "";
            $discount_type = $request->discount_type ? "discount_type = '$request->discount_type'" . ($request->discount_amount ? "," : "") : "";
            $discount_amount = $request->discount_amount ? "discount_amount = '$request->discount_amount'" : "";

            $sql = "UPDATE discounts
                    SET
                        $discount_code $discount_type $discount_amount
                    WHERE discount_id = $id";
            $conn->exec($sql);
            $conn = null;
        }
        return redirect('/vendor-products/discounts');
    }

    public function exportAllTransactions(): BinaryFileResponse
    {

        return Excel::download(new TransactionExport(2018), 'transaction_history.xlsx');
    }


}

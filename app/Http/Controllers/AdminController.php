<?php

namespace App\Http\Controllers;

use App\Connection\connection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PDO;

class AdminController extends Controller
{
    public function adminDash()
    {
        return view('vendor-dashboard');
    }

    public function venList()
    {

        $conn = connection::connect_db();
        $vendors = "";
        if ($conn) {
            $sql = "SELECT * FROM users
                    where user_roles = 'vendor'";

            $query = $conn->prepare($sql);
            $query->execute();
            $result = $query->setFetchMode(PDO::FETCH_ASSOC);
            $vendors = $query->fetchAll();


            $conn = null;
        }
        return view('vendor-list', compact("vendors"));
    }

    public function useList()
    {

        $conn = connection::connect_db();
        $users = "";
        if ($conn) {
            $sql = "SELECT * FROM users
                    where user_roles = 'user'";

            $query = $conn->prepare($sql);
            $query->execute();
            $result = $query->setFetchMode(PDO::FETCH_ASSOC);
            $users = $query->fetchAll();


            $conn = null;
        }
        return view('users-list', compact("users"));
    }

    public function addVendorSave(Request $request)
    {
        $conn = connection::connect_db();
        if ($conn) {
            $hashed_pass = Hash::make($request->password);
            $vendor = 'vendor';
            $sql = "INSERT INTO users
                    VALUES (DEFAULT, '$request->name', '$request->email', '$request->address', 'vendor', DEFAULT, '$hashed_pass', DEFAULT, DEFAULT, DEFAULT);";
            $conn->exec($sql);
        }
        return redirect()->to(route('ven.list'));
    }


    public function addVendorBlock(Request $request): JsonResponse
    {
        $conn = connection::connect_db();
//        dd($request->all());
        $block = "";
        $id = $request->id;
        if ($conn) {
            $sql1 = "SELECT block
                    FROM users
                    WHERE id = $id ";
//            $conn->exec($sql1);

            $query = $conn->prepare($sql1);
            $query->execute();
            $result = $query->setFetchMode(PDO::FETCH_ASSOC);
            $res = $query->fetchAll();
//            dd($res);
//            if($res == 'unblock'){
            $block = $res[0]['block'] == 'unblock' ? 'block' : 'unblock';

            $sql = "UPDATE users
                    SET block = '$block'
                    WHERE id = $id ";
            $conn->exec($sql);
            $conn = null;
        }
//        return redirect()->to(route('ven.list'));
        return response()->json(['success' => $block == 'block' ? 'btn-outline-success' : 'btn-outline-danger', 'block' => $block]);
    }

}

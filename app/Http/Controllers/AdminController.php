<?php

namespace App\Http\Controllers;

use App\Connection\connection;
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
        if($conn){
            $sql = "SELECT * FROM users
                    where user_roles = 'vendor'";

            $query = $conn->prepare($sql);
            $query->execute();
            $result = $query->setFetchMode(PDO::FETCH_ASSOC);
            $vendors = $query->fetchAll();


            $conn = null;
        }
        return view('vendor-list',compact("vendors"));
    }
    public function useList()
    {

        $conn = connection::connect_db();
        $users = "";
        if($conn){
            $sql = "SELECT * FROM users
                    where user_roles = 'user'";

            $query = $conn->prepare($sql);
            $query->execute();
            $result = $query->setFetchMode(PDO::FETCH_ASSOC);
            $users = $query->fetchAll();


            $conn = null;
        }
        return view('users-list',compact("users"));
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

}

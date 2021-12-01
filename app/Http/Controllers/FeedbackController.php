<?php

namespace App\Http\Controllers;

use App\Connection\connection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use PDO;

class FeedbackController extends Controller
{
    //
    public function saveFeedback(Request $request, $id): RedirectResponse
    {
        $conn = connection::connect_db();
        if ($conn) {
            $u_id = session('user_id');

            $sql1 = "SELECT * FROM feedback
                     WHERE user_id = $u_id and product_id = $id";
            $query = $conn->prepare($sql1);
            $query->execute();
            $result = $query->setFetchMode(PDO::FETCH_ASSOC);
            $product = $query->fetchAll();

            if(count($product) == 0){
                $sql = "INSERT INTO feedback
                    VALUES (DEFAULT, '$request->feedback_text', '$request->rating', $u_id, $id, DEFAULT, DEFAULT);";
                $conn->exec($sql);
            }
            else{
                $sql = "UPDATE feedback
                        SET
                            feedback_text='$request->feedback_text', rating='$request->rating'
                        WHERE user_id = $u_id and product_id = $id";
                $conn->exec($sql);
            }
            $conn = null;
        }
        return redirect()->to(route('shop.product.detail', $id));
    }
}

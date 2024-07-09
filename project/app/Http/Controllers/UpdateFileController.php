<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use mysqli;

class UpdateFileController extends Controller
{
    public static function updateFilePost(Request $request)
    {
        $userID = $request->input('User_ID');
        //Check if a file was uploaded
        if ($request->hasFile('file')) {
            // Get the uploaded file
            $file = $request->file('file');

            // Check if the file is valid
            if ($file->isValid()) {
                // Display the original name of the file
                $fileName = $file->getClientOriginalName();

                // 從資料庫中獲取用戶的當前密碼
                $conn = new mysqli('127.0.0.1:3306', 'root', '123456789', 'team_database');
                $conn->query("SET NAMES 'utf8mb4'");
                // 在資料庫中更新用戶的密碼
                $sql = "UPDATE member SET Photo = ? WHERE User_ID = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param('ss', $fileName, $userID);
                $stmt->execute();

                // 關閉連接
                $conn->close();


                // Move the file to the desired directory
                $file->move(public_path() . '/updateImage/', $file->getClientOriginalName());
                $imagePath = "updateImage/{$fileName}";
                Session::put('imagePath', $imagePath);
                return redirect("/profile/{$userID}")->with(compact('imagePath', 'userID'));
            }
        }
        else {
        // Handle the case where no file was uploaded
        return redirect("/profile/{$userID}");
        }
    }
}

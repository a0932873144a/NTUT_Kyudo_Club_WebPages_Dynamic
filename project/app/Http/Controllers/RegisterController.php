<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use mysqli;

class RegisterController extends Controller
{
    public function login(Request $request)
    {
        
        // 取得使用者輸入的值
        $userID = $request->input('User_ID');
        $password = $request->input('Pw');
        
        // 使用查询构建器构建 SQL 查询
        $conn = new mysqli('127.0.0.1:3306', 'root', '123456789', 'team_database');
        $conn->query("SET NAMES 'utf8mb4'");
        $sql = "SELECT * FROM member WHERE User_ID = '$userID' AND Pw = '$password'";
        $result = $conn->query($sql);
        
        // 檢查查詢結果
        if ($result->num_rows > 0) {
            // 使用者驗證成功
            Session::put('user_id', $userID);
            $row = $result->fetch_assoc();
            if ($row['Permission'] == 1) {
                // 使用者是管理員
                return redirect(route('profileAdministrator', ['userID' => $userID]));
            }
            elseif ($row['Permission'] == 0) {
                // 使用者是一般會員
                return redirect(route('profile', ['userID' => $userID]));
            }
        } else {
            // 使用者驗證失敗
            return redirect('/');
        }
    }

    public function register(Request $request)
    {
        // 取得使用者輸入的值
        $userID = $request->input('User_ID');
        $password = $request->input('Pw');
        $userName = $request->input('User_Name');
        $userClass = $request->input('User_Class');
        
        // 使用查询构建器构建 SQL 查询
        $conn = new mysqli('127.0.0.1:3306', 'root', '123456789', 'team_database');
        $conn->query("SET NAMES 'utf8mb4'");
        $sql = "INSERT INTO member (User_ID, Pw, User_Name, User_Class, Register_date) VALUES ('$userID', '$password', '$userName', '$userClass', now())";
        $result = $conn->query($sql);

        // 檢查查詢結果
        if ($result) {
            // 使用者註冊成功
            return redirect('/members_area');
        } else {
            // 使用者註冊失敗
            return redirect('/register');
        }
        // 關閉連接
        $conn->close();
    }
}

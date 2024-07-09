<?php

namespace App\Helpers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysqli;

class DatabaseHelper
{
    public static function getUserName($userID)
    {
        $conn = new mysqli('127.0.0.1:3306', 'root', '123456789', 'team_database');
        $conn->query("SET NAMES 'utf8mb4'");
        $sql = "SELECT User_Name FROM member WHERE User_ID = '$userID'";
        $result = $conn->query($sql);

        // 檢查查詢是否成功
        if ($result) {
            // 使用 fetch_assoc 提取實際的值
            $row = $result->fetch_assoc();

            // 獲取使用者名稱，如果 $row 存在且 'User_Name' 存在
            $userName = isset($row['User_Name']) ? $row['User_Name'] : '無使用者名稱';
        } else {
            // 如果查詢失敗，返回預設值
            $userName = '找不到使用者';
        }

        // 關閉連接
        $conn->close();

        return $userName;
    }

    public static function getUserClass($userID)
    {
        $conn = new mysqli('127.0.0.1:3306', 'root', '123456789', 'team_database');
        $conn->query("SET NAMES 'utf8mb4'");
        $sql = "SELECT User_class FROM member WHERE User_ID = '$userID'";
        $result = $conn->query($sql);

        // 檢查查詢是否成功
        if ($result) {
            // 使用 fetch_assoc 提取實際的值
            $row = $result->fetch_assoc();

            // 獲取使用者名稱，如果 $row 存在且 'User_class' 存在
            $userClass = isset($row['User_class']) ? $row['User_class'] : '無使用者系所';
        } else {
            // 如果查詢失敗，返回預設值
            $userClass = '找不到使用者';
        }

        // 關閉連接
        $conn->close();

        return $userClass;
    }

    public static function getUserPhoto($userID)
    {
        $conn = new mysqli('127.0.0.1:3306', 'root', '123456789', 'team_database');
        $conn->query("SET NAMES 'utf8mb4'");
        $sql = "SELECT Photo FROM member WHERE User_ID = '$userID'";
        $result = $conn->query($sql);

        // 檢查查詢是否成功
        if ($result) {
            // 使用 fetch_assoc 提取實際的值
            $row = $result->fetch_assoc();

            // 獲取使用者名稱，如果 $row 存在且 'Photo' 存在
            $userPhoto = isset($row['Photo']) ? $row['Photo'] : '使用者無照片';
        } else {
            // 如果查詢失敗，返回預設值
            $userPhoto = '找不到使用者';
        }

        // 關閉連接
        $conn->close();

        return $userPhoto;
    }

    public static function getUserData($userID)
    {
        $conn = new mysqli('127.0.0.1:3306', 'root', '123456789', 'team_database');
        $sql = "SELECT * FROM member WHERE User_ID = '$userID'";
        $result = $conn->query($sql);

        // 檢查查詢是否成功
        if ($result) {
            // 使用 fetch_assoc 提取實際的值
            $row = $result->fetch_assoc();

            // 檢查 $row 是否存在
            if ($row) {
                // 返回整個 tuple
                return $row;
            } else {
                return '找不到使用者';
            }
        } else {
            // 如果查詢失敗，返回預設值
            return '找不到使用者';
        }

        // 關閉連接
        $conn->close();
    }

    public static function getEquipmentPhoto()
    {
        $conn = new mysqli('127.0.0.1:3306', 'root', '123456789', 'team_database');
        $conn->query("SET NAMES 'utf8mb4'");
        $sql = "SELECT * FROM equipment_data";
        $result = $conn->query($sql);

        // 檢查查詢是否成功
        if ($result) {
            $rows = [];
        
            // 使用 fetch_assoc 提取實際的值，逐行添加到 $rows 数组
            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }

            // 檢查 $rows 是否存在
            if ($rows) {
                return ['data' => $rows];
            } else {
                return '找不到使用者';
            }
        } else {
            // 如果查詢失敗，返回預設值
            return '找不到使用者';
        }

        // 關閉連接
        $conn->close();
    }

    public static function getBowData()
    {
        $conn = new mysqli('127.0.0.1:3306', 'root', '123456789', 'team_database');
        $conn->query("SET NAMES 'utf8mb4'");
        $sql = "SELECT * FROM bow_data";
        $result = $conn->query($sql);

        // 檢查查詢是否成功
        if ($result) {
            $rows = [];
        
            // 使用 fetch_assoc 提取實際的值，逐行添加到 $rows 数组
            while ($row = $result->fetch_assoc()) {
                // 获取 Object_ID 对应的 Status_description
                $statusDescription = self::getStatusDescription($row['Object_ID']);
                
                // 根据 Status_description 设置 Condition 值
                $row['Condition'] = ($statusDescription == 1) ? '不可使用' : '可使用';

                $rows[] = $row;
            }

            // 檢查 $rows 是否存在
            if ($rows) {
                return ['data' => $rows];
            } else {
                return '找不到使用者';
            }
        } else {
            // 如果查詢失敗，返回預設值
            return '找不到使用者';
        }

        // 關閉連接
        $conn->close();
    }

    private static function getStatusDescription($objectID)
    {
        $conn = new mysqli('127.0.0.1:3306', 'root', '123456789', 'team_database');
        $conn->query("SET NAMES 'utf8mb4'");
        $sql = "SELECT Status_description FROM damage WHERE Object_ID = '$objectID' order by Repair_ID desc limit 1";
        $result = $conn->query($sql);

        // 檢查查詢是否成功
        if ($result) {
            $row = $result->fetch_assoc();

            // 檢查 $row 是否存在
            if ($row) {
                return $row['Status_description'];
            } else {
                // 如果不存在，默认为 0
                return 0;
            }
        } else {
            // 如果查詢失敗，返回預設值
            return 0;
        }

        // 關閉連接
        $conn->close();
    }

    public static function getUserPracticeData($userID)
    {
        $conn = new mysqli('127.0.0.1:3306', 'root', '123456789', 'team_database');
        $conn->query("SET NAMES 'utf8mb4'");
        $sql = "SELECT * FROM personal_practice_status WHERE User_ID = '$userID' ORDER BY Date DESC";
        $result = $conn->query($sql);
        

        // 檢查查詢是否成功
        if ($result) {
            $rows = [];
        
            // 使用 fetch_assoc 提取實際的值，逐行添加到 $rows 数组
            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }

            // 檢查 $rows 是否存在
            if ($rows) {
                return ['data' => $rows];
            } else {
                return '找不到使用者';
            }
        } else {
            // 如果查詢失敗，返回預設值
            return '找不到使用者';
        }

        // 關閉連接
        $conn->close();
    }

    public static function getActivityClassData()
    {
        $conn = new mysqli('127.0.0.1:3306', 'root', '123456789', 'team_database');
        $conn->query("SET NAMES 'utf8mb4'");
        $sql = "SELECT * FROM activity WHERE Type = 0 ORDER BY Date";
        $result = $conn->query($sql);
        

        // 檢查查詢是否成功
        if ($result) {
            $rows = [];
        
            // 使用 fetch_assoc 提取實際的值，逐行添加到 $rows 数组
            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }

            // 檢查 $rows 是否存在
            if ($rows) {
                return ['data' => $rows];
            } else {
                return '找不到活動';
            }
        } else {
            // 如果查詢失敗，返回預設值
            return '找不到活動';
        }

        // 關閉連接
        $conn->close();
    }

    public static function getActivityEventData()
    {
        $conn = new mysqli('127.0.0.1:3306', 'root', '123456789', 'team_database');
        $conn->query("SET NAMES 'utf8mb4'");
        $sql = "SELECT * FROM activity WHERE Type = 1 ORDER BY Date";
        $result = $conn->query($sql);
        

        // 檢查查詢是否成功
        if ($result) {
            $rows = [];
        
            // 使用 fetch_assoc 提取實際的值，逐行添加到 $rows 数组
            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }

            // 檢查 $rows 是否存在
            if ($rows) {
                return ['data' => $rows];
            } else {
                return '找不到活動';
            }
        } else {
            // 如果查詢失敗，返回預設值
            return '找不到活動';
        }

        // 關閉連接
        $conn->close();
    }

    public static function updateUserPassword(Request $request)
    {
        // 從請求中獲取輸入
        $userID = $request->input('User_ID');
        $currentPassword = $request->input('currentPassword');
        $newPassword = $request->input('newPassword');
        $repeatNewPassword = $request->input('repeatNewPassword');
        
        // 從資料庫中獲取用戶的當前密碼
        $conn = new mysqli('127.0.0.1:3306', 'root', '123456789', 'team_database');
        $sql = "SELECT Pw FROM member WHERE User_ID = '$userID'";
        $result = $conn->query($sql);
        // 檢查查詢是否成功
        if ($result) {
            // 使用 fetch_assoc 提取實際的值
            $row = $result->fetch_assoc();
            // 獲取使用者名稱，如果 $row 存在且 'Pw' 存在
            $userPassword = isset($row['Pw']) ? $row['Pw'] : '找不到密碼';
        } else {
            // 如果查詢失敗，返回預設值
            $userPassword = '找不到使用者';
        }

        // 檢查提供的當前密碼是否與資料庫中的匹配
        if ($currentPassword === $userPassword) {
            // 檢查新密碼和重複新密碼是否匹配
            if ($newPassword === $repeatNewPassword && $newPassword !== null && $repeatNewPassword !== null) {
                // 在資料庫中更新用戶的密碼
                $sql = "UPDATE member SET Pw = ? WHERE User_ID = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param('ss', $newPassword, $userID);
                $stmt->execute();

                // 檢查更新是否成功
                if ($stmt->affected_rows > 0) {
                    echo '密碼更新成功';
                } else {
                    echo '密碼更新失敗';
                }

                // return response()->json(['message' => '密碼更新成功']);
            } else {
                echo '新密碼與重複新密碼不匹配';
                echo '<br>';
                // return response()->json(['error' => '新密碼與重複新密碼不匹配'], 400);
            }
        } else {
            echo '當前密碼不正確';
            echo '<br>';
            // return response()->json(['error' => '當前密碼不正確'], 400);
        }

        // 關閉連接
        $conn->close();
    }
    
    public static function isertPracticeData(Request $request)
    {
        // 從請求中獲取輸入
        $userID = $request->input('User_ID');
        $practice_date = $request->input('practice_date');
        $practice_hall = $request->input('practice_hall');
        $practice_distance = $request->input('practice_distance');
        $practice_number = $request->input('practice_number');
        $practice_hit = $request->input('practice_hit');
        
        if (strlen($practice_date) === 0) {
            echo "練習紀錄失敗";
            exit;
        }
        
        if (strlen($practice_hall) === 0) {
            echo "練習紀錄失敗";
            exit;
        }

        $practice_distance = preg_replace('/[^0-9]/', '', $practice_distance);
        // 确保最后一个字符是 'm'
        if (strlen($practice_distance) > 0 && substr($practice_distance, -1) !== 'm') {
            $practice_distance .= 'm';
        } else {
            echo "練習紀錄失敗";
            exit;
        }

        $practice_number = preg_replace('/[^0-9]/', '', $practice_number);
        if (strlen($practice_number) < 1) {
            echo "練習紀錄失敗";
            exit;
        }

        $practice_hit = preg_replace('/[^0-9]/', '', $practice_hit);
        if (strlen($practice_hit) < 1) {
            echo "練習紀錄失敗";
            exit;
        }

        // 使用查询构建器构建 SQL 查询
        $conn = new mysqli('127.0.0.1:3306', 'root', '123456789', 'team_database');
        $conn->query("SET NAMES 'utf8mb4'");
        $sql = "INSERT INTO personal_practice_status (User_ID, Date, Practice_hall, Distance, Number_of_practice, Number_of_hits) VALUES ('$userID', '$practice_date', '$practice_hall', '$practice_distance', '$practice_number', '$practice_hit')";
        $result = $conn->query($sql);

        // 檢查查詢結果
        if ($result) {
            echo "練習紀錄成功";
        } else {
            echo "練習紀錄失敗";
        }
        // 關閉連接
        $conn->close();
    }    

    public static function isertRepairOrder(Request $request){
        // 從請求中獲取輸入
        $userID = $request->input('User_ID');
        $type = $request->input('type');
        $brandName = $request->input('brandName');
        $length = $request->input('length');
        $gloveSize = $request->input('gloveSize');
        $objectDescription = $request->input('objectDescription');

        // 使用查询构建器构建 SQL 查询
        $conn = new mysqli('127.0.0.1:3306', 'root', '123456789', 'team_database');
        $conn->query("SET NAMES 'utf8mb4'");
        if ($type === 'bow') {
            $objectID = $brandName;
        } else if ($type === 'arrow') {
            $objectID = $length;
        } else if ($type === 'glove') {
            $objectID = $gloveSize;
        } else {
            echo "維修單填寫失敗";
            exit;
        }

        $sql = "INSERT INTO repair_order (Object_ID, User_ID, Date, Object_description) VALUES ('$objectID', '$userID', NOW(), '$objectDescription')";
        $result = $conn->query($sql);
        if ($result) {
            // 获取插入的 Repair_ID
            $repairID = $conn->insert_id;
    
            // 插入 damage 表
            $sql = "INSERT INTO damage (Repair_ID, Object_ID, Status_description) VALUES ('$repairID', '$objectID', 1)";
            $result = $conn->query($sql);
    
            if ($result) {
                echo "維修單填寫成功";
            } else {
                echo "維修單填寫失敗";
            }
        } else {
            echo "維修單填寫失敗";
        }
        
        // 關閉連接
        $conn->close();
    }

    public static function deletePracticeData(Request $request)
    {
        // 從請求中獲取輸入
        $userID = $request->input('User_ID');
        $practice_date = $request->input('delete_row_Date');
        $practice_hall = $request->input('delete_row_hall');
        $practice_distance = $request->input('delete_row_distance');
        $Number_of_practice = $request->input('delete_row_Number_of_practice');
        $Number_of_hits = $request->input('delete_row_Number_of_hits');

        // 使用查询构建器构建 SQL 查询
        $conn = new mysqli('127.0.0.1:3306', 'root', '123456789', 'team_database');
        $conn->query("SET NAMES 'utf8mb4'");

        // 使用预处理语句以防止 SQL 注入
        $sql = "DELETE FROM personal_practice_status WHERE User_ID = ? AND Date = ? AND Practice_hall = ? AND Distance = ? AND Number_of_practice = ? AND Number_of_hits = ? LIMIT 1";
        
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ssssss', $userID, $practice_date, $practice_hall, $practice_distance, $Number_of_practice, $Number_of_hits);
        $stmt->execute();

         // 检查删除是否成功
        if ($stmt->affected_rows > 0) {
            // 删除成功
            echo "删除成功";
            exit;
        } else {
            // 删除失败
            echo "删除失败";
            exit;
        }

        // 关闭连接
        $stmt->close();
        $conn->close();
    }

    public static function getArrowData()
    {
        $conn = new mysqli('127.0.0.1:3306', 'root', '123456789', 'team_database');
        $conn->query("SET NAMES 'utf8mb4'");
        $sql = "SELECT * FROM arrow_data";
        $result = $conn->query($sql);

        // 檢查查詢是否成功
        if ($result) {
            $rows = [];
        
            // 使用 fetch_assoc 提取實際的值，逐行添加到 $rows 数组
            while ($row = $result->fetch_assoc()) {
                // 获取 Object_ID 对应的 Status_description
                $statusDescription = self::getStatusDescription($row['Object_ID']);
                
                // 根据 Status_description 设置 Condition 值
                $row['Condition'] = ($statusDescription == 1) ? '不可使用' : '可使用';

                $rows[] = $row;
            }

            // 檢查 $rows 是否存在
            if ($rows) {
                return ['data' => $rows];
            } else {
                return '找不到使用者';
            }
        } else {
            // 如果查詢失敗，返回預設值
            return '找不到使用者';
        }

        // 關閉連接
        $conn->close();
    }

    public static function getGloveData()
    {
        $conn = new mysqli('127.0.0.1:3306', 'root', '123456789', 'team_database');
        $conn->query("SET NAMES 'utf8mb4'");
        $sql = "SELECT * FROM glove_data";
        $result = $conn->query($sql);

        // 檢查查詢是否成功
        if ($result) {
            $rows = [];
        
            // 使用 fetch_assoc 提取實際的值，逐行添加到 $rows 数组
            while ($row = $result->fetch_assoc()) {
                // 获取 Object_ID 对应的 Status_description
                $statusDescription = self::getStatusDescription($row['Object_ID']);
                
                // 根据 Status_description 设置 Condition 值
                $row['Condition'] = ($statusDescription == 1) ? '不可使用' : '可使用';

                $rows[] = $row;
            }

            // 檢查 $rows 是否存在
            if ($rows) {
                return ['data' => $rows];
            } else {
                return '找不到使用者';
            }
        } else {
            // 如果查詢失敗，返回預設值
            return '找不到使用者';
        }

        // 關閉連接
        $conn->close();
    }

    public static function signIn()
    {
        $conn = new mysqli('127.0.0.1:3306', 'root', '123456789', 'team_database');
        $conn->query("SET NAMES 'utf8mb4'");

        $sql = "SELECT * FROM class_notes WHERE Class_ID = '$classID' AND User_ID = '$userID'";
        $result = $conn->query($sql);
        // 檢查查詢是否成功
        if ($result) {
            echo "已簽到";
        } else {
            $sql = "INSERT INTO class_notes (Class_ID, User_ID, Date, Is_attend) VALUES ('$classID', '$userID', NOW(), 1)";
            $result = $conn->query($sql);

            if ($result) {
                echo "簽到成功";
            } else {
                echo "簽到失敗";
            }
        }

        // 關閉連接
        $conn->close();
    }

    public static function submitAbsenceReason(Request $request)
    {
        // 從請求中獲取輸入
        $userID = $request->input('User_ID');
        $Activity_ID = $request->input('Activity_ID');
        $absence_reason = $request->input('absence_reason');
        $signin_value = $request->input('status');

        // 使用查询构建器构建 SQL 查询
        $conn = new mysqli('127.0.0.1:3306', 'root', '123456789', 'team_database');
        $conn->query("SET NAMES 'utf8mb4'");

        if ($signin_value === '1') {
            $sql = "SELECT * FROM class_notes WHERE Class_ID = '$Activity_ID' AND User_ID = '$userID'";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            // 檢查查詢是否成功
            if ($row) {
                echo "已簽到";
            } else {
                $sql = "INSERT INTO class_notes (Class_ID, User_ID, Date, Is_attend) VALUES ('$Activity_ID', '$userID', NOW(), 1)";
                $result = $conn->query($sql);
    
                if ($result) {
                    echo "簽到成功";
                } else {
                    echo "簽到失敗";
                }
            }
        }
        else{
            $sql = "SELECT * FROM class_notes WHERE Class_ID = '$Activity_ID' AND User_ID = '$userID'";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            // 檢查查詢是否成功
            if ($row) {
                echo "已請假";
            } else {
                $sql = "INSERT INTO class_notes (Class_ID, User_ID, Date, Is_attend, Absence_reason) VALUES ('$Activity_ID', '$userID', NOW(), 0, '$absence_reason')";
                $result = $conn->query($sql);
                if ($result && $absence_reason !== null) {
                    echo "請假成功";
                } else {
                    echo "請假失敗";
                }
            }
        }
        
        // 關閉連接
        $conn->close();
    }

    public static function applyEvent(Request $request)
    {
        // 從請求中獲取輸入
        $userID = $request->input('User_ID');
        $Activity_ID = $request->input('Activity_ID');

        // 使用查询构建器构建 SQL 查询
        $conn = new mysqli('127.0.0.1:3306', 'root', '123456789', 'team_database');
        $conn->query("SET NAMES 'utf8mb4'");

        $sql = "SELECT * FROM activity_notes WHERE Activity_ID = '$Activity_ID' AND User_ID = '$userID'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        // 檢查查詢是否成功
        if ($row) {
            echo "已報名";
        } else {
            $sql = "INSERT INTO activity_notes (Activity_ID, User_ID, Date, Payment_status) VALUES ('$Activity_ID', '$userID', NOW(), 0)";
            $result = $conn->query($sql);

            if ($result) {
                echo "報名成功";
            } else {
                echo "報名失敗";
            }
        }
        
        // 關閉連接
        $conn->close();
    }

    public static function getUserPaymentStatus($activityID, $userID)
    {
        $conn = new mysqli('127.0.0.1:3306', 'root', '123456789', 'team_database');
        $conn->query("SET NAMES 'utf8mb4'");
        $sql = "SELECT Payment_status FROM activity_notes WHERE User_ID = '$userID' AND Activity_ID = '$activityID'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        // 檢查查詢是否成功
        if ($row) {
            // 使用 fetch_assoc 提取實際的值
            
            // 獲取使用者名稱，如果 $row 存在且 'Photo' 存在
            $userPaymentStatus = isset($row['Payment_status']) ? '2' : '1';
        } else {
            // 如果查詢失敗，返回預設值
            $userPaymentStatus = '0';
        }

        // 關閉連接
        $conn->close();

        return $userPaymentStatus;
    }

    public static function getActivityAllData(){
        $conn = new mysqli('127.0.0.1:3306', 'root', '123456789', 'team_database');
        $conn->query("SET NAMES 'utf8mb4'");
        $sql = "SELECT * FROM activity_data";
        $result = $conn->query($sql);
        // 檢查查詢是否成功
        if ($result) {
            $rows = [];
        
            // 使用 fetch_assoc 提取實際的值，逐行添加到 $rows 数组
            while ($row = $result->fetch_assoc()) {
                // var_dump($row);
                $rows[] = $row;
            }

            // exit;

            // 檢查 $rows 是否存在
            if ($rows) {
                return ['data' => $rows];
            } else {
                return '找不到活動';
            }
        } else {
            // 如果查詢失敗，返回預設值
            return '找不到活動';
        }
        // 關閉連接
        $conn->close();
    }

    public static function getActivityClassDataView(){
        $conn = new mysqli('127.0.0.1:3306', 'root', '123456789', 'team_database');
        $conn->query("SET NAMES 'utf8mb4'");
        $sql = "SELECT * FROM activity_class_data";
        $result = $conn->query($sql);
        // 檢查查詢是否成功
        if ($result) {
            $rows = [];
        
            // 使用 fetch_assoc 提取實際的值，逐行添加到 $rows 数组
            while ($row = $result->fetch_assoc()) {
                // var_dump($row);
                $rows[] = $row;
            }

            // exit;

            // 檢查 $rows 是否存在
            if ($rows) {
                return ['data' => $rows];
            } else {
                return '找不到活動';
            }
        } else {
            // 如果查詢失敗，返回預設值
            return '找不到活動';
        }
        // 關閉連接
        $conn->close();
    }

    public static function getPersonalPrecticeView(){
        $conn = new mysqli('127.0.0.1:3306', 'root', '123456789', 'team_database');
        $conn->query("SET NAMES 'utf8mb4'");
        $sql = "SELECT * FROM personal_prectice_data";
        $result = $conn->query($sql);
        // 檢查查詢是否成功
        if ($result) {
            $rows = [];
        
            // 使用 fetch_assoc 提取實際的值，逐行添加到 $rows 数组
            while ($row = $result->fetch_assoc()) {
                // var_dump($row);
                $rows[] = $row;
            }

            // exit;

            // 檢查 $rows 是否存在
            if ($rows) {
                return ['data' => $rows];
            } else {
                return '找不到活動';
            }
        } else {
            // 如果查詢失敗，返回預設值
            return '找不到活動';
        }
        // 關閉連接
        $conn->close();
    }

    public static function getUserPermission($userID)
    {
        $conn = new mysqli('127.0.0.1:3306', 'root', '123456789', 'team_database');
        $conn->query("SET NAMES 'utf8mb4'");
        $sql = "SELECT Permission FROM member WHERE User_ID = '$userID'";
        $result = $conn->query($sql);

        // 檢查查詢是否成功
        if ($result) {
            // 使用 fetch_assoc 提取實際的值
            $row = $result->fetch_assoc();

            // 獲取使用者名稱，如果 $row 存在且 'Permission' 存在
            $userPermission = isset($row['Permission']) ? $row['Permission'] : '使用者非管理者';
        } else {
            // 如果查詢失敗，返回預設值
            $userPermission = '找不到使用者';
        }

        // 關閉連接
        $conn->close();

        return $userPermission;
    }

    public static function getUserDataAll()
    {
        $conn = new mysqli('127.0.0.1:3306', 'root', '123456789', 'team_database');
        $conn->query("SET NAMES 'utf8mb4'");
        $sql = "SELECT * FROM member";
        $result = $conn->query($sql);


        // 檢查查詢是否成功
        if ($result) {
            $rows = [];

            // 使用 fetch_assoc 提取實際的值，逐行添加到 $rows 数组
            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }

            // 檢查 $rows 是否存在
            if ($rows) {
                return ['data' => $rows];
            } else {
                return '找不到使用者';
            }
        } else {
            // 如果查詢失敗，返回預設值
            return '找不到使用者';
        }

        // 關閉連接
        $conn->close();
    }

    public static function deleteMember(Request $request)
    {
        // 從請求中獲取輸入
        $userID = $request->input('User_ID');

        // 使用查询构建器构建 SQL 查询
        $conn = new mysqli('127.0.0.1:3306', 'root', '123456789', 'team_database');
        $conn->query("SET NAMES 'utf8mb4'");

        // 使用预处理语句以防止 SQL 注入
        $sql = "DELETE FROM member WHERE User_ID = ?";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param('s', $userID);
        $stmt->execute();

        // 检查删除是否成功
        if ($stmt->affected_rows > 0) {
            // 删除成功
            echo "删除成功";
            exit;
        } else {
            // 删除失败
            echo "删除失败";
            exit;
        }

        // 关闭连接
        $stmt->close();
        $conn->close();
    }

    public static function updateMememberPermission(Request $request)
    {
        // 從請求中獲取輸入
        $userID = $request->input('User_ID');
        $permission = $request->input('Permission');
        $conn = new mysqli('127.0.0.1:3306', 'root', '123456789', 'team_database');
        $conn->query("SET NAMES 'utf8mb4'");

        $sql = "SELECT * FROM member WHERE Permission = '$permission' AND User_ID = '$userID'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        // 檢查查詢是否成功
        if ($row) {
            if ($permission === '0') {
                $newpermission = '1';
                $sql = "UPDATE member SET Permission = ? WHERE User_ID = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param('ss', $newpermission, $userID);
                $stmt->execute();

                // 檢查更新是否成功
                if ($stmt->affected_rows > 0) {
                    echo '權限更新成功';
                } else {
                    echo '權限更新失敗';
                }
            }
            elseif ($permission === '1') {
                $newpermission = '0';
                $sql = "UPDATE member SET Permission = ? WHERE User_ID = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param('ss', $newpermission, $userID);
                $stmt->execute();

                // 檢查更新是否成功
                if ($stmt->affected_rows > 0) {
                    echo '權限更新成功';
                } else {
                    echo '權限更新失敗';
                }
            }
        } else {
            echo "找不到使用者";
        }

        // 關閉連接
        $conn->close();
    }

    public static function getDamageBowAll()
    {
        $conn = new mysqli('127.0.0.1:3306', 'root', '123456789', 'team_database');
        $conn->query("SET NAMES 'utf8mb4'");
        $sql = "SELECT * FROM (damage NATURAL JOIN  bow_data) WHERE Status_description = 1";
        $result = $conn->query($sql);


        // 檢查查詢是否成功
        if ($result) {
            $rows = [];

            // 使用 fetch_assoc 提取實際的值，逐行添加到 $rows 数组
            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }

            // 檢查 $rows 是否存在
            if ($rows) {
                return ['data' => $rows];
            } else {
                return '找不到使用者';
            }
        } else {
            // 如果查詢失敗，返回預設值
            return '找不到使用者';
        }

        // 關閉連接
        $conn->close();
    }

    public static function getBowDamageData()
    {
        $conn = new mysqli('127.0.0.1:3306', 'root', '123456789', 'team_database');
        $conn->query("SET NAMES 'utf8mb4'");
        $sql = "SELECT * FROM (damage NATURAL JOIN  bow_data) WHERE Status_description = 1";
        $result = $conn->query($sql);

        // 檢查查詢是否成功
        if ($result) {
            $rows = [];

            // 使用 fetch_assoc 提取實際的值，逐行添加到 $rows 数组
            while ($row = $result->fetch_assoc()) {
                // 获取 Object_ID 对应的 Status_description
                $objectDescription = self::getObjectDescription($row['Object_ID']);

                // 根据 Status_description 设置 Condition 值
                $row['Object_description'] = $objectDescription;

                $rows[] = $row;
            }

            // 檢查 $rows 是否存在
            if ($rows) {
                return ['data' => $rows];
            } else {
                return '找不到使用者';
            }
        } else {
            // 如果查詢失敗，返回預設值
            return '找不到使用者';
        }

        // 關閉連接
        $conn->close();
    }

    private static function getObjectDescription($objectID)
    {
        $conn = new mysqli('127.0.0.1:3306', 'root', '123456789', 'team_database');
        $conn->query("SET NAMES 'utf8mb4'");
        $sql = "SELECT Object_description FROM repair_order WHERE Object_ID = '$objectID' order by Repair_ID desc limit 1";
        $result = $conn->query($sql);

        // 檢查查詢是否成功
        if ($result) {
            $row = $result->fetch_assoc();

            // 檢查 $row 是否存在
            if ($row) {
                return $row['Object_description'];
            } else {
                // 如果不存在，默认为 0
                return 0;
            }
        } else {
            // 如果查詢失敗，返回預設值
            return 0;
        }

        // 關閉連接
        $conn->close();
    }

    public static function updateRepairOrderRepair(Request $request){
        // 從請求中獲取輸入
        $objectID = $request->input('Object_ID');

        // 使用查询构建器构建 SQL 查询
        $conn = new mysqli('127.0.0.1:3306', 'root', '123456789', 'team_database');
        $conn->query("SET NAMES 'utf8mb4'");

        $oldStatus = 1;
        $newStatus = 0;
        $sql = "UPDATE damage SET Status_description = ? WHERE Object_ID = ? AND Status_description = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('sss', $newStatus, $objectID, $oldStatus);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            echo "維修單填寫成功";
        } else {
            echo "維修單填寫失敗";
        }

        // 關閉連接
        $conn->close();
    }

    public static function getDamageArrowAll()
    {
        $conn = new mysqli('127.0.0.1:3306', 'root', '123456789', 'team_database');
        $conn->query("SET NAMES 'utf8mb4'");
        $sql = "SELECT * FROM (damage NATURAL JOIN  arrow_data) WHERE Status_description = 1";
        $result = $conn->query($sql);


        // 檢查查詢是否成功
        if ($result) {
            $rows = [];

            // 使用 fetch_assoc 提取實際的值，逐行添加到 $rows 数组
            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }

            // 檢查 $rows 是否存在
            if ($rows) {
                return ['data' => $rows];
            } else {
                return '找不到使用者';
            }
        } else {
            // 如果查詢失敗，返回預設值
            return '找不到使用者';
        }

        // 關閉連接
        $conn->close();
    }

    public static function getArrowDamageData()
    {
        $conn = new mysqli('127.0.0.1:3306', 'root', '123456789', 'team_database');
        $conn->query("SET NAMES 'utf8mb4'");
        $sql = "SELECT * FROM (damage NATURAL JOIN  arrow_data) WHERE Status_description = 1";
        $result = $conn->query($sql);

        // 檢查查詢是否成功
        if ($result) {
            $rows = [];

            // 使用 fetch_assoc 提取實際的值，逐行添加到 $rows 数组
            while ($row = $result->fetch_assoc()) {
                // 获取 Object_ID 对应的 Status_description
                $objectDescription = self::getObjectDescription($row['Object_ID']);

                // 根据 Status_description 设置 Condition 值
                $row['Object_description'] = $objectDescription;

                $rows[] = $row;
            }

            // 檢查 $rows 是否存在
            if ($rows) {
                return ['data' => $rows];
            } else {
                return '找不到使用者';
            }
        } else {
            // 如果查詢失敗，返回預設值
            return '找不到使用者';
        }

        // 關閉連接
        $conn->close();
    }

    public static function getDamageGloveAll()
    {
        $conn = new mysqli('127.0.0.1:3306', 'root', '123456789', 'team_database');
        $conn->query("SET NAMES 'utf8mb4'");
        $sql = "SELECT * FROM (damage NATURAL JOIN  glove_data) WHERE Status_description = 1";
        $result = $conn->query($sql);


        // 檢查查詢是否成功
        if ($result) {
            $rows = [];

            // 使用 fetch_assoc 提取實際的值，逐行添加到 $rows 数组
            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }

            // 檢查 $rows 是否存在
            if ($rows) {
                return ['data' => $rows];
            } else {
                return '找不到使用者';
            }
        } else {
            // 如果查詢失敗，返回預設值
            return '找不到使用者';
        }

        // 關閉連接
        $conn->close();
    }

    public static function getGloveDamageData()
    {
        $conn = new mysqli('127.0.0.1:3306', 'root', '123456789', 'team_database');
        $conn->query("SET NAMES 'utf8mb4'");
        $sql = "SELECT * FROM (damage NATURAL JOIN  glove_data) WHERE Status_description = 1";
        $result = $conn->query($sql);

        // 檢查查詢是否成功
        if ($result) {
            $rows = [];

            // 使用 fetch_assoc 提取實際的值，逐行添加到 $rows 数组
            while ($row = $result->fetch_assoc()) {
                // 获取 Object_ID 对应的 Status_description
                $objectDescription = self::getObjectDescription($row['Object_ID']);

                // 根据 Status_description 设置 Condition 值
                $row['Object_description'] = $objectDescription;

                $rows[] = $row;
            }

            // 檢查 $rows 是否存在
            if ($rows) {
                return ['data' => $rows];
            } else {
                return '找不到使用者';
            }
        } else {
            // 如果查詢失敗，返回預設值
            return '找不到使用者';
        }
    }
}

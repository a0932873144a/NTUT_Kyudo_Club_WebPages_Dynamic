<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>北科弓道社-幹部</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container light-style flex-grow-1 container-p-y">
        <h4 class="font-weight-bold py-3 mb-4">
            個人檔案
            <a href="{{ url('/') }}" class="btn btn-danger float-right">登出</a>
        </h4>
        <div class="card overflow-hidden">
            <div class="row no-gutters row-bordered row-border-light">
                <div class="col-md-3 pt-0">
                    <div class="list-group list-group-flush account-settings-links">
                        <a class="list-group-item list-group-item-action active" data-toggle="list"
                            href="#account-general">一般</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-change-password">更改密碼</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-toolsInformation">弓具資訊</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#bow-to-fix">弓具報修</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-persionalPractice">個人練習狀況</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-classInformation">社課資訊</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-eventInformation">活動資訊</a>
                        @if(\App\Helpers\DatabaseHelper::getUserPermission(Session::get('user_id')))
                            <a class="list-group-item list-group-item-action" data-toggle="list"
                               href="#account-manageMember">管理成員</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list"
                               href="#account-managePermission">管理權限</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list"
                               href="#account-manageTool">管理弓具</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list"
                               href="#account-repairTool">弓具修復</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list"
                               href="#account-viewPractice">練習狀況</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list"
                               href="#account-viewClass">社課狀況</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list"
                               href="#account-manageClass">管理社課</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list"
                               href="#account-viewEvent">活動狀況</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list"
                               href="#account-manageEvent">管理活動</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list"
                               href="#account-managePayment">管理繳費</a>
                        @endif
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content">

                        <!-- account-general -->
                        <div class="tab-pane fade active show" id="account-general">
                            <form action="/updateFile" method="post" enctype="multipart/form-data">
                            @csrf
                                <div class="card-body media align-items-center">
                                    <input type="hidden" name="User_ID" value={{ Session::get('user_id') }} require>
                                    @if(\App\Helpers\DatabaseHelper::getUserPhoto(Session::get('user_id')))
                                        <img src="/updateImage/{{ \App\Helpers\DatabaseHelper::getUserPhoto(Session::get('user_id')) }}" alt class="d-block ui-w-80">
                                    @else
                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt class="d-block ui-w-80">
                                    @endif
                                    <div class="media-body ml-4">
                                        <label class="btn btn-outline-primary">
                                            Upload new photo
                                            <input type="file" class="account-settings-fileinput" name="file" id="formFile">
                                        </label>
                                    </div>
                                </div>
                                <hr class="border-light m-0">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="form-label">學號</label>
                                        <label class="form-label">{{ Session::get('user_id') }}</label>
                                        <!-- <input type="text" class="form-control mb-1" value="1108200XX"> -->
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">名字</label>
                                        <label class="form-label">{{ \App\Helpers\DatabaseHelper::getUserName(Session::get('user_id')) }}</label>
                                        <!-- <input type="text" class="form-control" value="Angela Ziegler"> -->
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">系所</label>
                                        <label class="form-label">{{ \App\Helpers\DatabaseHelper::getUserClass(Session::get('user_id')) }}</label>
                                        <!-- <input type="text" class="form-control" value="Overwatch"> -->
                                    </div>
                                    <div class="text-right mt-3">
                                        <button type="submit" class="btn btn-primary" id="saveChangesButton">Save Photo</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!-- account-change-password -->
                        <div class="tab-pane fade" id="account-change-password">
                            <div class="card-body pb-2">
                                <form action="/updatePassword" method="post">
                                @csrf
                                    <input type="hidden" name="User_ID" value={{ Session::get('user_id') }} require>
                                    <div class="form-group">
                                        <label class="form-label">Current password</label>
                                        <input type="password" class="form-control" name="currentPassword" require>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">New password</label>
                                        <input type="password" class="form-control" name="newPassword" require>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Repeat new password</label>
                                        <input type="password" class="form-control" name="repeatNewPassword" require>
                                    </div>
                                    <div class="text-right mt-3">
                                        <button type="submit" class="btn btn-primary">Save changes</button>&nbsp;
                                        <button type="button" class="btn btn-default" onclick="clearCurrentPassword()">Cancel</button>
                                    </div>
                                    <script>
                                        function clearCurrentPassword() {
                                            // 清除特定輸入框的值
                                            document.getElementsByName("currentPassword")[0].value = '';
                                            document.getElementsByName("newPassword")[0].value = '';
                                            document.getElementsByName("repeatNewPassword")[0].value = '';
                                        }
                                    </script>
                                </form>
                            </div>
                        </div>

                        <!-- account-toolsInformation -->
                        <div class="tab-pane fade" id="account-toolsInformation">
                            <div class="card-body pb-2">
                                <div class="container text-center">
                                    <h1>弓</h1>
                                    @foreach (\App\Helpers\DatabaseHelper::getBowData()['data'] as $bow)
                                        <div class="row">
                                            <!-- 弓的名稱 -->
                                            <div class="col-12">
                                                <h5 class="text-left">{{ $bow['Brand_name'] }}</h5>
                                            </div>
                                            <!-- 弓-pic -->
                                            <div class="col-md-6">
                                                @foreach (\App\Helpers\DatabaseHelper::getEquipmentPhoto()['data'] as $equipment)
                                                    @if ($equipment['Object_ID'] == $bow['Object_ID'])
                                                        <img src="\image\equipmentImage\{{ $equipment['Photo'] }}" alt="Bow" class="bow-image img-fluid"/>
                                                    @endif
                                                @endforeach
                                            </div>
                                            <!-- 弓-details -->
                                            <div class="col-md-6">
                                                <div class="bow-detail">
                                                    <span class="bow-label">公斤數:</span>
                                                    <span class="bow-data">{{ $bow['Stress'] }}</span>
                                                </div>
                                                <div class="bow-detail">
                                                    <span class="bow-label">尺寸:</span>
                                                    <span class="bow-data">{{ $bow['Length'] }}</span>
                                                </div>
                                                <div class="bow-detail">
                                                    <span class="bow-label">外套:</span>
                                                    <span class="bow-data">{{ $bow['Outer_fabric'] }}</span>
                                                </div>
                                                <div class="bow-detail">
                                                    <span class="bow-label">內套:</span>
                                                    <span class="bow-data">{{ $bow['Sack'] }}</span>
                                                </div>
                                                <div class="bow-detail">
                                                    <span class="bow-label">弓具狀況:</span>
                                                    <span class="bow-data">{{ $bow['Condition'] }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                <div class="container text-center">
                                    <h1>箭</h1>
                                    @foreach (\App\Helpers\DatabaseHelper::getArrowData()['data'] as $arrow)
                                        <div class="row">
                                            <!-- 箭-pic -->
                                            <div class="col-md-6">
                                                @foreach (\App\Helpers\DatabaseHelper::getEquipmentPhoto()['data'] as $equipment)
                                                    @if ($equipment['Object_ID'] == $arrow['Object_ID'])
                                                        <img src="\image\equipmentImage\{{ $equipment['Photo'] }}" alt="Bow" class="bow-image img-fluid"/>
                                                    @endif
                                                @endforeach
                                            </div>
                                            <!-- 箭-details -->
                                            <div class="col-md-6">
                                                <div class="bow-detail">
                                                    <span class="bow-label">長度:</span>
                                                    <span class="bow-data">{{ $arrow['Length'] }}</span>
                                                </div>
                                                <div class="bow-detail">
                                                    <span class="bow-label">型號:</span>
                                                    <span class="bow-data">{{ $arrow['Model'] }}</span>
                                                </div>
                                                <div class="bow-detail">
                                                    <span class="bow-label">箭支狀況:</span>
                                                    <span class="bow-data">{{ $arrow['Condition'] }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                <div class="container text-center">
                                    <h1>手套</h1>
                                    @foreach (\App\Helpers\DatabaseHelper::getGloveData()['data'] as $glove)
                                        <div class="row">
                                            <!-- 手套-pic -->
                                            <div class="col-md-6">
                                                @foreach (\App\Helpers\DatabaseHelper::getEquipmentPhoto()['data'] as $equipment)
                                                    @if ($equipment['Object_ID'] == $glove['Object_ID'])
                                                        <img src="\image\equipmentImage\{{ $equipment['Photo'] }}" alt="Bow" class="bow-image img-fluid"/>
                                                    @endif
                                                @endforeach
                                            </div>
                                            <!-- 手套-details -->
                                            <div class="col-md-6">
                                                <div class="bow-detail">
                                                    <span class="bow-label">尺寸:</span>
                                                    <span class="bow-data">{{ $glove['Glove_size'] }}</span>
                                                </div>
                                                <div class="bow-detail">
                                                    <span class="bow-label">手套狀況:</span>
                                                    <span class="bow-data">{{ $glove['Condition'] }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                            </div>
                        </div>

                        <!-- bow-to-fix -->
                        <div class="tab-pane fade" id="bow-to-fix">
                            <div class="card-body pb-2">
                                <form action="/repairorder" method="post">
                                @csrf
                                    <input type="hidden" name="User_ID" value={{ Session::get('user_id') }} require>
                                    <div class="form-group">
                                        <label class="form-label">選擇報修弓具種類</label>
                                        <select class="custom-select" id="bow-type" name="type" require>
                                            <option value="" selected disabled>請選擇</option>
                                            <option value="bow">弓</option>
                                            <option value="arrow">箭</option>
                                            <option value="glove">手套</option>
                                        </select>
                                    </div>

                                    <!-- hidden list -->
                                    <div class="form-group" id="menu1" style="display:none;">
                                        <label class="form-label">選擇要報修的弓</label>
                                        <select class="custom-select" name="brandName" require>
                                            <option value="" selected disabled>請選擇</option>
                                            <option value="B1">橘</option>
                                            <option value="B2">直心(大)</option>
                                            <option value="B3">葵</option>
                                            <option value="B4">秋芳</option>
                                            <option value="B5">練心</option>
                                        </select>
                                    </div>

                                    <div class="form-group" id="menu2" style="display:none;">
                                        <label class="form-label">選擇要報修的箭</label>
                                        <select class="custom-select" name="length" require>
                                            <option value="" selected disabled>請選擇</option>
                                            <option value="A1">95</option>
                                            <option value="A2">100</option>
                                            <option value="A3">110</option>
                                        </select>
                                    </div>

                                    <div class="form-group" id="menu3" style="display:none;">
                                        <label class="form-label">選擇要報修的手套</label>
                                        <select class="custom-select" name="gloveSize" require>
                                            <option value="" selected disabled>請選擇</option>
                                            <option value="C1">S</option>
                                            <option value="C2">M</option>
                                            <option value="C3">ML</option>
                                            <option value="C4">L</option>
                                        </select>
                                    </div>

                                    <!-- Text Input for Description -->
                                    <div class="form-group">
                                        <label class="form-label">描述損壞情況:</label>
                                        <textarea class="form-control" placeholder="請描述詳細的損壞情況..." name="objectDescription" require></textarea>
                                    </div>

                                    <!-- Submit Button -->
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary">提交</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- account-persionalPractice -->
                        <div class="tab-pane fade" id="account-persionalPractice">
                            <div class="card-body pb-2">
                                <div class="container text-center">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>練習日期</th>
                                                <th>練習地點</th>
                                                <th>練習距離</th>
                                                <th>練習箭數</th>
                                                <th>中靶數</th>
                                                <th>刪除資料</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(\App\Helpers\DatabaseHelper::getUserPracticeData(Session::get('user_id'))=='找不到使用者')
                                                <tr>
                                                    <td colspan="6">沒有資料</td>
                                                </tr>
                                            @else
                                                @foreach (\App\Helpers\DatabaseHelper::getUserPracticeData(Session::get('user_id'))['data'] as $row)
                                                    <tr>
                                                        <td>{{ $row['Date'] }}</td>
                                                        <td>{{ $row['Practice_hall'] }}</td>
                                                        <td>{{ $row['Distance'] }}</td>
                                                        <td>{{ $row['Number_of_practice'] }}</td>
                                                        <td>{{ $row['Number_of_hits'] }}</td>
                                                        <td>
                                                            <form action="/deletepracticedata" method="post">
                                                                @csrf
                                                                <input type="hidden" name="User_ID" value="{{ Session::get('user_id') }}" required>
                                                                <input type="hidden" name="delete_row_Date" value="{{ $row['Date'] }}" required>
                                                                <input type="hidden" name="delete_row_hall" value="{{ $row['Practice_hall'] }}" required>
                                                                <input type="hidden" name="delete_row_distance" value="{{ $row['Distance'] }}" required>
                                                                <input type="hidden" name="delete_row_Number_of_practice" value="{{ $row['Number_of_practice'] }}" required>
                                                                <input type="hidden" name="delete_row_Number_of_hits" value="{{ $row['Number_of_hits'] }}" required>
                                                                <button type="submit" class="btn btn-primary">Delete</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                        </tbody>
                                    </table>

                                    <div class="container text-center">
                                        <div class="row align-items-center">
                                            <form action="/isertpracticedata" method="post">
                                            @csrf
                                                <input type="hidden" name="User_ID" value={{ Session::get('user_id') }} require>
                                                <div class="col">
                                                    <label class="form-label">練習日期</label>
                                                    <input type="date" class="form-control" name="practice_date" require>
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">練習地點</label>
                                                    <select class="form-control" name="practice_hall" require>
                                                        <option value="B1多功能教室" {{ old('practice_hall') == 'B1多功能教室' ? 'selected' : '' }}>B1多功能教室</option>
                                                        <option value="中正館7樓" {{ old('practice_hall') == '中正館7樓' ? 'selected' : '' }}>中正館7樓</option>
                                                        <option value="躾學" {{ old('practice_hall') == '躾學' ? 'selected' : '' }}>躾學</option>
                                                        <option value="藏月" {{ old('practice_hall') == '藏月' ? 'selected' : '' }}>藏月</option>
                                                        <option value="其他" {{ old('practice_hall') == '其他' ? 'selected' : '' }}>其他</option>
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">練習距離</label>
                                                    <input type="text" class="form-control" name="practice_distance" require>
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">練習箭數</label>
                                                    <input type="text" class="form-control" name="practice_number" require>
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">中靶數</label>
                                                    <input type="text" class="form-control" name="practice_hit" require>
                                                </div>
                                                <div class="text-right mt-3">
                                                    <button type="submit" class="btn btn-primary">Save</button>&nbsp;
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- account-classInformation -->
                        <div class="tab-pane fade" id="account-classInformation">
                            <div class="card-body pb-2">
                                <div class="container text-center">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>社課日期</th>
                                                <th>社課地點</th>
                                                <th>社課名稱</th>
                                                <th>狀態</th>
                                                <th>請假理由</th>
                                                <th>送出</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @php
                                            $firstRow = true;
                                        @endphp
                                        @if(\App\Helpers\DatabaseHelper::getActivityClassData()=='找不到活動')
                                            <tr>
                                                <td colspan="6">沒有資料</td>
                                            </tr>
                                        @else
                                            @foreach (\App\Helpers\DatabaseHelper::getActivityClassData()['data'] as $row)
                                                @if ($row['Date'] > date("Y-m-d"))
                                                    <tr>
                                                        <td>{{ $row['Date'] }}</td>
                                                        <td>{{ $row['Address'] }}</td>
                                                        <td>{{ $row['Activity_name'] }}</td>
                                                        @if ($firstRow)
                                                            <form action="/submitabsencereason" method="post">
                                                                @csrf
                                                                <input type="hidden" name="User_ID" value="{{ Session::get('user_id') }}" required>
                                                                <input type="hidden" name="Activity_ID" value="{{ $row['Activity_ID'] }}" required>
                                                                <td>
                                                                    <select class="form-control" name="status" require onchange="toggleReasonInput(this)">
                                                                        <option value="1">簽到</option>
                                                                        <option value="0">請假</option>
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" name="absence_reason" value="" id="absence_reason">
                                                                </td>
                                                                <td>
                                                                    <button type="submit" class="btn btn-primary">送出</button>
                                                                </td>
                                                            </form>
                                                            @php
                                                                $firstRow = false;
                                                            @endphp
                                                        @else
                                                            <td>尚未開放</td>
                                                            <td>尚未開放</td>
                                                            <td>尚未開放</td>
                                                        @endif
                                                    </tr>
                                                @endif
                                            @endforeach
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <script>
                                function toggleReasonInput(select) {
                                    var reasonInput = document.getElementById('absence_reason');
                                    if (select.value == '0') {
                                        reasonInput.style.display = 'block';
                                    } else {
                                        reasonInput.style.display = 'none';
                                    }
                                }

                                // 在页面加载时执行一次，确保初始状态正确
                                window.onload = function() {
                                    var statusSelect = document.querySelector('select[name="status"]');
                                    toggleReasonInput(statusSelect);
                                };
                            </script>
                        </div>

                        <!-- account-eventInformation -->
                        <div class="tab-pane fade" id="account-eventInformation">
                            <div class="card-body pb-2">
                            <div class="container text-center">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>活動日期</th>
                                                <th>活動地點</th>
                                                <th>活動名稱</th>
                                                <th>報名</th>
                                                <th>繳費狀態</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @php
                                            $firstRow = true;
                                        @endphp
                                        @if(\App\Helpers\DatabaseHelper::getActivityEventData()=='找不到活動')
                                            <tr>
                                                <td colspan="6">沒有資料</td>
                                            </tr>
                                        @else
                                            @foreach (\App\Helpers\DatabaseHelper::getActivityEventData()['data'] as $row)
                                                @if ($row['Date'] > date("Y-m-d"))
                                                    <tr>
                                                        <td>{{ $row['Date'] }}</td>
                                                        <td>{{ $row['Address'] }}</td>
                                                        <td>{{ $row['Activity_name'] }}</td>
                                                        @if ($firstRow)
                                                            <form action="/applyevent" method="post">
                                                                @csrf
                                                                <input type="hidden" name="User_ID" value="{{ Session::get('user_id') }}" required>
                                                                <input type="hidden" name="Activity_ID" value="{{ $row['Activity_ID'] }}" required>
                                                                <td>
                                                                    <button type="submit" class="btn btn-primary">報名</button>
                                                                </td>
                                                                @if(\App\Helpers\DatabaseHelper::getUserPaymentStatus($row['Activity_ID'], $userID) == '2')
                                                                    <td>已繳費</td>
                                                                @elseif(\App\Helpers\DatabaseHelper::getUserPaymentStatus($row['Activity_ID'], $userID) == '1')
                                                                    <td>尚未繳費</td>
                                                                @elseif(\App\Helpers\DatabaseHelper::getUserPaymentStatus($row['Activity_ID'], $userID) == '0')
                                                                    <td>未報名</td>
                                                                @endif
                                                            </form>
                                                            @php
                                                                $firstRow = false;
                                                            @endphp
                                                        @else
                                                            <td>尚未開放</td>
                                                            <td>尚未開放</td>
                                                        @endif
                                                    </tr>
                                                @endif
                                            @endforeach
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                        @if(\App\Helpers\DatabaseHelper::getUserPermission(Session::get('user_id')))
                            <!-- account-manageMember -->
                            <div class="tab-pane fade" id="account-manageMember">
                                <div class="card-body pb-2">
                                    <div class="container text-center">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>學號</th>
                                                <th>姓名</th>
                                                <th>班級</th>
                                                <th>矢束</th>
                                                <th>手套尺寸</th>
                                                <th>內襯尺寸</th>
                                                <th>權限</th>
                                                <th>刪除</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(\App\Helpers\DatabaseHelper::getUserDataAll()=='找不到使用者')
                                                <tr>
                                                    <td colspan="6">沒有資料</td>
                                                </tr>
                                            @else
                                                @foreach (\App\Helpers\DatabaseHelper::getUserDataAll()['data'] as $row)
                                                    <tr>
                                                        <td>{{ $row['User_ID'] }}</td>
                                                        <td>{{ $row['User_Name'] }}</td>
                                                        <td>{{ $row['User_class'] }}</td>
                                                        <td>{{ $row['Draw_Length'] }}</td>
                                                        <td>{{ $row['Glove_size'] }}</td>
                                                        <td>{{ $row['Shitagake_size'] }}</td>
                                                        <td>{{ $row['Permission'] }}</td>
                                                        <td>
                                                            <form action="/deletemember" method="post">
                                                                @csrf
                                                                <input type="hidden" name="User_ID" value="{{ Session::get('user_id') }}" required>
                                                                <button type="submit" class="btn btn-primary">Delete</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <!-- account-manageMember -->
                            <div class="tab-pane fade" id="account-managePermission">
                                <div class="card-body pb-2">
                                    <div class="container text-center">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>學號</th>
                                                <th>姓名</th>
                                                <th>班級</th>
                                                <th>權限</th>
                                                <th>更改權限</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(\App\Helpers\DatabaseHelper::getUserDataAll()=='找不到使用者')
                                                <tr>
                                                    <td colspan="6">沒有資料</td>
                                                </tr>
                                            @else
                                                @foreach (\App\Helpers\DatabaseHelper::getUserDataAll()['data'] as $row)
                                                    <tr>
                                                        <td>{{ $row['User_ID'] }}</td>
                                                        <td>{{ $row['User_Name'] }}</td>
                                                        <td>{{ $row['User_class'] }}</td>
                                                        <td>{{ $row['Permission'] }}</td>
                                                        <td>
                                                            <form action="/updatemememberpermission" method="post">
                                                                @csrf
                                                                <input type="hidden" name="User_ID" value="{{ $row['User_ID'] }}" required>
                                                                <input type="hidden" name="Permission" value="{{ $row['Permission'] }}" required>
                                                                <button type="submit" class="btn btn-primary">更改</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <!-- account-repairTool -->
                            <div class="tab-pane fade" id="account-repairTool">
                                <div class="card-body pb-2">
                                    <div class="container text-center">
                                        <h1>弓</h1>
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>品牌</th>
                                                <th>公斤數</th>
                                                <th>尺寸</th>
                                                <th>外套</th>
                                                <th>內套</th>
                                                <th>損壞狀況</th>
                                                <th>修復</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(\App\Helpers\DatabaseHelper::getDamageBowAll()=='找不到使用者')
                                                <tr>
                                                    <td colspan="6">沒有資料</td>
                                                </tr>
                                            @else
                                                @foreach (\App\Helpers\DatabaseHelper::getBowDamageData()['data'] as $bow)
                                                    <!-- 弓-details -->
                                                    <tr>
                                                        <td>{{ $bow['Brand_name'] }}</td>
                                                        <td>{{ $bow['Stress'] }}</td>
                                                        <td>{{ $bow['Length'] }}</td>
                                                        <td>{{ $bow['Outer_fabric'] }}</td>
                                                        <td>{{ $bow['Sack'] }}</td>
                                                        <td>{{ $bow['Object_description'] }}</td>
                                                        <td>
                                                            <form action="/updaterepairorderrepair" method="post">
                                                                @csrf
                                                                <input type="hidden" name="Object_ID" value="{{ $bow['Object_ID'] }}" required>
                                                                <button type="submit" class="btn btn-primary">已修復</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                        </table>
                                    </div>

                                    <div class="container text-center">
                                        <h1>箭</h1>
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>長度</th>
                                                <th>型號</th>
                                                <th>損壞狀況</th>
                                                <th>修復</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(\App\Helpers\DatabaseHelper::getDamageArrowAll()=='找不到使用者')
                                                <tr>
                                                    <td colspan="6">沒有資料</td>
                                                </tr>
                                            @else
                                                @foreach (\App\Helpers\DatabaseHelper::getArrowDamageData()['data'] as $arrow)
                                                    <!-- 箭-details -->
                                                    <tr>
                                                        <td>{{ $arrow['Length'] }}</td>
                                                        <td>{{ $arrow['Model'] }}</td>
                                                        <td>{{ $arrow['Object_description'] }}</td>
                                                        <td>
                                                            <form action="/updaterepairorderrepair" method="post">
                                                                @csrf
                                                                <input type="hidden" name="User_ID" value="{{ Session::get('user_id') }}" required>
                                                                <input type="hidden" name="Object_ID" value="{{ $arrow['Object_ID'] }}" required>
                                                                <button type="submit" class="btn btn-primary">已修復</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                            @endforeach
                                            @endif
                                        </table>
                                    </div>

                                    <div class="container text-center">
                                        <h1>手套</h1>
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>大小</th>
                                                <th>損壞狀況</th>
                                                <th>修復</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(\App\Helpers\DatabaseHelper::getDamageGloveAll()=='找不到使用者')
                                                <tr>
                                                    <td colspan="6">沒有資料</td>
                                                </tr>
                                            @else
                                                @foreach (\App\Helpers\DatabaseHelper::getGloveDamageData()['data'] as $glove)
                                                    <!-- 手套-details -->
                                                    <tr>
                                                        <td>{{ $glove['Glove_size'] }}</td>
                                                        <td>{{ $glove['Object_description'] }}</td>
                                                        <td>
                                                            <form action="/updaterepairorderrepair" method="post">
                                                                @csrf
                                                                <input type="hidden" name="User_ID" value="{{ Session::get('user_id') }}" required>
                                                                <input type="hidden" name="Object_ID" value="{{ $glove['Object_ID'] }}" required>
                                                                <button type="submit" class="btn btn-primary">已修復</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                            @endforeach
                                            @endif
                                        </table>
                                    </div>

                                </div>
                            </div>

                            <!-- account-viewPractice -->
                            <div class="tab-pane fade" id="account-viewPractice">
                                <div class="card-body pb-2">
                                    <div class="container text-center">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>學號</th>
                                                <th>姓名</th>
                                                <th>練習日期</th>
                                                <th>練習地點</th>
                                                <th>練習距離</th>
                                                <th>練習數量</th>
                                                <th>中靶數</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @forelse (\App\Helpers\DatabaseHelper::getPersonalPrecticeView()['data'] as $row)
                                                    <tr>
                                                        <td>{{ $row['User_ID'] }}</td>
                                                        <td>{{ $row['User_Name'] }}</td>
                                                        <td>{{ $row['Date'] }}</td>
                                                        <td>{{ $row['Practice_hall'] }}</td>
                                                        <td>{{ $row['Distance'] }}</td>
                                                        <td>{{ $row['Number_of_practice'] }}</td>
                                                        <td>{{ $row['Number_of_hits'] }}</td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="6">無個人練習資料</td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <!-- account-viewClass -->
                            <div class="tab-pane fade" id="account-viewClass">
                                <div class="card-body pb-2">
                                    <div class="container text-center">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>課堂日期</th>
                                                <th>活動地點</th>
                                                <th>活動名稱</th>
                                                <th>應到人數</th>
                                                <th>實到人數</th>
                                                <th>未到人數</th>
                                                <th>未上線簽到</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @forelse (\App\Helpers\DatabaseHelper::getActivityClassDataView()['data'] as $row)
                                                    <tr>
                                                        <td>{{ $row['Date'] }}</td>
                                                        <td>{{ $row['Address'] }}</td>
                                                        <td>{{ $row['Activity_name'] }}</td>
                                                        <td>{{ $row['Application_number'] }}</td>
                                                        <td>{{ $row['truecome'] }}</td>
                                                        <td>{{ $row['falsecome'] }}</td>
                                                        <td>{{ $row['nonregister'] }}</td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="6">目前沒有可用的活動數據。</td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <!-- account-viewEvent
                            <div class="tab-pane fade" id="account-viewEvent">
                                <div class="card-body pb-2">
                                    <div class="container text-center">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>課堂日期</th>
                                                <th>活動地點</th>
                                                <th>活動名稱</th>
                                                <th>應到人數</th>
                                                <th>實到人數</th>
                                                <th>未到人數</th>
                                                <th>未上線簽到</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @forelse (\App\Helpers\DatabaseHelper::getActivityClassDataView()['data'] as $row)
                                                    <tr>
                                                        <td>{{ $row['Date'] }}</td>
                                                        <td>{{ $row['Address'] }}</td>
                                                        <td>{{ $row['Activity_name'] }}</td>
                                                        <td>{{ $row['Application_number'] }}</td>
                                                        <td>{{ $row['truecome'] }}</td>
                                                        <td>{{ $row['falsecome'] }}</td>
                                                        <td>{{ $row['nonregister'] }}</td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="6">目前沒有可用的活動數據。</td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> -->
                        @endif


                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('/Profile_scripts.js') }}"></script>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript"></script>

</body>

</html>

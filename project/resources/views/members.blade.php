<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>北科弓道社</title>
    <link rel="stylesheet" href="style_yen.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+TC:wght@700&family=Zen+Maru+Gothic&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f4aeed6933.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <header class="header_members">
        <button class="menu" onclick="toggleMenu()">&#9776;</button>
        <h1>北科弓道社</h1>
        <nav>
            <ul>
                <li><a href="{{ url('/') }}">主頁</a></li>
                <li><a href="{{ url('/about') }}">關於</a></li>
                <li><a href="{{ url('/history') }}">歷史</a></li>
                <li><a href="{{ url('/members') }}" class="active">成員</a></li>
                <li><a href="{{ url('/information') }}">活動資訊</a></li>
                <li><a href="{{ url('/members_area') }}">會員專區</a></li>
            </ul>
        </nav>
    </header>

    <main class="mb-5">
        <!-- 頁面特定內容 -->
        </br></br>
        <h2>弓道部成員</h2>

        </br></br></br></br>

        <h3>弓齡五年</h3>
        <div class="container text-center mt-5 mb-5">
            <div class="row justify-content-center">
                <div class="col-2 align-items-center">
                    <img class="pic mb-2" src="image/member_photo/4-1.jpg">
                    <div class="row-2 mt-2 c-badge c-badge--member">前教學</div>
                    <strong>林健傑</strong>
                    <div>能源所碩士一年級</div>
                </div>
            </div>
        </div>

        <hr>
        </br>

        <h3>弓齡四年</h3>
        <div class="container text-center mt-5 mb-5">
            <div class="row justify-content-center">
                <div class="col-2 align-items-center">
                    <img class="pic mb-2" src="image/member_photo/no-photo.png">
                    <div class="row-2 mt-2 c-badge c-badge--member">前教學</div>
                    <strong>洪承裕</strong>
                    <div>光電系四年級</div>
                </div>
            </div>
        </div>

        <hr>
        </br>
        
        <h3>弓齡三年</h3>
        <div class="container text-center mt-5 mb-5">
            <div class="row justify-content-center mt-5 mb-5">
                <div class="col-2 align-items-center">
                    <img class="pic mb-2" src="image/member_photo/2-1.jpg">
                    <div class="c-badge c-badge--member">教學</div>
                    <strong>陳廷佑</strong>
                    <div>電機系三年級</div>
                </div>
                <div class="col-2 align-items-center">
                    <img class="pic mb-2" src="image/member_photo/2-2.jpg">
                    <div class="c-badge c-badge--member">器材</div>
                    <strong>吳尚澤</strong>
                    <div>技優專班三年級</div>
                </div>
                <div class="col-2 align-items-center">
                    <img class="pic mb-2" src="image/member_photo/2-5.jpg">
                    <div class="c-badge c-badge--member">公關</div>
                    <strong>翁廷豪</strong>
                    <div>電資學士班三年級</div>
                </div>
                <div class="col-2 align-items-center">
                    <img class="pic mb-2" src="image/member_photo/2-3.jpg">
                    <div class="c-badge c-badge--member">書記</div>
                    <strong>劉宜蓁</strong>
                    <div>智動科四年級</div>
                </div>
            </div>
            <div class="row justify-content-center mt-5 mb-5">
                <div class="col-2 align-items-center">
                    <img class="pic mb-2" src="image/member_photo/no-photo.png">
                    <div class="c-badge c-badge--member">部員</div>
                    <strong>譚翔庭</strong>
                    <div>機械系三年級</div>
                </div>
                <div class="col-2 align-items-center">
                    <img class="pic mb-2" src="image/member_photo/2-6.jpg">
                    <div class="c-badge c-badge--member">美宣</div>
                    <strong>陳宥睿</strong>
                    <div>工設系三年級</div>
                </div>
                <div class="col-2 align-items-center">
                    <img class="pic mb-2" src="image/member_photo/no-photo.png">
                    <div class="c-badge c-badge--member">總務</div>
                    <strong>顏湘芸</strong>
                    <div>電資學士班三年級</div>
                </div>
                <div class="col-2 align-items-center">
                    <img class="pic mb-2" src="image/member_photo/2-4.jpg">
                    <div class="c-badge c-badge--member">部員</div>
                    <strong>倪永藩</strong>
                    <div>龍華科技大學</div>
                </div>
            </div>
        </div>

        <hr>
        </br>
    
        <h3>弓齡二年</h3>
        <div class="container text-center mt-5 mb-5">
            <div class="row justify-content-center mt-5 mb-5">
            <div class="col-2 align-items-center">
                <img class="pic mb-2" src="image/member_photo/1-1.jpg">
                <div class="c-badge c-badge--member">社長</div>
                <strong>賴庭宇</strong>
                <div>文發系二年級</div>
            </div>
            <div class="col-2 align-items-center">
                <img class="pic mb-2" src="image/member_photo/1-2.jpg">
                <div class="c-badge c-badge--member">副社長</div>
                <strong>陳暹育</strong>
                <div>機械系二年級</div>
            </div>
            </div>
            <div class="row justify-content-center mt-5 mb-5">
            <div class="col-2 align-items-center">
                <img class="pic mb-2" src="image/member_photo/1-3.jpg">
                <div class="c-badge c-badge--member">副社長</div>
                <strong>鄭朝元</strong>
                <div>機械系二年級</div>
            </div>
            <div class="col-2 align-items-center">
                <img class="pic mb-2" src="image/member_photo/1-4.jpg">
                <div class="c-badge c-badge--member">部員</div>
                <strong>李昀哲</strong>
                <div>電子所碩士二年級</div>
            </div>
            <div class="col-2 align-items-center">
                <img class="pic mb-2" src="image/member_photo/1-5.jpg">
                <div class="c-badge c-badge--member">部員</div>
                <strong>王建鈞</strong>
                <div>工設系三年級</div>
            </div>
            </div>
        </div>

        <hr>
        </br>
        
        <h3>弓齡一年</h3>
        <div class="container text-center mt-5 mb-5">
            <div class="row justify-content-center mt-5 mb-5">
                <div class="col-2 align-items-center">
                    <img class="pic mb-2" src="image/member_photo/0-1.jpg">
                    <div class="c-badge c-badge--member">部員</div>
                    <strong>陳瑋茹</strong>
                    <div>材資系一年級</div>
                </div>
                <div class="col-2 align-items-center">
                    <img class="pic mb-2" src="image/member_photo/0-2.jpg">
                    <div class="c-badge c-badge--member">部員</div>
                    <strong>邱仲生</strong>
                    <div>智動科四年級</div>
                </div>
                <div class="col-2 align-items-center">
                    <img class="pic mb-2" src="image/member_photo/0-3.jpg">
                    <div class="c-badge c-badge--member">部員</div>
                    <strong>林忠穎</strong>
                    <div>化工系一年級</div>
                </div>
                <div class="col-2 align-items-center">
                    <img class="pic mb-2" src="image/member_photo/0-4.jpg">
                    <div class="c-badge c-badge--member">部員</div>
                    <strong>鄭豐億</strong>
                    <div>機械系一年級</div>
                </div>
            </div>
            <div class="row justify-content-center mt-5 mb-5">
                <div class="col-2 align-items-center">
                    <img class="pic mb-2" src="image/member_photo/0-5.jpg">
                    <div class="c-badge c-badge--member">部員</div>
                    <strong>馬勁安</strong>
                    <div>電資學士班一年級</div>
                </div>
                <div class="col-2 align-items-center">
                    <img class="pic mb-2" src="image/member_photo/0-6.jpg">
                    <div class="c-badge c-badge--member">部員</div>
                    <strong>林渝沁</strong>
                    <div>工程學士班一年級</div>
                </div>
                <div class="col-2 align-items-center">
                    <img class="pic mb-2" src="image/member_photo/0-7.jpg">
                    <div class="c-badge c-badge--member">部員</div>
                    <strong>楊朝崴</strong>
                    <div>技優專班二年級</div>
                </div>
                <div class="col-2 align-items-center">
                    <img class="pic mb-2" src="image/member_photo/0-8.jpg">
                    <div class="c-badge c-badge--member">部員</div>
                    <strong>劉睿宇</strong>
                    <div>電機系一年級</div>
                </div>
            </div>
            <div class="row justify-content-center mt-5 mb-5">
                <div class="col-2 align-items-center">
                    <img class="pic mb-2" src="image/member_photo/0-9.jpg">
                    <div class="c-badge c-badge--member">部員</div>
                    <strong>Alexis Ricad</strong>
                    <div>Exchange School</div>
                </div>
                <div class="col-2 align-items-center">
                    <img class="pic mb-2" src="image/member_photo/0-10.jpg">
                    <div class="c-badge c-badge--member">部員</div>
                    <strong>盧士玄</strong>
                    <div>化工系一年級</div>
                </div>
                <div class="col-2 align-items-center">
                    <img class="pic mb-2" src="image/member_photo/0-11.jpg">
                    <div class="c-badge c-badge--member">部員</div>
                    <strong>陳政佑</strong>
                    <div>化工系一年級</div>
                </div>
                <div class="col-2 align-items-center">
                    <img class="pic mb-2" src="image/member_photo/0-12.jpg">
                    <div class="c-badge c-badge--member">部員</div>
                    <strong>蔡侑晉</strong>
                    <div>資財系一年級</div>
                </div>
            </div>
            <div class="row justify-content-center mt-5 mb-5">
                <div class="col-2 align-items-center">
                    <img class="pic mb-2" src="image/member_photo/0-13.jpg">
                    <div class="c-badge c-badge--member">部員</div>
                    <strong>徐嘉君</strong>
                    <div>創設學士班一年級</div>
                </div>
                <div class="col-2 align-items-center">
                    <img class="pic mb-2" src="image/member_photo/0-14.jpg">
                    <div class="c-badge c-badge--member">部員</div>
                    <strong>陳彬彬</strong>
                    <div>建築系一年級</div>
                </div>
                <div class="col-2 align-items-center">
                    <img class="pic mb-2" src="image/member_photo/0-15.jpg">
                    <div class="c-badge c-badge--member">部員</div>
                    <strong>歐陽宸</strong>
                    <div>電資學士班一年級</div>
                </div>
                <div class="col-2 align-items-center">
                    <img class="pic mb-2" src="image/member_photo/0-16.jpg">
                    <div class="c-badge c-badge--member">部員</div>
                    <strong>倪翔昱</strong>
                    <div>機械系一年級</div>
                </div>
            </div>
            <div class="row justify-content-center mt-5 mb-5">
                <div class="col-2 align-items-center">
                    <img class="pic mb-2" src="image/member_photo/0-17.jpg">
                    <div class="c-badge c-badge--member">部員</div>
                    <strong>廖紹淳</strong>
                    <div>車輛系一年級</div>
                </div>
                <div class="col-2 align-items-center">
                    <img class="pic mb-2" src="image/member_photo/no-photo.png">
                    <div class="c-badge c-badge--member">部員</div>
                    <strong>李妍緻</strong>
                    <div>臺北商業大學</div>
                </div>
                <div class="col-2 align-items-center">
                    <img class="pic mb-2" src="image/member_photo/no-photo.png">
                    <div class="c-badge c-badge--member">部員</div>
                    <strong>徐佑寧</strong>
                    <div>銘傳大學</div>
                </div>
                <div class="col-2 align-items-center">
                    <img class="pic mb-2" src="image/member_photo/no-photo.png">
                    <div class="c-badge c-badge--member">部員</div>
                    <strong>林柏璋</strong>
                    <div>資財系一年級</div>
                </div>
            </div>
            <div class="row justify-content-center mt-5 mb-5">
                <div class="col-2 align-items-center">
                    <img class="pic mb-2" src="image/member_photo/no-photo.png">
                    <div class="c-badge c-badge--member">部員</div>
                    <strong>黃昱宸</strong>
                    <div>技優專班二年級</div>
                </div>
                <div class="col-2 align-items-center">
                    <img class="pic mb-2" src="image/member_photo/no-photo.png">
                    <div class="c-badge c-badge--member">部員</div>
                    <strong>黃予弦</strong>
                    <div>臺灣大學</div>
                </div>
                <div class="col-2 align-items-center">
                    <img class="pic mb-2" src="image/member_photo/no-photo.png">
                    <div class="c-badge c-badge--member">部員</div>
                    <strong>李亮兒</strong>
                    <div>互動系三年級</div>
                </div>
                <div class="col-2 align-items-center">
                    <img class="pic mb-2" src="image/member_photo/no-photo.png">
                    <div class="c-badge c-badge--member">部員</div>
                    <strong>李冠傑</strong>
                    <div>材資系一年級</div>
                </div>
            </div>
            <div class="row justify-content-center mt-5 mb-5">
                <div class="col-2 align-items-center">
                    <img class="pic mb-2" src="image/member_photo/no-photo.png">
                    <div class="c-badge c-badge--member">部員</div>
                    <strong>劉柄漢</strong>
                    <div>智科所碩士</div>
                </div>
                <div class="col-2 align-items-center">
                    <img class="pic mb-2" src="image/member_photo/no-photo.png">
                    <div class="c-badge c-badge--member">部員</div>
                    <strong>梁歆詠</strong>
                    <div>互動系一年級</div>
                </div>
                <div class="col-2 align-items-center">
                    <img class="pic mb-2" src="image/member_photo/no-photo.png">
                    <div class="c-badge c-badge--member">部員</div>
                    <strong>林瑋玟</strong>
                    <div>防災所一年級</div>
                </div>
                <div class="col-2 align-items-center">
                    <img class="pic mb-2" src="image/member_photo/no-photo.png">
                    <div class="c-badge c-badge--member">部員</div>
                    <strong>許文豪</strong>
                    <div>工管系一年級</div>
                </div>
            </div>
            <div class="row justify-content-center mt-5 mb-5">
                <div class="col-2 align-items-center">
                    <img class="pic mb-2" src="image/member_photo/no-photo.png">
                    <div class="c-badge c-badge--member">部員</div>
                    <strong>江玟儀</strong>
                    <div>工設系二年級</div>
                </div>
                <div class="col-2 align-items-center">
                    <img class="pic mb-2" src="image/member_photo/no-photo.png">
                    <div class="c-badge c-badge--member">部員</div>
                    <strong>王瑀絢</strong>
                    <div>工設系二年級</div>
                </div>
                <div class="col-2 align-items-center">
                    <img class="pic mb-2" src="image/member_photo/no-photo.png">
                    <div class="c-badge c-badge--member">部員</div>
                    <strong>蔡宜紋</strong>
                    <div>文發系一年級</div>
                </div>
                <div class="col-2 align-items-center">
                    <img class="pic mb-2" src="image/member_photo/no-photo.png">
                    <div class="c-badge c-badge--member">部員</div>
                    <strong>江昀倉</strong>
                    <div>防災所碩士</div>
                </div>
            </div>
        </div>


    </main>

    <section class="footer-extra">
        <div class="footer-left">
            <img src="image/NtutLogo.png" alt="學校Logo" />
            <!-- <img src="/image/HomePageNtutKc.png" alt="社團Logo" /> -->

        </div>
        <div class="contact-info">
            <p>台北科技大学弓道部</p><br>
            <p>TEL : 02-2771-2171</p><br>
            <p>10608台北市大安區忠孝東路三段1號</p><br>
            <p>E-mail : ntutnicekyudo@gmail.com</a></p>
        </div>
        <div class="footer-right">
            <a
                href="https://www.instagram.com/ntutnicekyudo/?utm_source=ig_web_button_share_sheet&igshid=OGQ5ZDc2ODk2ZA==">
                <i class="fa-brands fa-instagram"></i>
            </a>
            <a href="https://www.facebook.com/profile.php?id=100057593313494">
                <i class="fa-brands fa-facebook"></i>
            </a>
        </div>
    </section>

    <footer>
        <p>Copyright©2023 Ntut Kyudo Club. All rights reserved.</p>
    </footer>

    <script>
        console.log("Script loaded successfully");
    </script>
    <script src="script.js"></script>

</body>

</html>
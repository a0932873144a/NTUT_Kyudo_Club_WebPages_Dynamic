<!DOCTYPE html>
<html lang="zh-TW">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>北科弓道社-註冊</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="index.css">
        <script src="https://kit.fontawesome.com/f4aeed6933.js" crossorigin="anonymous"></script>
    
    </head>
<body>
    <header>
        <button class="menu" onclick="toggleMenu()">&#9776;</button>
        <h1>北科弓道社</h1>
        <nav>
            <ul>
                <li><a href="{{ url('/') }}">主頁</a></li>
                <li><a href="{{ url('/about') }}">關於</a></li>
                <li><a href="{{ url('/history') }}">歷史</a></li>
                <li><a href="{{ url('/members') }}">成員</a></li>
                <li><a href="{{ url('/information') }}">活動資訊</a></li>
                <li><a href="{{ url('/members_area') }}" class="active">會員專區</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="hero-section">
            <div class="form-box">
                <div class="form-value">
                    <!-- <form action=""> -->
                    <form action="/register" method="post">
                        @csrf
                        <h2>Register</h2>
                        <div class="inputbox">
                            <ion-icon name="User_ID"></ion-icon>
                            <input name="User_ID" type="text" required>
                            <label for="">User_ID</label>
                        </div>
                        <div class="inputbox">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                            <input name="Pw" type="password" required>
                            <label for="">Password</label>
                        </div>
                        <div class="inputbox">
                            <ion-icon name="User_Name"></ion-icon>
                            <input name="User_Name" type="text" required>
                            <label for="">User_Name</label>
                        </div>
                        <div class="inputbox">
                            <ion-icon name="User_Class"></ion-icon>
                            <input name="User_Class" type="text" required>
                            <label for="">User_Class</label>
                        </div>
                        <button>Register</button>
                    </form>
                </div>
            </div>
        </section>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </main>

    <section class="footer-extra">
        <div class="footer-left">
            <img src="image/NtutLogo.png" alt="學校Logo" />
        </div>
        <div class="contact-info">
            <p>台北科技大学弓道部</p><br>
            <p>TEL : 02-2771-2171</p><br>
            <p>10608台北市大安區忠孝東路三段1號</p><br>
            <p>E-mail : ntutnicekyudo@gmail.com</a></p>
        </div>
        <div class="footer-right">
            <a href="https://www.instagram.com/ntutnicekyudo/?utm_source=ig_web_button_share_sheet&igshid=OGQ5ZDc2ODk2ZA==">
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
<!DOCTYPE html
<html lang="zh-TW">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>北科弓道社</title>
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/f4aeed6933.js" crossorigin="anonymous"></script>

    </head>
<body>
    <header>
        <button class="menu" onclick="toggleMenu()">&#9776;</button>
        <h1>北科弓道社</h1>
        <nav>
            <ul>
                <li><a href="{{ url('/') }}" class="active">主頁</a></li>
                <li><a href="{{ url('/about') }}">關於</a></li>
                <li><a href="{{ url('/history') }}">歷史</a></li>
                <li><a href="{{ url('/members') }}">成員</a></li>
                <li><a href="{{ url('/information') }}">活動資訊</a></li>
                <li><a href="{{ url('/members_area') }}">會員專區</a></li>
            </ul>
        </nav>
    </header>
    <main>

        <section class="mains">
            <h2>中靶只是過程<br>&nbsp;&nbsp;&nbsp;目標是真善美</h2>
            <p>
                <a href="#">瞭解更多</a>
            </p>
        </section>
        
        <!-- Image Slider -->
        <ul class="slides">
            <input type="radio" id="control-1" name="control" checked>
            <input type="radio" id="control-2" name="control">
            <input type="radio" id="control-3" name="control">
            <input type="radio" id="control-4" name="control">
            <input type="radio" id="control-5" name="control">
            
            <!--  Left/Right Button  -->
            <div class="navigator slide-1">
                <label for="control-5">
                    <i class="fas fa-chevron-left"></i>
                </label>
                <label for="control-2" id="nextSlide1">
                    <i class="fas fa-chevron-right"></i>
                </label>
            </div>
            <div class="navigator slide-2">
                <label for="control-1" id="nextSlide2">
                    <i class="fas fa-chevron-left"></i>
                </label>
                <label for="control-3" id="nextSlide3">
                    <i class="fas fa-chevron-right"></i>
                </label>
            </div>
            <div class="navigator slide-3">
                <label for="control-2" id="nextSlide3">
                    <i class="fas fa-chevron-left"></i>
                </label>
                <label for="control-4" id="nextSlide4">
                    <i class="fas fa-chevron-right"></i>
                </label>
            </div>
            <div class="navigator slide-4">
                <label for="control-3" id="nextSlide4">
                    <i class="fas fa-chevron-left"></i>
                </label>
                <label for="control-5" id="nextSlide5">
                    <i class="fas fa-chevron-right"></i>
                </label>
            </div>
            <div class="navigator slide-5">
                <label for="control-4" id="nextSlide5">
                    <i class="fas fa-chevron-left"></i>
                </label>
                <label for="control-1" id="nextSlide1">
                    <i class="fas fa-chevron-right"></i>
                </label>
            </div>
            <!--  /Left/Right Button  -->
            
            <li class="slide"><img src="image/SlidePic-24_Crop Image.jpg" alt="Slide 1"></li>
            <li class="slide"><img src="image/SlidePic-23_Crop Image.jpg" alt="Slide 2"></li>
            <li class="slide"><img src="image/SlidePic-21_Crop Image.jpg" alt="Slide 3"></li>
            <li class="slide"><img src="image/SlidePic-26.jpg" alt="Slide 4"></li>
            <li class="slide"><img src="image/SlidePic-25_Crop Image.jpg" alt="Slide 5"></li>
            <!-- ... -->
            
            <div class="controls-visible">
              <label for="control-1"></label>
              <label for="control-2"></label>
              <label for="control-3"></label>
              <label for="control-4"></label>
              <label for="control-5"></label>
            </div>
        </ul>


        <section class="slogan">
            <blockquote>
                "おごらず、人と比べず、面白がって平気に生きればいい。"
            </blockquote>
            <cite>樹木希林</cite>
        </section>
        
        

        <section class="greeting">
            <h3>ごあいさつ</h3>
            <hr>
            <p>
                台北科技大学弓道部のホームページへようこそ！<br>
                歡迎來到臺北科技大學弓道社首頁！<br><br>
                弓道，源自日本的武藝，飽含近千年的歷史、文化和精神，明明就是將箭射出去，卻承載如此龐大的知識量，不覺得讓人很想一探究竟嗎？<br>
                在鐮倉時期，有一位神射手在源平合戰以其神乎其技的弓術聞名天下——名喚那須與一。<br>
                《平家物語》記載他曾射中劇烈晃動的船上、一名女子手中舞動的扇子，此段故事也成為佳話、流芳後世。<br>
                少年時誰沒夢想過成為將軍馳騁沙場、名揚天下！<br>
                二次元當中也常常能看見弓道的蹤跡，諸如《犬夜叉》、《Fate/stay night》、《輝夜姬想讓人告白》等等眾多的動畫作品都有出現弓道的元素。<br>
                看著畫面中那些角色張弓射箭的身姿，要怎麼忍住也想嘗試射箭的心情呢？<br>
                現代人久坐、長時間盯螢幕，造成脖子前傾、肩膀內旋、駝背等體態問題，在腰痠背痛、肩頸難受的同時，又會導致自身的自信心下降。<br>
                幸好你現在發現了北科弓道社，只要認真練習、努力鑽研弓道，以上問題一定能獲得改善。
                看了這麼多關於弓道的特色和優點，就算不會想馬上加入弓道社，想必也會想要了解更多吧！<br>
            </p>
        </section> 
        
        <!-- <section>
            <blockquote>
                臺北科技大學<br>弓道部
            </blockquote>
        </section> -->

        <section class="content">
            <img src="image/ContextPic1-1.jpg" alt="禮記射義">

            <div class="text">
                <h4>
                    禮記射義<br>
                </h4>
                <p>
                    射は　進退周還　必ず礼に中り、<br>
                    内　志正しく、<br>
                    外　体直くして、<br>
                    然る後に　弓矢を持ること審固なり。<br>
                    弓矢を持ること審固にして、<br>
                    然る後に以って　中ると言うべし。<br>
                    これ以って　徳行を観るべし。<br>
                    射は　仁の道なり。<br>
                    射は　正しきを己に求む。<br>
                    己　正しくして　而して　後発す。<br>
                    発して　中らざるときは、<br>
                    則ち　己に勝つ者を怨みず。<br>
                    反ってこれを己に求むるのみ。<br>

                </p>
            </div>
        </section>

        <section class="content">

            <div class="text">
                <h4>
                    射法訓<br>
                </h4>
                <p>
                    射法は　弓を射ずして　骨を射ること　最も肝要なり。<br>
                    心を総体の中央に置き、<br>
                    而して　弓手三分の二　弦を推し、<br>
                    妻手三分の一　弓を引き、<br>
                    而して　心を納む　是れ和合なり。<br>
                    然る後　胸の中筋に従い、<br>
                    宜しく左右に分るる如く　これを離つべし。<br>
                    書に曰く　鉄石相剋して　火の出づること　急なり。<br>
                    即ち　金体白色　西半月の位なり。<br>


            </div>

            <img src="image/ContextPic2-1.jpg" alt="禮記射義">

        </section>
        
    </main>
    <section class="footer-extra">
        <div class="footer-left">
            <img src="image/NtutLogo.png" alt="學校Logo" />
            <!-- <img src="/image/HomePageNtutKc.png" alt="社團Logo" /> -->
            
        </div>
        <div class="contact-info">
            <p>台北科技大学弓道部</p><br>
            <p>TEL : 0908238062</p><br>
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
<!DOCTYPE html>
<html lang="zh-TW">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>北科弓道社-歷史</title>
        <link rel="stylesheet" href="style_yen.css">
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
                <li><a href="{{ url('/history') }}" class="active">歷史</a></li>
                <li><a href="{{ url('/members') }}">成員</a></li>
                <li><a href="{{ url('/information') }}">活動資訊</a></li>
                <li><a href="{{ url('/members_area') }}">會員專區</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <!-- 頁面特定內容 -->

        <h2 class="text-center-history">弓道在日本</h2>
        <p>弓道起源於古代生存狩獵及軍事用途，發展至今成為運動休閒。在日本文化中，弓箭扮演複雜角色，
            反映日本文化與精神。弓在古代神道中具有神秘力量，並用於占卜祭祀。
            古事記中記載弓為天神寶物，強調其超自然力量。禮教思想與神道結合，形成射禮儀式。桓武天皇時代
            ，儒家思想影響下，弓箭成為君子道德的象徵。弓在武士社會中具地位象徵，並發展不同射法。  
            戰國時代，武士以行射及射術鍛鍊，形成騎射、步射、堂射三種射法。明治維新後，弓術演變為弓道，
            整合各流派，推動弓道發展。全日本弓道連盟確立現代弓道架構，強調修練、倫理、美為目標。
            2006年成立國際弓道連盟，弓道在全球蓬勃發展，促進文化交流。
        </p>
        <img class="center-image-history" src="image/history_5.webp" alt="History Image">

        <br><br><br>
        <h2 class="text-center-history">弓道在台灣</h2>
        <p>日據時期，1936 年六月〈學校體操教授要目改正〉（文部省訓令第十八號）（第 2 次改訂）中，
            明定：「體操科教材包含體操、教練、遊戲及競技，但男子師範學校、中學校及男子實業學校應加
            劍道及柔道，另得加弓道。女子之師範學校、高等女學校及女子實業學校得加弓道及薙刀。」
            這時候弓道成為正式課程在台灣出場，練習的道場和人數都變多了。
        </p>
        <img class="center-image-history" src="image/history_4.jpg" alt="History Image">

        <br><br><br>
        <h2 class="text-center-history">弓道在北科</h2>
        <p>
            舊北科弓道社於日治時期創立，據本社前副社長所述，舊北科弓道社因二戰開戰而廢社。新北科弓道社於民國104年創立，本屆目前為第九屆。
        </p>
        <div class="image-container-history">
            <ul>
                <li><img src="image/history_1.jpg" alt="History Image"></li>
                <li><img src="image/history_2.jpg" alt="History Image"></li>
            </ul>
        </div>  
        <p class="text-right-history">圖片來源：臺北州立臺北工業學校卒業記念寫真帖十六年十二月</p>
        <p class="text-right-history">圖片提供感謝：洪子甯 前輩</p>

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
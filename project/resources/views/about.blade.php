<!DOCTYPE html>
<html lang="zh-TW">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>北科弓道社-關於</title>
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
                <li><a href="{{ url('/about') }}" class="active">關於</a></li>
                <li><a href="{{ url('/history') }}">歷史</a></li>
                <li><a href="{{ url('/members') }}">成員</a></li>
                <li><a href="{{ url('/information') }}">活動資訊</a></li>
                <li><a href="{{ url('/members_area') }}">會員專區</a></li>
            </ul>
        </nav>
    </header>

    <main>

        
        <!-- 頁面特定內容 -->
        <h2>關於弓道</h2>
        <p>
            在我們的傳統文化中，弓道不僅僅是一種體育運動，它也是一種精神修養的方式。透過弓道，我們能學習到真、善、美的深層含義。在《禮記·大學》中提到的「修身齊家治國平天下」，不僅描繪了一個人從自我修養到對家庭和社會負責的完整軌跡，也反映了弓道對個人成長的深遠影響。
            弓道中的「修身」不僅是對技術的精練，更是一種內在品質的培養。它要求弓手通過自我約束和自我反省來達到心靈的平靜和集中。這種對自我完善的追求也影響著弓手的家庭和社交生活，體現了「齊家」的理念。一個練習弓道的人，通過自己的行為和修養，能夠在家庭中建立一種和諧與尊重的氛圍。
            在弓道的訓練過程中，「治國」的概念也被體現出來。弓道強調的不僅僅是個人技能的提升，還包括對社會規範和文化傳統的尊重。這種對文化遺產的傳承和對社會責任的認知，對國家的穩定和發展具有重要意義。
            最終，弓道追求的「平天下」是一種對社會和諧與平衡的理想狀態。這不僅是指射箭的技術精進，更是一種心靈層面的平衡和智慧的追求。透過對弓道的練習，我們可以學習到如何在日常生活中實現內心的平靜和外在行為的優雅，從而在更廣泛的社會層面上推動和諧與美好。
            在現代社會，弓道不僅僅是一門技藝，它也是一種哲學和生活方式。通過對弓道的學習和實踐，我們不僅能夠提升自己的專業技能，更能夠在精神層面獲得成長，達到一種真、善、美的生活境界。<br>
            <br>弓道是一門十分注重基本體的運動。我們追求「正射必中」，只要確認自己身體動作是正確的，就算完全沒有瞄準靶心也能射中。
            <br>而射法八節是弓道基本體的第一個步驟，總共分為：足踏み(あしぶみ)、胴造り(どうづくり)、弓構え(ゆがまえ)、打起し(うちおこし)、引分け(ひきわけ)、会(かい)、離れ(はなれ)、残身(ざんしん)。
        </p>
        <h2>射法八節動作演練</h2>
        <div class="image-container">
            <!--<ul style="list-style: none; padding: 0; margin: 0; display: flex;">-->
            <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-wrap: wrap;">
                <li><img src="image/ashibummi.png"></li>
                <li><img src="image/doudukuri.png"></li>
                <li><img src="image/yugamae.png"></li>
                <li><img src="image/uchiokoshi.png"></li>
                <li><img src="image/hikiwake.png"></li>
                <li><img src="image/kai.png"></li>
                <li><img src="image/hanare.png"></li>
                <li><img src="image/zanshin.png"></li>
            </ul>
        </div>


        <!-- 標題 -->
        <div class="knowledge-title">
            <h2>更多詳細弓道知識？</h2>
        </div>

        <!-- 按鈕容器 -->
        <div class="knowledge-links">
            <a href="https://kyokyudo.blog/">Kyo桑的弓道雜談</a>
            <a href="https://www.kyudo.org.tw/">臺灣弓道協會</a>
            <a href="https://all-nippon-kyudo.sakura.ne.jp/">全日本弓道聯盟</a>
        </div>

        

    
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
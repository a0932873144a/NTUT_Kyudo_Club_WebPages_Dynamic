<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>北科弓道社-社團資訊</title>
    <link rel="stylesheet" href="style_event.css">
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
                <li><a href="{{ url('/information') }}" class="active">活動資訊</a></li>
                <li><a href="{{ url('/members_area') }}">會員專區</a></li>
            </ul>
        </nav>
        
    </header>
    <!-- Event Info -->
    <main>
        <div class="container">
            <div class="item-container">
                <div class="img-container">
                    <img src="image/1-1.png" alt="Event image">
                </div>
    
                <div class="body-container">
                    <div class="overlay"></div>
    
                    <div class="event-info">
                        <p class="title">碧羽祭</p>
                        <div class="separator"></div>
                        <p class="info">Taipei, Taiwan</p>
                        <p class="price">年の暮れ</p>
    
                        <div class="additional-info">
                            <p class="info">
                                <i class="fas fa-map-marker-alt"></i>
                                藏月弓道場
                            </p>
                            <p class="info">
                                <i class="far fa-calendar-alt"></i>
                                Dec. 11th, 2022 UTC
                            </p>
    
                            <p class="info description">
                                每年年末在藏月弓道場舉辦的碧羽祭，是學生弓道界最重大的比賽：鼓勵無論新手老手組隊報名，努力表現以在年度競賽中爭取佳績! <span>more...</span>
                            </p>
                        </div>
                    </div>
                    <button class="action" onclick="goToMembersArea()">予約する</button>
                </div>
            </div>
    
            <div class="item-container">
                <div class="img-container">
                    <img src="image/2-1.jpg" alt="Event image">
                </div>
    
                <div class="body-container">
                    <div class="overlay"></div>
    
                    <div class="event-info">
                        <p class="title">寒訓</p>
                        <div class="separator"></div>
                        <p class="info">Taipei, Taiwan</p>
                        <p class="price">冬休み</p>
    
                        <div class="additional-info">
                            <p class="info">
                                <i class="fas fa-map-marker-alt"></i>
                                藏月弓道場
                            </p>
                            <p class="info">
                                <i class="far fa-calendar-alt"></i>
                                Feb. 16th, 2023 UTC
                            </p>
    
                            <p class="info description">
                                由躾學武道館的劉老師指導，進行詳細的弓具保養和審查流程的教學，也逐個幫我們調整射型，詳細的解答我們的疑惑，最後還讓我們試拉竹弓，一起在寒訓中收穫滿滿吧！
                                 <span>more...</span>
                            </p>
                        </div>
                    </div>
                    <button class="action" onclick="goToMembersArea()">予約する</button>
                </div>
            </div>
    
            <div class="item-container">
                <div class="img-container">
                    <img src="image/3-1.png" alt="Event image">
                </div>
    
                <div class="body-container">
                    <div class="overlay"></div>
    
                    <div class="event-info">
                        <p class="title">台日交流活動</p>
                        <div class="separator"></div>
                        <p class="info">Taipei, Taiwan</p>
                        <p class="price">未決定</p>
    
                        <div class="additional-info">
                            <p class="info">
                                <i class="fas fa-map-marker-alt"></i>
                                245 W 52nd St, New York
                            </p>
                            <p class="info">
                                <i class="far fa-calendar-alt"></i>
                                Sat, Sep 19, 10:00 AM EDT
                            </p>
    
                            <p class="info description">
                                邀請國際武道大學、筑波大學、岡山商科大學的弓道部學生們來台，和台灣各大學弓道部、台南女中弓道部的學生們進行交流。 <span>more...</span>
                            </p>
                        </div>
                    </div>
                    <button class="action" onclick="goToMembersArea()">予約する</button>
                </div>
            </div>
    
            <div class="item-container">
                <div class="img-container">
                    <img src="image/4-1.png" alt="Event image">
                </div>
    
                <div class="body-container">
                    <div class="overlay"></div>
    
                    <div class="event-info">
                        <p class="title">新生賽</p>
                        <div class="separator"></div>
                        <p class="info">Taipei, Taiwan</p>
                        <p class="price">五月</p>
    
                        <div class="additional-info">
                            <p class="info">
                                <i class="fas fa-map-marker-alt"></i>
                                藏月弓道場
                            </p>
                            <p class="info">
                                <i class="far fa-calendar-alt"></i>
                                May 21st, 2023 UTC
                            </p>
    
                            <p class="info description">
                                北科弓道社在本年度的新生賽中取得三金一銅的好成績！舉辦於五月的新生賽，主要是為了讓初學弓道一年的同學們也能和同弓齡的同學一起上場切磋，也感謝我們今年的新生如此給力，讓我們能將獎牌抱回社辦～<span>more...</span>
                            </p>
                        </div>
                    </div>
                    <button class="action" onclick="goToMembersArea()">予約する</button>
                </div>
            </div>
        

        

            <div class="item-container">
                    <div class="img-container">
                        <img src="image/5-1.png" alt="Event image">
                    </div>
        
                    <div class="body-container">
                        <div class="overlay"></div>
        
                        <div class="event-info">
                            <p class="title">2023弓術聯合迎新</p>
                            <div class="separator"></div>
                            <p class="info">Taipei, Taiwan</p>
                            <p class="price">十月</p>
        
                            <div class="additional-info">
                                <p class="info">
                                    <i class="fas fa-map-marker-alt"></i>
                                    馬德里休閒驛站
                                </p>
                                <p class="info">
                                    <i class="far fa-calendar-alt"></i>
                                    Oct. 14th, 2023 UTC
                                </p>
        
                                <p class="info description">
                                    淡江、政大、台藝和北科聯合舉辦本次弓術聯合迎新，這次也加入了清弓、韓弓、土弓等不同的傳統弓，甚至還有騎射的體驗，讓大家能和同樣對射箭有熱忱的夥伴交流。 <span>more...</span>
                                </p>
                            </div>
                        </div>
                        <button class="action" onclick="goToMembersArea()">予約する</button>
                    </div>
                </div>
            </div>

    </main>
    <main>

        <div class="tab-pane fade" id="account-eventInformation">
            <div class="card-body pb-2">
                <div class="container mt-4">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">活動日期</th>
                                <th scope="col">活動地點</th>
                                <th scope="col">活動名稱</th>
                                <th scope="col">活動介紹</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse (\App\Helpers\DatabaseHelper::getActivityAllData()['data'] as $row)
                                <tr>
                                    <td>{{ $row['Date'] }}</td>
                                    <td>{{ $row['Address'] }}</td>
                                    <td>{{ $row['Activity_name'] }}</td>
                                    <td><a href="{{ $row['DriveLink_of_data'] }}" target="_blank">活動介紹網址</a></td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">目前沒有可用的活動數據。</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

            </div>
        </div> 

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
    <script src="script_event.js"></script>
    
</body>
</html>
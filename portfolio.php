<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/animate.css">
    <link rel="stylesheet" href="./assets/css/hover.css">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>

<body>
    <div id="portfolio">
        <!-- php用 headerファイル -->
        <?php include('header-skip.php'); ?>
        <?php include('bergermenu.php'); ?>
        <h2 class="topic">~ Portfolio ~</h2>
        <!-- 使用言語ごとのリスト -->
        <!-- <div class="list"></div> -->
        <main>

            <section>
                <a href="https://about-javascript.netlify.com/" class="img-box">
                    <img src="./assets/img/スクリーンショット 2019-12-08 19.45.50.png" alt="">
                </a>
                <div class="text">
                    <br>
                    <h5><a href="https://about-javascript.netlify.com/">テーマ : About Javascript</a></h5>
                    <br>
                    <p>使用言語 : HTML,CSS</p>
                    <!-- <br>
                <p></p> -->
                    <br>
                    <p>トップ画面をパララックスさせ、レイアウトはCSS Flexboxを使用。
                        <br><br> GitHub : <a href="https://github.com/gishitomi/about_JavaScript">https://github.com/gishitomi/about_JavaScript</a>
                        <br><br>
                        URL : <a href="https://about-javascript.netlify.com/">https://about-javascript.netlify.com/</a>
                    </p>
                </div>
            </section>

            <section>
                <a href="https://okinawa-dialy.netlify.com/" class="img-box">
                    <img src="./assets/img/スクリーンショット 2019-12-08 20.00.03.png" alt="">
                </a>
                <div class="text">
                    <br>
                    <h5><a href="https://okinawa-dialy.netlify.com/">テーマ : 架空の沖縄紹介サイト</a></h5>
                    <br>
                    <p>使用言語 : HTML,CSS / Javascript / jquery</p>
                    <br>
                    <p>JavaScript(主にjquery)の学習、さらにプラグインの使い方を学ぶ目的で作成したサイト。
                        <br><br> GitHub : <a href="https://github.com/gishitomi/JS-11-11">https://github.com/gishitomi/JS-11-11</a>
                        <br><br>
                        URL : <a href="https://okinawa-dialy.netlify.com/">https://okinawa-dialy.netlify.com/</a>
                    </p>
                </div>
            </section>

            <section>
                <a href="https://01day-piano-app.netlify.com/" class="img-box">
                    <img src="./assets/img/スクリーンショット 2019-12-08 22.10.12.png" alt="">
                </a>
                <div class="text">
                    <br>
                    <h5><a href="https://01day-piano-app.netlify.com/">テーマ : JS30Days 01day piano-app</a></h5>
                    <br>
                    <p>使用言語 : HTML,CSS / Javascript</p>
                    <br>
                    <p>Javascriptの学習の目的で始めた1日目の課題。<br> 参考サイト : <a href="https://javascript30.com/">https://javascript30.com/</a>
                        <br><br>GitHub : <a href="https://github.com/gishitomi/30days-01day-pianoapp">https://github.com/gishitomi/30days-01day-pianoapp</a>
                        <br><br>
                        URL : <a href="https://01day-piano-app.netlify.com/">https://01day-piano-app.netlify.com/</a>
                    </p>
                </div>
            </section>

            <section>
                <a href="https://nifty-jepsen-3dc9da.netlify.com/" class="img-box">
                    <img src="./assets/img/スクリーンショット 2019-12-08 22.35.56.png" alt="">
                </a>
                <div class="text">
                    <br>
                    <h5><a href="https://nifty-jepsen-3dc9da.netlify.com/">テーマ : 架空の物件紹介サイト</a></h5>
                    <br>
                    <p>使用言語 : HTML,CSS / Javascript / Bootstrap / jquery</p>
                    <br>
                    <p>プログラミングスクールで2人1組で行ったチーム開発により作成したサイト。<br>コード編集のやりとりはGitHubを使用して行った。Topページと駐車場ページを担当。
                        <br><br>GitHub : <a href="https://github.com/koji1218ai/teamAandS">https://github.com/koji1218ai/teamAandS</a>
                        <br><br>
                        URL : <a href="https://nifty-jepsen-3dc9da.netlify.com/">https://nifty-jepsen-3dc9da.netlify.com/</a>
                    </p>
                </div>
            </section>
        </main>
        <ul class="page">
            <li><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
            <li><a href="#">1</a></li>
            <li><a href="./portfolio-page2.php">2</a></li>
            <li><a href="./portfolio-page2.php"><i class="fas fa-angle-double-right"></i></a></li>

        </ul>
    </div>


    <script src="./assets/js/jquery.js"></script>
    <script src="./assets/js/jquery.typetype.min.js"></script>
    <script src="./assets/js/anime.min.js"></script>
    <script src="./assets/js/start.js"></script>
    <script src="./assets/js/humberger.js"></script>
</body>

</html>
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
                <a href="https://okinawa-dialy.netlify.com/" class="img-box">
                    <img src="./assets/img/スクリーンショット 2019-12-08 20.00.03.png" alt="">
                </a>
                <div class="text">
                    <br>
                    <h5><a href="https://elated-goldberg-d9f9d2.netlify.com/">テーマ : 架空の沖縄紹介サイト</a></h5>
                    <br>
                    <p>使用言語 : HTML,CSS / Javascript / jquery</p>
                    <br>
                    <p>JavaScript(主にjquery)の学習、さらにプラグインの使い方を学ぶ目的で作成したサイト。
                        <br><br> GitHub : <a href="https://github.com/gishitomi/js-2019-11-11">https://github.com/gishitomi/js-2019-11-11
                        <br><br>
                        URL : <a href="https://elated-goldberg-d9f9d2.netlify.com/">https://elated-goldberg-d9f9d2.netlify.com/</a>
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
                    <p>Javascriptの学習の目的で始めた1日目の課題。<br> <br>参考サイト : <a href="https://javascript30.com/">https://javascript30.com/</a>
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

            <section>
                <a href="https://fav-gazo.herokuapp.com/" class="img-box">
                    <img src="./assets/img/スクリーンショット 2019-12-20 0.51.42.png" alt="">
                </a>
                <div class="text">
                    <br>
                    <h5><a href="https://fav-gazo.herokuapp.com/">テーマ : 画像投稿サイト fav-gazo</a></h5>
                    <br>
                    <p>使用言語 : HTML,CSS / JavaScript / jquery / Sass / PHP / MySQL</p>
                    <br>
                    <p>プログラミングスクール最後の課題として作成した画像投稿サイト。ログイン画面、画像を投稿する機能にはMySQLを使用。PHPによるDB接続、MySQLからのデータの取り出しなどを中心に学ぶという目的のもとでサイトを作成。
                        <br><br>GitHub : <a href="https://github.com/gishitomi/fav-gazo">https://github.com/gishitomi/fav-gazo</a>
                        <br><br>
                        URL : <a href="https://fav-gazo.herokuapp.com/">https://fav-gazo.herokuapp.com/</a>
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
        <?php include('page-top.php') ?>

    </div>


    <script src="./assets/js/jquery.js"></script>
    <script src="./assets/js/jquery.typetype.min.js"></script>
    <script src="./assets/js/anime.min.js"></script>
    <script src="./assets/js/start.js"></script>
    <script src="./assets/js/humberger.js"></script>
    <script src="./assets/js/page-top.js"></script>
    <script src="./assets/js/portfolio.js"></script>
</body>

</html>
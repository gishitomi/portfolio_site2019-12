<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/animate.css">
    <link rel="stylesheet" href="./assets/css/hover.css">
    <link rel="stylesheet" href="./assets/css/style.css">
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
        <main id="page2">
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
                <a href="https://elated-villani-576f93.netlify.com/" class="img-box">
                    <img src="./assets/img/スクリーンショット 2019-12-08 23.18.25.png" alt="">
                </a>
                <div class="text">
                    <br>
                    <h5><a href="https://elated-villani-576f93.netlify.com/">テーマ : フロントエンドに役立つ知識</a></h5>
                    <br>
                    <p>使用言語 : HTML,CSS / JavaScript / jquery / Sass</p>
                    <!-- <br>
                <p></p> -->
                    <br>
                    <p>プログラミングスクールにて4人グループで行ったチーム開発。コード編集のやりとりはGitHubを使用した。Sassを学習することと、チーム内開発の練習の目的でこのサイトを作成。
                        <br><br>GitHub : <a href="https://github.com/naok-i-n-g/naoki">https://github.com/naok-i-n-g/naoki</a>
                        <br><br>
                        URL : <a href="https://elated-villani-576f93.netlify.com/">https://elated-villani-576f93.netlify.com/</a>
                    </p>
                </div>
            </section>



        </main>
        <ul class="page">
            <li><a href="./portfolio.php"><i class="fas fa-angle-double-left"></i></a></li>
            <li><a href="./portfolio.php">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#"><i class="fas fa-angle-double-right"></i></a></li>

        </ul>
        <?php include('page-top.php') ?>
    </div>


    <script src="./assets/js/jquery.js"></script>
    <script src="./assets/js/jquery.typetype.min.js"></script>
    <script src="./assets/js/anime.min.js"></script>
    <script src="./assets/js/start.js"></script>
    <script src="./assets/js/humberger.js"></script>
    <script src="./assets/js/page-top.js"></script>
</body>

</html>
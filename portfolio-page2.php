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
        <h2 class="topic">~ Portfolio ~</h2>
        <!-- 使用言語ごとのリスト -->
        <!-- <div class="list"></div> -->
        <main>

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
                        <br>
                        <a href="https://elated-villani-576f93.netlify.com/">https://elated-villani-576f93.netlify.com/</a>
                    </p>
                </div>
            </section>


        </main>
        <ul class="page">
            <li><a href="./portfolio-link.php"><i class="fas fa-angle-double-left"></i></a></li>
            <li><a href="./portfolio-link.php">1</a></li>
            <li>2</li>
            <li><i class="fas fa-angle-double-right"></i></li>

        </ul>
    </div>


    <script src="./assets/js/jquery.js"></script>
    <script src="./assets/js/jquery.typetype.min.js"></script>
    <script src="./assets/js/anime.min.js"></script>
    <script src="./assets/js/start.js"></script>
</body>

</html>
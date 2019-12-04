<?php include_once("index.html"); ?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>宜志富 紹太/Shota Gishitomi</title>
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/container.css">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/button.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <div class="container-wrapper">
        <div class="container">
            <header>
                <div class="header-left">
                    <h1><a href="./index.html">Shota Gishitomi</a></h1>
                </div>
                <nav>
                    <li><a href="./about.php">About</a></li>
                    <li><a href="./portfolio.html">Portfolio</a></li>
                    <li><a href="sample.php">Contact</a></li>
                </nav>
            </header>
            <main>
                <div class="img-box">
                    <img src="./assets/img/伊是名.jpeg" id="izena" alt="">
                    <img src="./assets/img/海.jpeg" id="sea" alt="">
                    <img src="./assets/img/hibiscus-787030_1280.jpg" id="hibiscus" alt="">
                    <img src="./assets/img/aerial-2592486_1920.jpg" id="aerial" alt="">
                    <img src="./assets/img/IMG_3120.jpeg" id="yuhi" alt="">
                    <!-- <img src="./assets/img/computer-820281_1920.jpg" alt=""> -->
                </div>
                <div class="text-box">
                    <img src="./assets/img/IMG_3755 3.jpeg" id="me" alt="">
                    <p id="message">初めまして！宜志富紹太と申します。<br>私は現在大学に通いつつプログラミング、<br>Web制作等の勉強をしています。<br> 質問やご意見などございましたら
                        <br><a href="">コンタクトフォーム</a>へどうぞ！
                    </p>
                    <!-- <h1><a href="./portfolio.html">Shota's Portfolio</a></h1> -->
                    <section>
                        <div class="button">
                            <a href="./portfolio.html" class="twitter-follow-button" data-show-count="false" data-size="large">Shota's Portfolio</a>
                            <script>
                                ! function(d, s, id) {
                                    var js, fjs = d.getElementsByTagName(s)[0];
                                    if (!d.getElementById(id)) {
                                        js = d.createElement(s);
                                        js.id = id;
                                        js.src = "//platform.twitter.com/widgets.js";
                                        fjs.parentNode.insertBefore(js, fjs);
                                    }
                                }(document, "script", "twitter-wjs");
                            </script>
                        </div>
                        <div class="cover">
                            <div class="innie">

                            </div>
                            <div class="spine"></div>
                            <div class="outie">
                                <p>押して</p>
                            </div>
                        </div>
                        <div class="shadow"></div>
                    </section>

                </div>
            </main>
            <footer>
                <p>©︎Shota Gishitomi</p>
            </footer>
        </div>
    </div>
    <script src="./assets/js/jquery.js"></script>
    <script src="./assets/js/app.js"></script>
</body>

</html>
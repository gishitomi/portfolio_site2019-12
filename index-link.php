<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>宜志富 紹太/Shota Gishitomi</title>
    <link rel="stylesheet" href="./assets/css/animate.css">
    <link rel="stylesheet" href="./assets/css/hover.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>

<body>
    <div class="index">
        <div class="container-wrapper">
            <div class="container">
                <!-- php用 headerファイル -->
                <?php include('header-skip.php'); ?>
                <main>
                    <div class="text-box">
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
                                    <p>Main skills used</p>
                                    <p>
                                        <i class="fab fa-html5"></i>
                                        <i class="fab fa-css3-alt"></i>
                                        <i class="fab fa-js"></i>
                                        <i class="fab fa-php"></i>
                                        <i class="fab fa-sass"></i>
                                        <i class="fab fa-github"></i>


                                    </p>
                                </div>
                            </div>
                            <div class="shadow"></div>
                        </section>

                    </div>
                </main>
                <footer>
                    <p style="color: white;">©︎Shota Gishitomi</p>
                </footer>
            </div>
        </div>
    </div>
    <script src="./assets/js/jquery.js"></script>
    <script src="./assets/js/anime.min.js"></script>
    <script src="./assets/js/app.js"></script>
    <script src="./assets/js/header.js"></script>
    <script src="./assets/js/onload.js"></script>
</body>

</html>
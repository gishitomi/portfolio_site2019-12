</html>
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
        <div class="start">
            <h1>Shota Gishitomi</h1>
        </div>
        <div class="container-wrapper">
            <div class="container">
                <!-- php用 headerファイル -->
                <?php include('header.php'); ?>
                <nav class="berger-menu">
                    <ul>
                    <li><a href="./index-link.php">Top</a></li>
                        <li><a href="./about.php">About</a></li>
                        <li><a href="./portfolio.php">Portfolio</a></li>
                        <li><a href="./contact_form/index.php">Contact</a></li>
                    </ul>
                </nav>
                <main>
                    <div class="text-box">
                        <p id="message">初めまして！宜志富紹太と申します。<br>私は現在大学に通いつつプログラミング、<br>Web制作等の勉強をしています。<br> 質問やご意見などございましたら
                            <br><a href="./contact_form/index.php">コンタクトフォーム</a>へどうぞ！
                        </p>

                    </div>
                    <section>
                        <div class="button">
                            <a href="./portfolio.php" class="twitter-follow-button" data-show-count="false" data-size="large">Shota's Portfolio</a>
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
                    <article>
                        <a href="./portfolio.php" class="btn-text-3d">Shota's Portfolio</a>
                    </article>
                    <div class="fluid-box">
                        <div class="stretch">
                            <div class="fluid rotate opacity"></div>
                        </div>
                    </div>

                    <div class="fluid-box2">
                        <div class="stretch">
                            <div class="fluid rotate opacity"></div>
                        </div>
                    </div>
                    <div class="fluid-box3">
                        <div class="stretch">
                            <div class="fluid rotate opacity"></div>
                        </div>
                    </div>
                </main>
                <footer>
                    <p>©︎Shota Gishitomi</p>
                </footer>
            </div>
        </div>
    </div>
    </div>
    <script src="./assets/js/jquery.js"></script>
    <script src="./assets/js/anime.min.js"></script>
    <script src="./assets/js/app.js"></script>
    <script src="./assets/js/header.js"></script>
    <script src="./assets/js/onload.js"></script>
    <script src="./assets/js/fluid.js"></script>
    <script src="./assets/js/humberger.js"></script>
</body>

</html>
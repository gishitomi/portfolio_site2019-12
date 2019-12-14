<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>お問い合わせ</title>
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/animate.css">
    <link rel="stylesheet" href="../assets/css/hover.css">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <div id="contact">
        <header>
            <div class="header-left">
                <h1><a href="../index-link.php">Shota Gishitomi</a></h1>
            </div>
            <nav>
                <li class="hvr-underline-from-center"><a href="../about-link.php">About</a></li>
                <li class="hvr-underline-from-center"><a href="../portfolio.php">Portfolio</a></li>
                <li class="hvr-underline-from-center"><a href="./index.php">Contact</a></li>
            </nav>
        </header>
        <div class="container-wrapper">
            <div class="container-wrap">
                <div class="container">
                    <h1>Contact</h1>
                    <form method="POST" action="check.php">
                        <div class="message">
                            <p>Webサイトについて、私について、<br>挨拶だけでも良いので、なにかコメントがありましたら<br>下記のフォームをご利用ください。</p>
                        </div>
                        <main>
                            <div class="left-box">
                                <div>
                                    名前<br>
                                    <input type="text" name="nickname">
                                </div>
                                <div class="email">
                                    メールアドレス<br>
                                    <input type="email" name="email">
                                </div>
                            </div>
                            <div class="right-box">
                                <div>
                                    メッセージ<br>
                                    <textarea name="content"></textarea>
                                </div>
                            </div>
                        </main>
                        <!-- submitと書いてあるところにactionのファイルに飛ぶ -->
                        <div class="submit">
                            <!-- <input type="submit" class="btn-square-shadow" value="送信"> -->
                            <button type="submit" class="btn-square-shadow">送信</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
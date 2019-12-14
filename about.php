<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/hover.css">
    <link rel="stylesheet" href="./assets/css/animate.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

</head>

<body>
    <div id="about">
        <div class="start">
            <textarea></textarea>
        </div>
        <div class="container-wrapper1">
            <div class="container">
                <!-- php用 headerファイル -->
                <?php include('header-skip.php'); ?>
                <h2>~About me~</h2>
                <main>
                    <div class="left-text">
                        <h5>〜自己PR〜</h5>
                        <p>私は一度やると決めたことは最後までやり切る継続力を持っていると自負しています。実際、プログラミングスクールに入った期間中は個別でJavaScriptを30日間続けるというチャレンジも毎日欠かさず行っていました。その結果、JavaScriptの知識も以前までと比べてだいぶついたと感じています。この経験から、継続することで得られる知識は非常に価値のあるものだと実感できました。
                            <br>学んだことのアウトプットとして<a href="https://qiita.com/gishitomi">Qiita</a>を最近始めています。
                            <br>
                        </p>
                        <div class="img-box">
                            <img src="./assets/img/IMG_3755 3.jpeg" alt="">
                            <div class="icon-box">
                                <a href="">
                                    <i class="fab fa-facebook"></i>
                                </a>

                                <a href="">
                                    <i class="fab fa-instagram"></i>
                                </a>

                                <a href="https://note.com/gisho1140">
                                    <p>note</p>
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="right-text">
                        <h3>~ Profile ~</h3>
                        <dl>
                            <dt>名前 : </dt>
                            <dd>宜志富紹太 (ギシトミショウタ)</dd>
                            <dt>出身地 : </dt>
                            <dd>沖縄県</dd>
                            <dt>生年月日</dt>
                            <dd>1996年 12月 15日</dd>
                            <dt>メールアドレス : </dt>
                            <dd>shotagishitomi@gmail.com</dd>
                            <dt>経歴 : </dt>
                            <dd>琉球大学4年次。大学1年次の頃にC言語を学んだことがきっかけでプログラミングの存在を知り、その技術を用いてできるアプリ開発やWeb制作などのクリエイティブな仕事をすることに憧れを持つ。しかし、大学4年次に進級する手前で単位が0.5単位足りず留年。留年中は大学の勉学だけでなく、プログラミングも本格的に勉強を始める。
                                <br>現在は無事4年次に進級できWebエンジニアを目指し勉強中。
                            </dd>
                        </dl>
                    </div>
                </main>
            </div>
        </div>
    </div>

    <script src="./assets/js/jquery.js"></script>
    <script src="./assets/js/jquery.typetype.min.js"></script>
    <script src="./assets/js/anime.min.js"></script>
    <script src="./assets/js/start.js"></script>
</body>

</html>
var app = new Vue({
    el: '#app',
    data: {
        lists: [{
                id: 1,
                title: '画像投稿サイト fav-gazo',
                url: 'https://fav-gazo.herokuapp.com/',
                useLanguage: 'HTML,CSS / JavaScript / jquery / Sass / PHP / MySQL',
                text: 'プログラミングスクール最後の課題として作成した画像投稿サイト。ログイン画面、画像を投稿する機能にはMySQLを使用。PHPによるDB接続、MySQLからのデータの取り出しなどを中心に学ぶという目的のもとでサイトを作成。',
                urlGit: 'https://github.com/gishitomi/fav-gazo',
                thumbnailSrc: './assets/img/スクリーンショット 2019-12-20 0.51.42.png'
            },
            {
                id: 2,

            }
        ]
    }
})
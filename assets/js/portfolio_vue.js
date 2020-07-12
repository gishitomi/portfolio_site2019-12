var app = new Vue({
    el: '#app',
    data: {
        lists: [{
                id: 1,
                title: '画像投稿サイト fav-gazo',
                url: 'https://fav-gazo.herokuapp.com/',
                useLanguage: 'HTML / CSS / JavaScript (jquery) / Sass / PHP / MySQL',
                text: 'プログラミングスクール最後の課題として作成した画像投稿サイト。ログイン画面、画像を投稿する機能にはMySQLを使用。PHPによるDB接続、MySQLからのデータの取り出しなどを中心に学ぶという目的のもとでサイトを作成。',
                urlGit: 'https://github.com/gishitomi/fav-gazo',
                thumbnailSrc: './assets/img/スクリーンショット 2019-12-20 0.51.42.png'
            },
            {
                id: 2,
                title: '架空の物件紹介サイト',
                url: 'https://nifty-jepsen-3dc9da.netlify.com/',
                useLanguage: 'HTML / CSS / Javascript / Bootstrap / jquery',
                text: `プログラミングスクールで2人1組で行ったチーム開発により作成したサイト。
                \nコード編集のやりとりはGitHubを使用して行った。Topページと駐車場ページを担当。`,
                urlGit: 'https://github.com/koji1218ai/teamAandS',
                thumbnailSrc: './assets/img/スクリーンショット 2019-12-08 22.35.56.png'
            },
            {
                id: 3,
                title: 'JS30Days 01day piano-app',
                url: 'https://01day-piano-app.netlify.com/',
                useLanguage: 'HTML / CSS / Javascript',
                text: 'Javascriptの学習の目的で始めた1日目の課題。',
                urlGit: 'https://github.com/gishitomi/30days-01day-pianoapp',
                thumbnailSrc: './assets/img/スクリーンショット 2019-12-08 22.10.12.png'
            },
            {
                id: 4,
                title: '架空の沖縄紹介サイト',
                url: 'https://okinawa-dialy.netlify.com/',
                useLanguage: 'HTML / CSS / Javascript (jquery)',
                text: 'JavaScript(主にjquery)の学習、さらにプラグインの使い方を学ぶ目的で作成したサイト。',
                urlGit: 'https://github.com/gishitomi/js-2019-11-11',
                thumbnailSrc: './assets/img/スクリーンショット 2019-12-08 20.00.03.png'
            },
            {
                id: 5,
                title: 'ITと経済のまとめサイト',
                url: 'https://rec-it-site.herokuapp.com/',
                useLanguage: 'HTML / CSS / JavaSCript / PHP',
                text: 'RSSを用いて、他のwebサイトから情報を受け取り、表示させることを目標に制作。',
                urlGit: 'https://github.com/gishitomi/gishitomit',
                thumbnailSrc: './assets/img/スクリーンショット 2020-04-10 21.26.38.png'
            },
            {
                id: 6,
                title: '沖縄の架空観光サイト2',
                url: 'https://okinawa-visit.netlify.com/',
                useLanguage: 'HTML / CSS / JavaSCript(jquery)',
                text: '前回の沖縄サイトを改良して沖縄の観光サイトを自分なりの言葉でまとめたサイト。',
                urlGit: 'https://github.com/gishitomi/-2020',
                thumbnailSrc: './assets/img/okinawa_off.png'
            },
            {
                id: 7,
                title: 'フロントエンドに役立つ知識',
                url: 'https://elated-villani-576f93.netlify.com/',
                useLanguage: 'HTML / CSS / JavaScript(jquery) / Sass',
                text: 'プログラミングスクールにて4人グループで行ったチーム開発。コード編集のやりとりはGitHubを使用した。Sassを学習することと、チーム内開発の練習の目的でこのサイトを作成。',
                urlGit: 'https://github.com/naok-i-n-g/naoki',
                thumbnailSrc: './assets/img/スクリーンショット 2019-12-08 23.18.25.png'
            },
            {
                id: 8,
                title: 'About Javascript',
                url: 'https://about-javascript.netlify.com/',
                useLanguage: 'HTML / CSS',
                text: 'トップ画面をパララックスさせ、レイアウトはCSS Flexboxを使用。',
                urlGit: 'https://github.com/gishitomi/about_JavaScript',
                thumbnailSrc: './assets/img/スクリーンショット 2019-12-08 19.45.50.png'
            },
            {
                id: 9,
                title: 'JavaScriptのみで作ったToDoアプリ',
                url: 'https://hardcore-hoover-dbb7e9.netlify.app',
                useLanguage: 'HTML / CSS / JavaScript',
                text: 'ライブラリに頼り気味だったのでトレーニングとしてJavaScriptのみで定番のアプリであるToDoアプリを開発。',
                urlGit: 'https://github.com/gishitomi/to_do_list_for_jquery',
                thumbnailSrc: './assets/img/スクリーンショット 2020-06-03 19.30.39.png'
            },
            {
                id: 10,
                title: 'Vue.jsによるSPA',
                url: 'sg-vue-app.netlify.app',
                useLanguage: 'HTML / CSS / JavaScript (Vue.js)',
                text: 'Vue CLIを使用し、SPA化の練習として、現在の時刻を表示させる時計アプリ、ToDoアプリの開発を行った。',
                urlGit: 'https://github.com/gishitomi/vueapp',
                thumbnailSrc: './assets/img/スクリーンショット 2020-07-12 1.21.46.png',
            },
        ],
        linkBtn: 'btn-flat-border',
        githubColor: 'github-btn-color'
    }
})
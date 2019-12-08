$(function() {

    //0.5秒後にロゴをフェードイン!
    $('.start h1').delay(700).fadeIn(500);

    // anime({
    //     targets: '.start h1', //動かしたい要素
    //     delay: 2000,
    //     duration: 4500, //アニメーションの時間を指定
    //     translateX: '-30%',
    //     translateY: '-345px',
    //     loop: false //ループを設定
    // });


    $('.start h1').delay(1500).fadeOut(500); //5秒後にロゴ含め真っ白背景をフェードアウト！

    anime({
        targets: '.start', //動かしたい要素
        delay: 3000,
        duration: 9500, //アニメーションの時間を指定
        rotate: 380,
        translateX: '450%',
        translateY: '300px',
        loop: false //ループを設定
    })



});
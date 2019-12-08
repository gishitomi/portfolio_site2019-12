$(function() {

    //0.5秒後にロゴをフェードイン!
    $('.start textarea').delay(700).fadeIn(500);

    $('.start textarea').typetype('About me\n僕の経歴など...');


    // クラスのつけ外しはdelay()で遅らせることはできないので、次のように書く！！
    $('.start textarea').delay(500).queue(function() {
        $(this).addClass('lightSpeedOut').dequeue();
        $(this).addClass('animated').dequeue();
    });

    $('.start').delay(4500).fadeOut(500); //5秒後にロゴ含め真っ白背景をフェードアウト！

});


$(function() {

    //0.5秒後にロゴをフェードイン!
    $('.start-p textarea').delay(700).fadeIn(500);

    $('.start-p textarea').typetype("Shota's Portfolio");


    // クラスのつけ外しはdelay()で遅らせることはできないので、次のように書く！！
    $('.start-p textarea').delay(500).queue(function() {
        $(this).addClass('rotateOut').dequeue();
        $(this).addClass('animated').dequeue();
    });

    $('.start-p').delay(4500).fadeOut(500); //5秒後にロゴ含め真っ白背景をフェードアウト！

});
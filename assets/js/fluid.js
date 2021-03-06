// 流体アニメーション設定値
const randomness = 120, // 振れ幅（例：90の場合は0〜90の値になる）
    threshold = 230; // しきい値


// 流体アニメーション関数を定義
const fluid = function() {

    // animate関数を使用
    $('.fluid').animate({
        borderTopLeftRadius: String(Math.round((Math.random() * randomness + threshold)) + 'px'),
        borderTopRightRadius: String(Math.round((Math.random() * randomness + threshold)) + 'px'),
        borderBottomLeftRadius: String(Math.round((Math.random() * randomness + threshold)) + 'px'),
        borderBottomRightRadius: String(Math.round((Math.random() * randomness + threshold)) + 'px'),
    }, {
        duration: 400,
        complete: fluid
    });
}

// 流体アニメーション関数を実行
fluid();
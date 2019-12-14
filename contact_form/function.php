<?php

function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

?>

<!-- 文字を入力する際に、コードを入力されて攻撃されないよう防ぐ関数 -->

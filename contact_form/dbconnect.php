<?php

//DBに接続
// MySQLのテンプレ
// $host = "localhost"; //MySQLがインストールされてるコンピュータ
// $dbname = "my-contact-form"; //使用するDB
// $charset = "utf8"; //文字コード
// $user = 'root'; //MySQLにログインするユーザー名
// $password = ''; //ユーザーのパスワード

$host = "HOSTNAME"; //MySQLがインストールされてるコンピュータ
$dbname = "DBNAME"; //使用するDB
$charset = "utf8"; //文字コード
$user = 'USERNAME'; //MySQLにログインするユーザー名
$password = 'PASSWORD'; //ユーザーのパスワード

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, //SQLでエラーが表示された場合、画面にエラーが出力される
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //DBから取得したデータを連想配列の形式で取得する
    PDO::ATTR_EMULATE_PREPARES   => false, //SQLインジェクション対策
];

//DBへの接続設定
$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
try {
    //DBへ接続
    $dbh = new PDO($dsn, $user, $password, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int) $e->getCode());
}

<?php
require_once('function.php');
require_once('dbconnect.php');
$url = 'https://hooks.slack.com/services/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';

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header('Location: index.php');
}
$nickname = $_POST['nickname'];
$email = $_POST['email'];
$content = $_POST['content'];

$stmt = $dbh->prepare('INSERT INTO contact_form (nickname, email, content) VALUES (?, ?, ?)');
$stmt->execute([$nickname, $email, $content]);
shell_exec("sh notify_slack.sh $nickname $email $content $url");
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <title>送信完了</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/thanks.css">
</head>

<body>
    <div class="container-wrapper">
        <div class="container-wrap">
            <div class="container">
                <h1>無事送信されました。</h1>
                <h1>お問い合わせありがとうございます！</h1>
            </div>
        </div>
    </div>
</body>

</html>
<?php

require_once('config.php');
require_once('functions.php');

$dbh = connectDb();

?>


<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>パーソナルカラー診断アプリ</title>
  <script src="https://kit.fontawesome.com/18d96f280e.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|M+PLUS+Rounded+1c&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <ul class="sns-list">
    <li><i class="fab fa-twitter-square sns-icon"></i></li>
  </ul>
  <header class="pc-header">
    <li><a href="about.php">パーソナルカラーとは</a></li>
    <li><a href="result.php">女性のタイプ</a></li>
    <li><a href="result.php">男性のタイプ</a></li>
    <li><a href="diagnosis.php">診断スタート</a></li>
    <li><a href="post.php">Twitter</a></li>
  </header>
  <h1>パーソナルカラー診断</h1>
</body>

</html>
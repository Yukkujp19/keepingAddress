<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ログアウト</title>
  </head>
  <body>
    <?php
      include_once('header.php');
      session_start();


      $_SESSION = array();
      session_destroy();
    ?>

    <p>ログアウトしました。</p>
    <a href="index.php">戻る</a>
  </body>
</html>

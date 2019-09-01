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

      // セッションを破棄
      $_SESSION = array();
      session_destroy();
    ?>

    <p>ログアウトしました。</p>
    <a href="index.php">back</a>
  </body>
</html>

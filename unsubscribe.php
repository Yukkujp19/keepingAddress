<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="3;URL=index.php">
    <title>退会</title>
  </head>
  <body>
    <?php
    include_once('header.php');

    $sql = "DELETE FROM adbook_user WHERE useremail = '$_POST[unsubscribe]';";
      if ($deleteData = mysqli_query($link, $sql)){
        echo "退会しました。";
        session_start();
        $_SESSION = array();
        session_destroy();

      }else{
        echo "退会出来ませんでした。";
      }

    mysqli_close($link);
    ?>
  <a href="index.php">戻る</a>
  </body>
</html>

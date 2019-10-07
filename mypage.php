<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>マイページ</title>
  </head>
  <body>
    <?php
      include_once('header.php');
      session_start();

      if (!isset($_SESSION['useremail'])){
        header("Location: login.html");
        return;
      }
    ?>

    <h1>マイページ</h1>
    <?php
      if($result2 = mysqli_query($link,"SELECT * from adbook_user where useremail='$_SESSION[useremail]'")){

        foreach ($result2 as $key) {
          $useremail = $key['useremail'];
          $name = $key['namae'];
          $address = $key['address'];
          $yubin = $key['yubin'];

          mysqli_close($link);
        }
      }
    ?>
          <label>メールアドレス：<?php echo $useremail;?></br>
          <label>名前　　　　　：<?php echo $name;?></br>
          <label>住所　　　　　：<?php echo $address;?></br>
          <label>郵便番号　　　：<?php echo $yubin;?></br>

          <form class"edit" action="mypageEdit.php" method="post">
            <input type="hidden" name="myaccount" value="<?php echo $useremail;?>">
            <input type="submit" name="mypage_edit" value="編集">
          </form>
          <a href="index.php">戻る</a></br>
  </body>
</html>

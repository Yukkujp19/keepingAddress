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

        $editMyPage = $_POST['myaccount'];
        $sql = "select * from adbook_user where useremail = '$editMyPage'";
        if ($editMyPage2 = mysqli_query($link, $sql)){

          foreach ($editMyPage2 as $key) {
            $useremail = $key["useremail"];
            $userPassword = $key["password"];
            $userName = $key["namae"];
            $userAddress = $key["address"];
            $userYubin = $key["yubin"];
          }
        }
    ?>

    <form action="mypageUpdate.php" method="post">
      <label>メールアドレス：<input type="text" name="useremail" value="<?php echo $useremail;?>"></br>
      <label>パスワード　　：<input type="text" name="password" size="10" maxlength="8" value="<?php echo $userPassword;?>"></br>
      <label>名前　　　　　：<input type="text" name="namae" value="<?php echo $userName;?>"></br>
      <label>住所　　　　　：<input type="text" name="address" value="<?php echo $userAddress;?>"></br>
      <label>郵便番号　　　：<input type="text" name="yubin" value="<?php echo $userYubin;?>"></br>
      <input type="hidden" name="account" value="<?php echo $_SESSION['useremail'];?>"></br>
      <input type="submit" name="send" value="更新"></br>
    </form>
    <a href="mypage.php">マイページ</a></br>
    <a href="index.php">ホーム</a>
  </body>
</html>

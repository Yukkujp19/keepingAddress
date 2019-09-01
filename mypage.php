<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>マイページ</title>
  </head>
  <body>
    <?php
      session_start();
      include_once('header.php');

      if (!isset($_SESSION['email'])){
        header("Location: login.html"); //強制的にログインページに飛ぶように
        return; }

      if($result2 = mysqli_query($link,"SELECT id as id,zip11 as 郵便番号,pref as 都道府県,city as 市区町村,addr11 as 住所,namae as 名前,bango as 番号,email as メール,seibetsu as 性別 from address_book_user")){ //id as 番号で書けば表記を表示させられる。

    ?>
  </body>
</html>

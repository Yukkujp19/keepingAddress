<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ログイン</title>
    <meta http-equiv="refresh" content="3;URL=index.php">
  </head>
  <body>
    <?php
    include_once('header.php');
    session_start();

    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      echo '入力された値が不正です。';
      return false;
    }

    $email = $_POST['email'];
    if(!$result = mysqli_query($link,"SELECT * from address_book_user where email='$email'")){
      echo "セレクトに失敗";
    }else{
      foreach ($result as $key) {

        if (!isset($key['email'])) {
          echo 'メールアドレス又はパスワードが間違っています。';
          return false;
        }

        if (password_verify($_POST['password'], $key['password'])) {
          session_regenerate_id(true); //session_idを新しく生成し、置き換える
          if($_SESSION['email'] = $key['email']){
            echo 'ログインしました<br>';
          }else{
            echo '会員登録が必要です。';
            header("Location: login.html");
        }
          echo 'メインページに戻ります。<br>';
        } else {
          echo 'メールアドレス又はパスワードが間違っています。';
          return false;
        }
      }
    }
    mysqli_close($link);
    ?>
  </body>
</html>

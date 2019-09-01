<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>adbook</title>
  </head>
  <body>

    <?php
      include_once("header.php");

    if (!$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        echo '入力された値が不正です。';
        return false;
      }
      //パスワードの正規表現
      if (preg_match('/\A(?=.*?[a-z])(?=.*?\d)[a-z\d]{8,100}+\z/i', $_POST['password'])) {
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
      } else {
        echo 'パスワードは半角英数字をそれぞれ1文字以上含んだ8文字以上で設定してください。';
        return false;
      }

        $query = "INSERT INTO address_book_user (email, password
        )VALUES ('$email', '$password'
        );";
                // selectしてから表示↓は配列でしか出てこない。
        if ($result = mysqli_query($link, $query)) {   // <- YesかNoの値だけ
            echo "登録完了";

            
        }
       mysqli_close($link);
    ?>
    <a href=index.php>back</a>
  </body>
</html>

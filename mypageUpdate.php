<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>マイページ更新</title>
  </head>
  <body>

    <?php
    include_once ('header.php');

        $useremail = $_POST['useremail'];
        $userName = $_POST['namae'];
        $userAddress = $_POST['address'];
        $userYubin = $_POST['yubin'];
        $userAccount = $_POST['account'];
        $update = "UPDATE adbook_user set useremail='$useremail', namae='$userName', address='$userAddress', yubin='$userYubin' where useremail = '$userAccount'";

        if ($updateAccount = mysqli_query($link, $update)){
          echo "UPDATE に成功しました";
        } else {
          echo mysqli_connect_error();
        }
        mysqli_close($link);
    ?>
    <a href=mypage.php>マイページ</a></body>
  </body>
</html>

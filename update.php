<html>
<body>

<?php
    $link = mysqli_connect('naviiiva.work', 'naviiiva_user', 'samurai1234', 'hiya');
    if (mysqli_connect_errno()) {
      die("データベースに接続できません:" . mysqli_connect_error() . "\n");
    } else {
      echo "データベースの接続に成功";

    $zip11 = $_POST['zip11'];
    $pref = $_POST['pref'];
    $city = $_POST['city'];
    $addr = $_POST['addr11'];
    $name = $_POST['namae'];
    $bango = $_POST['bango'];
    $email = $_POST['email'];
    $editData = $_POST['id'];

    $update = "UPDATE address_book set zip11='$zip11', pref='$pref', city='$city', addr11='$addr', namae='$name', bango='$bango', email='$email' where id = $editData";

    if ($update2 = mysqli_query($link, $update)){
      echo "UPDATE に成功しました";
    } else echo mysqli_connect_error();
  }
    mysqli_close($link);
?>
<a href=index.php>back</a></body>
</html>
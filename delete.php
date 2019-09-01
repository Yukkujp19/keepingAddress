<html>
<body>
<?php
    $link = mysqli_connect('naviiiva.work', 'naviiiva_user', 'samurai1234', 'hiya');
  if (mysqli_connect_errno()) {
    die("データベースに接続できません:" . mysqli_connect_error() . "\n");
  } else {
    echo "データベースの接続に成功";

    $delete = $_POST["sakujo"];
    $sql = "DELETE FROM address_book WHERE id='$delete'";
    if ($deleteData = mysqli_query($link, $sql)){
      echo "DELETE に成功しました";
    }else{
      echo "DELETE に失敗しました";
    }
  }
  mysqli_close($link);
?>
<a href=index.php>back</a>
</body>
</html>

<html>
<body>
<?php
    include_once ('header.php');
    $delete = $_POST["sakujo"];
    $sql = "DELETE FROM adbook WHERE id='$delete'";
    if ($deleteData = mysqli_query($link, $sql)){

      echo "DELETE に成功しました";
    }else{
      echo "DELETE に失敗しました";
    }
  mysqli_close($link);
?>
<a href=index.php>戻る</a>
</body>
</html>

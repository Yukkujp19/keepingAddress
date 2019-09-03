<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Runners</title>
  </head>
  <body>
    <?php
    $link = mysqli_connect('', '', '', '');
    if (mysqli_connect_errno()) {
      die("データベースに接続できません:" . mysqli_connect_error() . "\n");
    } else {
      echo "データベースの接続に成功しました。\n";

$sql1 = <<< SQL1
    create table if not exists address_book_user(
      id int UNIQUE not null auto_increment primary key,
      email varchar(255),
      password varchar(255),
      created timestamp not null default current_timestamp
    );
SQL1;

    if (!mysqli_query($link, $sql1)) {
    	echo mysqli_error($link);
    }

  }
  ?>
  </body>
</html>

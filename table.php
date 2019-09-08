<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Runners</title>
  </head>
  <body>
    <?php
       include_once ('header.php');

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

<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>adbook</title>
  </head>
  <body>

    <?php
         include_once ('header.php');

        $zip11 = $_POST["zip11"];
        $pref = $_POST["pref"];
        $city = $_POST["city"];
        $addr11 = $_POST["addr11"];
        $name = $_POST["namae"];
        $bango = $_POST["bango"];
        $email = $_POST["email"];
        $seibetsu = $_POST["seibetsu"];

        $query = "INSERT INTO address_book (zip11, pref, city, addr11, namae, bango, email, seibetsu
        )VALUES ('$zip11', '$pref', '$city', '$addr11', '$name', '$bango', '$email', '$seibetsu'
        );";
                // selectしてから表示↓は配列でしか出てこない。
        if ($result = mysqli_query($link, $query)) {   // <- YesかNoの値だけ
            echo "INSERTに成功しました。";
            }
           }
           mysqli_close($link);
    ?>
    <a href=index.php>back</a>
  </body>
</html>

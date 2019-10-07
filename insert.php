<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>adbook</title>
  </head>
  <body>

    <?php
    include_once ('header.php');
    session_start();
        $zip11 = $_POST["zip11"];
        $pref = $_POST["pref"];
        $city = $_POST["city"];
        $addr11 = $_POST["addr11"];
        $name = $_POST["namae"];
        $bango = $_POST["bango"];
        $email = $_POST["email"];
        $seibetsu = $_POST["seibetsu"];
        $useremail = $_SESSION["useremail"];

        $query = "INSERT INTO adbook (zip11, pref, city, addr11, namae, bango, email, seibetsu, useremail
        )VALUES ('$zip11', '$pref', '$city', '$addr11', '$name', '$bango', '$email', '$seibetsu', '$useremail'
        );";

        if ($result = mysqli_query($link, $query)) {   
            echo "INSERTに成功しました。";
            }

           mysqli_close($link);
    ?>
    <a href=index.php>戻る</a>
  </body>
</html>

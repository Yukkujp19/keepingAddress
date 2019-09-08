<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>adbook</title>
    <style>
      form{
        display:inline-block;
      }
      #edit{
        display: block;
      }
    </style>
  </head>
  <body>
    <?php
       include_once ('header.php');

      $editData = $_POST["hensyu"];
      $sql = "select * from address_book where id = '$editData'";
        if ($editData2 = mysqli_query($link, $sql)){
          echo "<table border=1>";
          $col = mysqli_fetch_fields($editData2);

          foreach ($editData2 as $key) {
            echo "<tr>";
            $zip11 = $key["zip11"];
            $pref = $key["pref"];
            $city = $key["city"];
            $addr11 = $key["addr11"];
            $name = $key["namae"];
            $bango = $key["bango"];
            $email = $key["email"];
            $seibetsu = $key["seibetsu"];

            echo "</tr>";
          }
          echo "</table>";
      }

    mysqli_close($link);

    ?>

        <form action="update.php" method="post">

            <label>郵便番号：<input type=text name=zip11 size="10" maxlength="8" value="<?php echo $zip11;?>"></br>
            <label>都道府県：<input type=text name=pref size="10" value="<?php echo $pref;?>"></br>
            <label>市区町村：<input type=text name=city size="10" value="<?php echo $city;?>"></br>
            <label>番地　　：<input type=text name=addr11 size="60" value="<?php echo $addr11;?>"></br>
            <label>名前　　：<input type=text name=namae target="_blank" value="<?php echo $name;?>"></br>
            <label>電話番号：<input type=text name=bango target="_blank" value="<?php echo $bango;?>"></br>
            <label>Email　 ：<input type=text name=email target="_blank" value="<?php echo $email;?>"></br>
            <label>性別　  ：<select class="sex" name="seibetsu">
          <option value="無" name="no">-</option>
    <?php
      if ($seibetsu=="男")
          echo "<option value=\"男\" name=\"male\" selected>男</option>";
      else
          echo "<option value=\"男\" name=\"male\">男</option>";
      if ($seibetsu=="女")
          echo "<option value=\"女\" name=\"female\" selected>女</option>";
      else
          echo "<option value=\"女\" name=\"female\">女</option>";
      ?>
        </select></br>
            <input type=hidden name=id value=<?php echo $_POST["hensyu"]; ?>></br>
            <input type=submit value=更新>

        </form>
  <a href=index.php>back</a>
  </body>
</html>

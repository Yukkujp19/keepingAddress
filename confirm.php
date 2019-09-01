<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>confirm</title>
  </head>
  <style>
  .frame{
    font-size: 25px;
    text-align: center;
  }
  .register{
    display: inline-block;
    text-align: left;
  }
  </style>
  <body>
    <div class="frame">
      <div class="register">
        <h2>登録内容確認</h2>
            <table border="1">
              <tr> <!-- or $_SESSION-->
                <td>郵便番号</td>
                <td><?php echo $_POST["zip11"]; ?></td>
              </tr>
              <tr>
                <td>都道府県</td>
                <td><?php echo $_POST["pref"]; ?></td>
              </tr>
              <tr>
                <td>市区町村</td>
                <td><?php echo $_POST["city"]; ?></td>
              </tr>
              <tr>
                <td>住所</td>
                <td><?php echo $_POST["addr11"]; ?></td>
              </tr>
              <tr>
                <td>電話番号</td>
                <td><?php echo $_POST["bango"]; ?></td>
              </tr>
              <tr>
                <td>氏名</td>
                <td><?php echo $_POST["namae"]; ?></td>
              </tr>
              <tr>
                <td>メール</td>
                <td><?php echo $_POST["email"]; ?></td>
              </tr>
              <tr>
                <td>性別</td>
                <td><?php echo $_POST["seibetsu"]; ?></td>
              </tr>
            </table>
        <div class="save">
          <form class="ok" action="insert.php" method="post"><!--$POST_[]をvalueに入れる-->
            <input type="hidden" name="zip11" value="<?php echo $_POST["zip11"]; ?>">
            <input type="hidden" name="pref" value="<?php echo $_POST["pref"]; ?>">
            <input type="hidden" name="city" value="<?php echo $_POST["city"]; ?>">
            <input type="hidden" name="addr11" value="<?php echo $_POST["addr11"]; ?>">
            <input type="hidden" name="bango" value="<?php echo $_POST["bango"]; ?>">
            <input type="hidden" name="namae" value="<?php echo $_POST["namae"]; ?>">
            <input type="hidden" name="email" value="<?php echo $_POST["email"]; ?>">
            <input type="hidden" name="seibetsu" value="<?php echo $_POST["seibetsu"]; ?>">
            <input type="submit" name="soushin" value="送信">
          </form>
        </div>
      </div>
    </div>
  <a href=register.php>back</a>
  </body>
</html>

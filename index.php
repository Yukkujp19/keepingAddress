<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>adbook</title>
    <style>
      body {
        text-align: center;
      }

      .header {
        text-align: right;
      }

      .search {
        display: inline-block;
        text-align: left;

      }

      .list {
        text-align: center;
      }
    </style>
  </head>
  <body>
    <?php
      session_start();
      include_once('header.php');


          if (isset($_SESSION['useremail'])) {
            echo "<div class=\"header\">";
              echo "<a href=\"logout.php\">ログアウト</a><br>";
              echo "<a href=\"mypage.php\">マイページはこちら</a><br>";

              echo "<form class=\"unsubscribe\" action=\"unsubscribe.php\" method=\"post\">";
              echo "<input type=\"hidden\" name=\"unsubscribe\" value=\"{$_SESSION['useremail']}\">";
              echo "<input type=\"submit\" name=\"taikai\" value=\"退会\">";
              echo "</form>";

            echo "</div>";
            echo 'ようこそ' . ($_SESSION['useremail']) . "さん<br>";
    ?>

        <div class="topic">
          <h1>オクロウ</h1>
        </div>

        <div class="function">
          <form class="search" action="index.php" method="post">
            <input name="kensaku" rows="10" cols="100" value="" placeholder="お名前を入力して下さい">
            <input type="submit" name="sagasu" value="検索">
          </form>

          <?php
            if(isset($_POST['sagasu'])){
              if($result2 = mysqli_query($link,"SELECT id as id,zip11 as 郵便番号,pref as 都道府県,city as 市区町村,addr11 as 住所,namae as 名前,bango as 番号,email as メール,seibetsu as 性別 from adbook where useremail='$_SESSION[useremail]' AND namae='$_POST[kensaku]'")){
                echo "<table border=1>";
                $col = mysqli_fetch_fields($result2);
                echo "<tr>";

                echo "<th>";
                echo "編集";
                echo "</th>";

                echo "<th>";
                echo "ハガキ";
                echo "</th>";

                for ($i=0; $i<count($col); $i++ ){
                  echo "<th>";
                  echo $col[$i] -> name;
                  echo "</th>";
                }
                echo "<th>";
                echo "削除";
                echo "</th>";

                echo "</tr>";

                foreach ($result2 as $key) {
                  echo "<tr>";
                  echo "<td>";
                  echo "<form class=\"edit\" action=\"edit.php\" method=\"post\">";
                  echo "<input type=\"hidden\" name=\"hensyu\" value=\"".$key['id']."\">";
                  echo "<input type=\"submit\" name=\"edit\" value=\"".$key['id']."\">";
                  echo "</form>";
                  echo "</td>";

                  echo "<td>";
                  echo "<form class=\"letter\" action=\"hagaki.php\" method=\"post\">";
                  echo "<input type=\"hidden\" name=\"select\" value=\"".$key['id']."\">";
                  echo "<input type=\"submit\" name=\"hagaki\" value=\"ハガキ\">";
                  echo "</form>";
                  echo "</td>";

                  foreach ($key as $address) {
                    echo "<td>";
                    echo $address;
                    echo "</td>";
                  }
                  echo "<td>";
                  echo "<form class=\"delete\" action=\"delete.php\" method=\"post\">";
                  echo "<input type=\"hidden\" name=\"sakujo\" value=\"".$key['id']."\">";
                  echo "<input type=\"submit\" name=\"delete\" value=\"削除\">";
                  echo "</form>";
                  echo "</td>";
                  echo "</tr>";
                }
                echo "</table>";
              }

            }

          ?>

        </div>

        <div class="list">
          <h2>お友達リスト</h2>
          <?php
              include 'list.php';
              exit;
                }else{
            ?>
              <p>会員登録・ログインが必要です。</p>
              <div class="log">
                <a href="member.php">会員登録</a>
                <a href="login.html">ログイン</a>
          <?php
            }
          ?>
        </div>
</body>
</html>

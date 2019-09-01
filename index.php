<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>adbook</title>
    <style>
      body {
        text-align: center;
      }

      .function {
        display: inline-block;
        text-align: left;
      }

      .list {
        text-align: center;
      }
    </style>
  </head>
  <body>

    <div class="header">
      <h1>アドレス帳</h1>
    </div>
    <?php
      session_start();
      include_once('header.php');

          //ログイン済みの場合
          if (isset($_SESSION['email'])) {
            echo 'ようこそ' . ($_SESSION['email']) . "さん<br>";
            echo "<a href=\"logout.php\">ログアウト</a>";

            echo "<form action=\"unsubscribe.php\" method=\"post\">";
            echo "<input type=\"hidden\" name=\"unsubscribe\" value=\"{$_SESSION['email']}\">";
            echo "<input type=\"submit\" name=\"taikai\" value=\"退会\">";
            echo "</form>";
    ?>
        <div class="function">
          <form class="search" action="index.php" method="post">
            <input name="kensaku" rows="8" cols="80">
            <input type="submit" name="index" value="検索">
          </form>

        </div>

        <div class="list">
          <h2>登録一覧</h2>
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

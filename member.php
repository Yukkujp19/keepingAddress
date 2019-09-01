<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>会員登録</title>
  </head>
  <body>
    <h1>会員登録</h1>
    <form class="member" action="insertmember.php" method="post">
      <fieldset>
        <legend>新規登録フォーム</legend>
          <br>
        <label>メール　　 <input type="text" name="email" target="_blank">
          <br>
        <label>パスワード<input type="password" name="password" size="10">
          <br>
          <input type="submit" id="register" name="register" value="新規登録">
      </fieldset><br>
    </form>
      <a href="index.php">戻る</a>

  </body>
</html>

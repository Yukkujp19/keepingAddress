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
        <label>メール　　<input type="text" name="useremail" target="_blank">
          <br>
        <label>パスワード<input type="password" name="password" size="10">
          <br>
        <label>お名前　　<input type="text" name="namae" size="20">
          <br>
        <label>住所　　　<input type="text" name="address" size="60">
          <br>
        <label>郵便番号　<input type="text" name="yubin" size="8">
          <br>
          <input type="submit" id="register" name="register" value="新規登録">
      </fieldset><br>
    </form>
      <a href="index.php">戻る</a>

  </body>
</html>

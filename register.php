<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>adbook</title>
    <style>
      .frame{
        font-size: 25px;
        text-align: center;
      }
      .register{
        display: inline-block;
        text-align: left;
      }
      .save{
        text-align: right;
      }
    </style>
  </head>
  <body>
    <div class="frame">
      <div class="register">
        <h1>連絡先登録</h1>
          <form action="confirm.php" method="post">
          <label>郵便番号 <input type="text" name="zip11" size="10" maxlength="8" onKeyUp="AjaxZip3.zip2addr(this,'','addr11','addr11');"></br>
          <lavel>都道府県 <input type="text" name="pref" size="10" ></br>
          <lavel>市区町村 <input type="text" name="city" size="10"></br>
          <label>住所　　 <input type="text" name="addr11" size="60"></br>
          <label>氏名　　 <input type="text" name="namae" target="_blank"></br>
          <label>電話番号 <input type="text" name="bango" target="_blank"></br>
          <label>メール　 <input type="text" name="email" target="_blank"></br>
          <label>性別　　
        <select class="sex" name="seibetsu">
          <option value="無" name="no">-</option>
          <option value="男" name="male">男</option>
          <option value="女" name="female">女</option>
        </select></br>
        <div class="save">
          <input type="submit" name="hozon" value="保存">
        </div>
          </form>
      </div>
    </div>
    <a href=index.php>戻る</a>
      <script src="https://ajaxzip3.github.io/ajaxzip3.js"></script>
  </body>
  </html>

<?php
include_once ('header.php');
@session_start();
if (!isset($_SESSION['email'])){
  header("Location: login.html"); //強制的にログインページに飛ぶように
  return;
}
?>

<a href="register.php">新規連絡先</a>
  
<?php
  if($result2 = mysqli_query($link,"SELECT id as id,zip11 as 郵便番号,pref as 都道府県,city as 市区町村,addr11 as 住所,namae as 名前,bango as 番号,email as メール,seibetsu as 性別 from address_book")){ //id as 番号で書けば表記を表示させられる。
    echo "<table border=1>";
    $col = mysqli_fetch_fields($result2);
    echo "<tr>";
    echo "<th>";
    echo "編集";
    echo "</th>";
    for ($i=0; $i<count($col); $i++ ){ //lengthは文字列の数を数える、配列数はcount()を用いる
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
  ?>

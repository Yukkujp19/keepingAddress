<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ハガキ</title>
  </head>
  <style>

  #map {
    height: 50%;
    width: 40%;
  }

  @page {
    size:100mm 148mm;
    margin:0;
    padding:0;
  }
  body{
    margin: 0;
    padding: 0;
  }

  .sheet {
    width:100mm; height:148mm;
    margin: 0;
    padding:0;
    position: relative;
    page-break-after: always;
  }

  p {
    margin:0;
    padding:0;
  }

  .yubinbango {
    font-size:12pt;
    font-family:"IPAmj明朝" ;
    margin:0;
    padding:0;
    position:absolute; top:14mm; left:46mm;
    letter-spacing: 4.4mm;
  }

  .address {
    font-family: "IPAmj明朝";
    font-size:14pt;
    margin-left:0px;
    padding-top:0px;
    line-height:1.5em;
    writing-mode: vertical-rl;
    -webkit-writing-mode: vertical-rl;
    text-orientation: upright;
    -webkit-text-orientation: upright;
    position:absolute; top:30mm; right:10mm;
  }

  .namae {
    font-family:"IPAmj明朝" ;
    font-size:22pt;
    letter-spacing: 0.1em;
    position: absolute;
    top: 30%;
    left: 50%;
    -webkit-transform: translateY(-10%) translateX(-50%);
    transform: translateY(-10%) translateX(-50%);
    writing-mode: vertical-rl;
    -webkit-writing-mode: vertical-rl;
    text-orientation: upright;
    -webkit-text-orientation: upright;
  }

  .your_ad {
    font-family:"IPAmj明朝" ;
    font-size:10pt;
    margin:0;
    padding-left:0.5em;
    writing-mode: vertical-rl;
    -webkit-writing-mode: vertical-rl;
    text-orientation: upright;
    -webkit-text-orientation: upright;
    float: left;
    position: absolute;
    top:70mm;
    left:10mm;
  }

  .your_name {
    font-family:"IPAmj明朝" ;
    font-size:14pt;
    letter-spacing: 0.1em;
    margin:0;
    padding-top:0.5em;
    writing-mode: vertical-rl;
    -webkit-writing-mode: vertical-rl;
    text-orientation: upright;
    -webkit-text-orientation: upright;
    float: left;
    position: absolute;
    top:70mm;
    left:4mm;
  }

  .your_yubin {
    font-size:10pt;
    font-family:"IPAmj明朝";
    margin:0;
    padding:0;
    position:absolute;
    top:124mm;
    left:6mm;
    letter-spacing: 1.8mm;
  }


  @media screen {
    body { background: #e0e0e0 }
    .sheet {
    background: white;
    box-shadow: 0 .5mm 2mm rgba(0,0,0,.3);
    margin: 5mm;
    }
  }

  @media print {
    body {
    width:100mm;
    height:148mm;
    }
  }
  </style>

  <body>
    <h1>ハガッキー</h1>

    <?php
      include_once('header.php');
      session_start();

      mb_language("Japanese");
      mb_internal_encoding("UTF-8");
    ?>
      <section class="sheet">
      <?php
        if(isset($_POST['hagaki'])){
          $select = $_POST['select'];
          if($result2 = mysqli_query($link,"SELECT id, zip11, pref, city, addr11, namae, bango, email, seibetsu from adbook where id = $select")){
            foreach ($result2 as $key1) {

              echo "<p class=\"yubinbango\">";
                echo $key1['zip11'];
              echo "</p>";
              echo "<p class=\"address\">";
                echo $key1['addr11'];
              echo "</p>";
              echo "<br>";
              echo "<p class=\"namae\">";
                echo $key1['namae'];
                echo "様";
              echo "</p>";
              echo "<br>";
            }
          }

          if($result3 = mysqli_query($link,"SELECT useremail, password, namae, address, yubin from adbook_user where useremail = '$_SESSION[useremail]'")){
            foreach ($result3 as $key2) {
              echo "<p class=\"your_info\">";
                echo "<p class=\"your_name\">";
                  echo $key2['namae'];
                echo "</p>";
                echo "<br>";
                echo "<p class=\"your_ad\">";
                  echo $key2['address'];
                echo "</p>";
                echo "<br>";
                echo "<p class=\"your_yubin\">";
                  echo $key2['yubin'];;
                echo "</p>";
              echo "</p>";
            }
          }
        }

      ?>
      <a href="index.php">戻る</a>
  </body>
</html>

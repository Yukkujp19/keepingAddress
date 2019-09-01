<?php
include_once('config.php');
$link = mysqli_connect($host, $username, $password, $dbname);
if (mysqli_connect_errno()) {
  die("データベースに接続できません:" . mysqli_connect_error() . "\n");
}
?>

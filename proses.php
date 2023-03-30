<?php
$satu = $_POST['1'];
$dua = $_POST['2'];
$operasi =$_POST['operasi'];

switch ($operasi) {
  case "+":
    $hasil=$satu+$dua;
    break;
  case "-":
    $hasil=$satu-$dua;
    break;
  case "/":
    $hasil=$satu/$dua;
    break;
  case "*":
    $hasil=$satu*$dua;
    break;
  default:
    echo "you insert wrong input";
}
?>
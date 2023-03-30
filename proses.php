<?php
$satu = $_POST['1'];
$dua = $_POST['2'];
$operasi = $_POST['operasi'];

if($operasi =="+"){
    $hasil=$satu+$dua;
}
elseif($operasi =="-"){
    $hasil=$satu-$dua;
}
elseif($operasi =="*"){
    $hasil=$satu*$dua;
}
elseif($operasi =="/"){
    $hasil=$satu/$dua;
}
?>
<?php
$lokasi='localhost';
$db='siv';
$user='root';
$pass='';

$test = mysqli_connect($lokasi,$user,$pass,$db);
if (!$test) {
 echo "gagal nih: " . mysqli_connect_error();
exit();
}
?>
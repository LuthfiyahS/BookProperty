<?php
include "../../koneksi.php";

$a = $_POST['id_booking'];
$b = $_POST['nama'];
$c = $_POST['tempatlahir'];
$d = $_POST['tanggallahir'];
$e = $_POST['jeniskelamin'];
$f = $_POST['alamat'];
$g = $_POST['agama'];
$h = $_POST['status'];
$k = $_POST['nik'];
$l = $_POST['marketing'];

$tampilan = "UPDATE  booking set nama_booking='$b',tempat_lahir='$c',tanggal_lahir='$d',jenis_kelamin='$e', alamat_lengkap='$f',agama='$g',status='$h' where id_booking='$a'";
$querycrud = mysqli_query($test, $tampilan);
if ($querycrud) {
    echo "<script language=javascript> window.alert('Edit Berhasil'); window.location='../booking.php';</script>";
} else {
    echo "<script language=javascript> window.alert('Edit Gagal'); window.location='../booking.php';</script>";
}

//header("location:../prodi.php");

<?php
include "../koneksi.php";

session_start();
$query = mysqli_query($test, "SELECT max(id_booking) as kodeTerbesar FROM booking");
$data = mysqli_fetch_array($query);
$kodeBarang = $data['kodeTerbesar'];

$urutan = (int) substr($kodeBarang, 4, 4);

$urutan++;
$huruf = "BKG";
$kodeBarang = $huruf . sprintf("%04s", $urutan);

$a = $kodeBarang;
$aa = $_SESSION['id_user'];
$b = $_POST['nama'];
$c = $_POST['tempatlahir'];
$d = $_POST['tanggallahir'];
$e = $_POST['jeniskelamin'];
$f = $_POST['alamat'];
$g = $_POST['agama'];
$h = $_POST['status_perkawinan'];
$i = $_POST['pekerjaan'];
$j = $_POST['kewarganegaraan'];
$k = $_POST['nik'];
$l = $_POST['marketing'];
$m = $_POST['unit'];

$cek = "SELECT * FROM booking WHERE id_user= '$aa' AND id_marketing= '$l'";
$querycek = mysqli_query($test, $cek);
$datacek = mysqli_fetch_assoc($querycek);

if($datacek == null){
    $tampilan = "insert into booking(id_booking,id_user,nama_booking,tempat_lahir,tanggal_lahir,jenis_kelamin,alamat_lengkap,agama,status_perkawinan,pekerjaan,kewarganegaraan,nik,id_marketing,status) 
            values ('$a','$aa','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','Booking')";

    $querycrud = mysqli_query($test, $tampilan);
    //crud detail
    $detail = "insert into detail_booking(id_booking,id_unit,kuantitas) 
            values ('$a','$m','1')";
    $querydetail = mysqli_query($test, $detail);
    if ($querycrud) {
        echo "<script language=javascript> window.alert('Booking Berhasil Dibuat Agen Akan Segera Mengontak Anda'); window.location='booking.php?id='".$m."';</script>";        
    } else {
        echo "<script language=javascript> window.alert('Insert Gagal'); window.location='booking.php';</script>";

    }

} else {
    echo "<script language=javascript> window.alert('Data Telah tersedia'); window.location='booking.php';</script>";

}



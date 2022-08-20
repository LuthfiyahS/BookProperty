<?php
include "../../koneksi.php";
$files = $_FILES;
echo "<pre>";
print_r($files);
echo "</pre>";

$query = mysqli_query($test, "SELECT max(id_marketing) as kodeTerbesar FROM marketing");
$data = mysqli_fetch_array($query);
$kodeBarang = $data['kodeTerbesar'];
 
$urutan = (int) substr($kodeBarang, 4, 4);
 

$urutan++;
$huruf = "MKT";
$kodeBarang = $huruf . sprintf("%04s", $urutan);

$a = $kodeBarang;
$b= $_POST['nama'];
$c= $_POST['namaakun'];
$d= $_POST['noakun'];

// ambil data file
$namaFile = $_FILES['berkas']['name'];
$namaSementara = $_FILES['berkas']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "foto unit/";
if (!is_dir($dirUpload)) {
    # jika tidak maka folder harus dibuat terlebih dahulu
    mkdir($dirUpload, 0777, $rekursif = true);
}

// pindahkan file
$terupload = move_uploaded_file($namaSementara, $dirUpload . $namaFile);
if ($terupload) {
    //echo "Upload berhasil!<br/>";
    //echo "Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";
    $lokasii = $dirUpload . $namaFile;
} else {
    //echo "Upload Gagal!";
}

$tampilan = "insert into marketing(id_marketing,nama_marketing,telpon_marketing,email_marketing,foto_agen)
values ('$a','$b','$c','$d','$lokasii')";
$set = mysqli_query($test, $tampilan);

if ($set) {
    echo "<script language=javascript> window.alert('Insert Berhasil'); window.location='../marketing.php';</script>";
} else {
    echo "gagal insert, masukan data yang sesuai <br>";
}
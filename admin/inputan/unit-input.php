<?php
include "../../koneksi.php";
$files = $_FILES;
echo "<pre>";
print_r($files);
echo "</pre>";

$query = mysqli_query($test, "SELECT max(id_unit) as kodeTerbesar FROM unit");
$data = mysqli_fetch_array($query);
$kodeUnit = $data['kodeTerbesar'];

$urutan = (int) substr($kodeUnit, 4, 4);


$urutan++;
$huruf = "UNT";
$kodeUnit = $huruf . sprintf("%04s", $urutan);
echo $kodeUnit;

$a = $kodeUnit;
$b = $_POST['nama'];
$c = $_POST['harga'];
$d = $_POST['stok'];
$e = $_POST['deskripsi'];


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
    $lokasi = $dirUpload . $namaFile;
} else {
    //echo "Upload Gagal!";
}

$tampilan = "insert into unit(id_unit,nama_unit,foto_unit,harga,stok,deskripsi)
            values ('$a','$b','$lokasi','$c','$d','$e')";
$set = mysqli_query($test, $tampilan);

if ($set) {
    echo "<script language=javascript> window.alert('Insert Berhasil'); window.location='../unit.php';</script>";
} else {
    echo "gagal insert, masukan data yang sesuai <br>";
}

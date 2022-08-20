<?php
include '../../koneksi.php'; // membuka koneksi
// menyimpan data kedalam variabel
$vid = $_POST['id_marketing'];
$vnama = $_POST['nama'];
$vnamaakun = $_POST['namaakun'];
$vnoakun = $_POST['noakun'];

// ambil data file
$namaFile = $_FILES['berkasfoto']['name'];
$namaSementara = $_FILES['berkasfoto']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "../inputan/foto marketing/";
if (!is_dir($dirUpload)) {
    # jika tidak maka folder harus dibuat terlebih dahulu
    mkdir($dirUpload, 0777, $rekursif = true);
}

// pindahkan file
$terupload = move_uploaded_file($namaSementara, $dirUpload . $namaFile);

if ($terupload) {
    //echo "Upload berhasil!<br/>";
    //echo "Link: <a href='" . $dirUpload . $namaFile . "'>" . $namaFile . "</a>";
    $lokasi = $dirUpload . $namaFile;
} else {
    //echo "Upload Gagal!";
}
// query SQL untuk UPDATE data
$query = "UPDATE marketing set nama_marketing='$vnama',telpon_marketing='$vnamaakun',email_marketing='$vnoakun', foto_agen='$lokasi' WHERE id_marketing='$vid'";
$hasil = mysqli_query($test, $query);
   
if( $hasil )
{
    echo "<script language=javascript> window.alert('Edit Berhasil'); window.location='../marketing.php';</script>";

} else 
 die("Gagal menyimpan perubahan...") ;
<?php
include "../../koneksi.php";
if (isset($_GET['id'])) {
 $x = $_GET['id'];
 $sql = "DELETE FROM marketing WHERE id_marketing='$x'";
 $query = mysqli_query($test, $sql);
 if ($query) {
    echo "<script language=javascript> window.alert('Hapus Data Berhasil'); window.location='../marketing.php';</script>";

 } else {
 die("gagal menghapus...");
 }
} else {
 die("akses dilarang...");
}
?>
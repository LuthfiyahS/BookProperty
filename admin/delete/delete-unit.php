<?php
include "../../koneksi.php";
if (isset($_GET['id'])) {
 $x = $_GET['id'];
 $sql = "DELETE FROM unit WHERE id_unit='$x'";
 $query = mysqli_query($test, $sql);
 if ($query) {
    echo "<script language=javascript> window.alert('Hapus Data Berhasil'); window.location='../unit.php';</script>";

 } else {
 die("gagal menghapus...");
 }
} else {
 die("akses dilarang...");
}
?>
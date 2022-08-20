<?php
include "../../koneksi.php";
if (isset($_GET['id'])) {
 $x = $_GET['id'];
 $sql = "DELETE FROM booking WHERE id_booking='$x'";
 $query = mysqli_query($test, $sql);
 if ($query) {
    echo "<script language=javascript> window.alert('Hapus Data Berhasil'); window.location='../booking.php';</script>";

 } else {
 die("gagal menghapus...");
 }
} else {
 die("akses dilarang...");
}
?>
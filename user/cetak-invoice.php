<?php include "../koneksi.php";
$idbooking = $_GET['id'];

//data booking
$querybooking = "SELECT * FROM booking where id_booking = '$idbooking'";

$booking = mysqli_query($test, $querybooking);

$data_booking = array();

while ($rowbooking = mysqli_fetch_assoc($booking)) {
  $data_booking[] = $rowbooking;
}

//data unit
$queryunit = "SELECT * FROM detail_booking where id_booking = '$idbooking'";

$bookingdet = mysqli_query($test, $queryunit);

$data_bookingdet = array();

while ($rowbookingdet = mysqli_fetch_assoc($bookingdet)) {
  $data_bookingdet[] = $rowbookingdet;
}

$idunit =  $data_bookingdet[0]['id_unit'];

$queryunit = "SELECT * FROM unit where id_unit = '$idunit'";

$unit = mysqli_query($test, $queryunit);

$data_unit = array();

while ($rowdata_unit = mysqli_fetch_assoc($unit)) {
  $data_unit[] = $rowdata_unit;
}

//data marketing
$idmarketing = $data_booking[0]['id_marketing'];
$querymar = "SELECT * FROM marketing where id_marketing = '$idmarketing'";

$mar = mysqli_query($test, $querymar);

$data_mar = array();

while ($rowmar = mysqli_fetch_assoc($mar)) {
  $data_mar[] = $rowmar;
}
?>

<script type="text/javascript">
    window.print()
    </script>
<style type="text/css">
    #print {
        margin: 10;
        text-align: center;
        font-family: "Calibri", Courier, monospace;
        width: 1200px;
        font-size: 26px;
    }

    #print .title {
        margin: 20px;
        text-align: right;
        font-family: "Calibri", Courier, monospace;
        font-size: 12px;
    }

    #print span {
        text-align: center;
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        font-size: 28px;
    }

    #print table {
        border-collapse: collapse;
        width: 100%;
        margin: 20px;
    }

    #print .table1 {
        border-collapse: collapse;
        width: 95%;
        text-align: center;
        margin: 20px;
    }

    #print .table2 {
        border-collapse: collapse;
        width: 95%;
        text-align: left;
        font-size: 24px;
    }

    #print table hr {
        border: 3px double #000;
    }

    #print .ttd {
        float: right;
        width: 550px;
        background-position: center;
        background-size: contain;
    }

    #print table th {
        color: #000;
        font-family: Verdana, Geneva, sans-serif;
        font-size: 16px;
    }

    #logo {
        width: 111px;
        height: 90px;
        padding-top: 10px;
        margin-left: 10px;
    }

    h2,
    h3 {
        margin: 0px 0px 0px 0px;
    }
</style>

<body onload="window.print()">
    <title>Laporan Data booking</title>
    <div id="print">
        <table class='table1'>
            <tr>
                <td width="20%"><img src='../assets/img/Logo SIV.png' height="120" width="180"></td>
                <td width="70%">
                    <h1>Sukamanah Islamic Village </h1>
                    <h2>Kabupaten Purwakarta</h2>
                    <p style="font-size:14px;"> Jalan Alternatif Kota Bukit Indah, Desa Cigelam, Kecamatan babakancikao, Kab. Purwakarta - Jawa Barat 41151</p>
                </td>
                <td  width="10%"></td>
            </tr>
        </table>

        <table class='table'>
            <td>
                <hr />
            </td>

        </table>
        <td>
            <h2>INVOICE BOOKING #<?php echo $data_booking[0]['id_booking'] ?></h2>
        </td>
        </table>
        <h2 style="text-align: left">A. Data Pribadi</h2>
<table class="table2">
  <tr>
    <th width="20%">Nama Pemesan</th>
    <td width="1%">:</td>
    <td><?php echo $data_booking[0]['nama_booking'] ?></td>
  </tr>
  <tr>
    <th>Tempat / Tanggal Lahir</th>
    <td>:</td>
    <td><?php echo $data_booking[0]['tempat_lahir'].', '.$data_booking[0]['tanggal_lahir']  ?></td>
  </tr>
  <tr>
    <th>Jenis Kelamin</th>
    <td>:</td>
    <td><?php echo $data_booking[0]['jenis_kelamin'] ?></td>
  </tr>
  <tr>
    <th>Alamat Lengkap</th>
    <td>:</td>
    <td><?php echo $data_booking[0]['alamat_lengkap'] ?></td>
  </tr>
  <tr></tr>
  
  <tr>
    <th>Agama </th>
    <td>:</td>
    <td><?php echo $data_booking[0]['agama'] ?></td>
  </tr>
  <tr>
    <th>Status Perkawinan </th>
    <td>:</td>
    <td><?php echo $data_booking[0]['status_perkawinan'] ?></td>
  </tr>
  <tr>
    <th>Pekerjaan </th>
    <td>:</td>
    <td><?php echo $data_booking[0]['pekerjaan'] ?></td>
  </tr>
  <tr>
    <th>Nomor Induk Kependudukan </th>
    <td>:</td>
    <td><?php echo $data_booking[0]['nik'] ?></td>
  </tr>
</table>

<h2 style="text-align:left;">B. Data Booking Rumah</h2>
<table class="table2">
  <tr>
    <th width="20%">Tipe Rumah</th>
    <td width="1%">:</td>
    <td><?php echo $data_unit[0]['nama_unit'] ?></td>
  </tr>
  <tr>
    <th>Tanggal Booking</th>
    <td>:</td>
    <td><?php echo $data_booking[0]['tgl_booking'] ?></td>
  </tr>
  <tr>
    <th>Nama Marketing</th>
    <td>:</td>
    <td><?php echo $data_mar[0]['nama_marketing'] ?></td>
  </tr>
</table>
    </div>
    <div id="print">
        <table width="550" align="right" class="ttd">
            <tr>
                <td width="100px" style="padding:20px 20px 20px 20px;" align="center">
                    <strong>KEPALA KANTOR PUSAT 
                       <br> Pemasaran Sukamanah Islamic Village
</strong>
                    <br><br><br><br>
                    <strong><u>TTD</u><br></strong><small></small>
                </td>
            </tr>
        </table>
    </div>
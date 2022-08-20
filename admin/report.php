<?php  
include "../koneksi.php";
?>
<script type="text/javascript">
    window.print()
    </script>
<style type="text/css">
    #print {
        margin: auto;
        text-align: center;
        font-family: "Calibri", Courier, monospace;
        width: 1200px;
        font-size: 14px;
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
        font-size: 18px;
    }

    #print table {
        border-collapse: collapse;
        width: 100%;
        margin: 10px;
    }

    #print .table1 {
        border-collapse: collapse;
        width: 95%;
        text-align: center;
        margin: 10px;
    }

    #print table hr {
        border: 3px double #000;
    }

    #print .ttd {
        float: right;
        width: 350px;
        background-position: center;
        background-size: contain;
    }

    #print table th {
        color: #000;
        font-family: Verdana, Geneva, sans-serif;
        font-size: 12px;
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
    <title>Laporan Booking Perumahan</title>
    <div id="print">
        <table class='table1'>
            <tr>
                <td><img src='../assets/img/Logo SIV.png' height="100" width="100"></td>
                <td>
                    <h1>Sukamanah Islamic Village </h1>
                    <h2>Jalan Alternatif Kota Bukit Indah, <br> Desa Cigelam, Kecamatan babakancikao, Kab. Purwakarta - Jawa Barat 41151</h2>
                    <p style="font-size:14px;"><i></i></p>
                </td>
            </tr>
        </table>

        <table class='table'>
            <td>
                <hr />
            </td>

        </table>
        <td>
            <h3>LAPORAN PEMESANAN UNIT RUMAH</h3>
        </td>
        <tr>
            <td>
                <table border='1' class='table' width="90%">
                    <tr>
                        <th width="30">ID Booking.</th>
                        <th>Nama Lengkap</th>
                        <th>NIK</th>
                                    <th>Tempat <br> Tanggal Lahir</th>
                                    <th>Alamat</th>
                                    <th>Pekerjaan</th>
                                    <th>Nama Marketing</th>
                                    <th>Status</th>
                    </tr>
                    <?php
$isi = mysqli_query($test, "SELECT * FROM booking");
?>
                    <?php $i = 1; ?>
                    <?php foreach ($isi as $data) : ?>
                    <tr>
                    <td><?php echo $data['id_booking'], "<br>"; ?></td>
                                    <td><?php echo $data['nama_booking'], "<br>"; ?></td>
                                    <td> <?php echo $data['nik'], "<br>"; ?> </td>
                                    <td> <?php echo $data['tempat_lahir'], "<br>"; ?> , <?php echo $data['tanggal_lahir'], "<br>"; ?> </td>
                                    <td> <?php echo $data['alamat_lengkap'], "<br>"; ?> </td>
                                    <td> <?php echo $data['pekerjaan'], "<br>"; ?> </td>
                                    <td> 
                                        <?php 
                                        $idmarketing = $data['id_marketing'];
                                        $eksekusi = mysqli_query($test, "SELECT * FROM marketing where id_marketing='$idmarketing'");
                                        $datamarketing = mysqli_fetch_array($eksekusi);
                                        echo $datamarketing['nama_marketing'], "<br>"; ?> </td>
                                    <td> <?php if ($data['status'] == 'Booking') {
														echo "<div class='badge bg-pill bg-soft-info font-size-12'>" . $data['status'], "<br></div>";
													} elseif($data['status'] == 'Selesai') {
														echo "<div class='badge bg-pill bg-soft-success font-size-12'>" . $data['status'], "<br></div>";
													}
                                                    
													?> </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </table>
        </tr>
        </table>
    </div>
    <div id="print">
        <table width="450" align="right" class="ttd">
            <tr>
                <td width="100px" style="padding:20px 20px 20px 20px;" align="center">
                    <strong>KEPALA KANTOR CABANG</strong>
                    <br><br><br><br>
                    <strong><u>TTD</u><br></strong><small></small>
                </td>
            </tr>
        </table>
    </div>
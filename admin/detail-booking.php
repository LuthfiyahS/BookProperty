<?php
//include "../jegal.php";
include "../admkomponen/header.php";
include "../admkomponen/sidebar.php";
include "../koneksi.php";
//@session_start();
$x = $_GET['id'];
$eksekusi = mysqli_query($test, "SELECT * FROM booking where id_booking='$x'");
$data = mysqli_fetch_array($eksekusi);
?>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0">Invoice Detail</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Invoices</a></li>
                                <li class="breadcrumb-item active">Invoice Detail</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-md-12">
                    <div class="card" style="box-shadow: none; margin: 10%" >
                        <div class="card-body">
                            <div class="invoice-title">
                                <h4 class="float-end font-size-16">Invoice #IN<?php echo $data['id_booking'];
                                                                                if ($data['status'] == 'Selesai') { ?>
                                    <span class="badge bg-success font-size-12 ms-2"><?php echo $data['status'], "<br>"; ?></span>
                                </h4>
                            <?php } elseif ($data['status'] == 'Booking') { ?>
                                <span class="badge bg-secondary font-size-12 ms-2"><?php echo $data['status'], "<br>"; ?></span></h4>
                            <?php } ?>
                            <div class="mb-4">
                                <img src="../assets/img/Logo SIV.png" alt="logo" height="50" />
                            </div>
                            <div class="text-muted">
                                <p class="mb-1"><i class="bx bx-map me-1"></i>Jl.Kolonel Masturi No.41 Sukajaya, Lembang,Kab.Bandung Barat 40391</p>
                                <p class="mb-1"><i class="bx bx-mail-send me-1"></i> info@shariagreenland.com</p>
                                <p><i class="bx bx-phone me-1"></i> (+62) 222 7612165</p>
                            </div>
                            </div>
                            <hr>
                            <hr class="my-4">

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="text-muted">
                                        <div>
                                            <h5 class="font-size-14 mb-1">No Invoice:</h5>
                                            <p>#IN<?php echo $data['id_booking']; ?></p>
                                        </div>
                                        <div class="mt-4">
                                            <h5 class="font-size-14 mb-1">Tanggal Invoice:</h5>
                                            <p><?php echo $data['tgl_booking']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="text-muted text-sm-end">
                                        <h5 class="font-size-14 mb-3">Tagihan Kepada:</h5>
                                        <h5 class="font-size-16 mb-2"><?php echo $data['nama_booking'] ?> </h5>
                                        <p class="mb-1"><i class="bx bx-map me-1"></i><?php echo $data['alamat_lengkap'] ?> </p>
                                        <p class="mb-1"><i class="bx bx-calendar me-1"></i><?php echo $data['tgl_booking'] ?> </p>
                                        <p><?php echo $data['nik'] ?> </p>
                                    </div>
                                </div>
                            </div>


                            <div class="py-2">
                                <h5 class="font-size-15">Daftar Pesanan Unit</h5>

                                <div class="table-responsive">
                                    <table class="table table-nowrap table-centered mb-3">
                                        <thead>
                                            <tr>
                                                <th style="width: 70px;">No.</th>
                                                <th>Item</th>
                                                <th>Harga</th>
                                                <th>Deskripsi</th>
                                                <th class="text-end" style="width: 120px;">Sub Total</th>
                                            </tr>
                                        </thead>
                                        <?php $no = 1;
                                        // $eksekusi = mysqli_query($test, "SELECT * FROM booking where id_booking='$x'");
                                        // $data = mysqli_fetch_array($eksekusi);
                                        
                                        $bayar = "SELECT nama_unit,harga,kuantitas, (harga*kuantitas) as total
                                        FROM unit JOIN detail_booking on unit.id_unit=detail_booking.id_unit WHERE id_booking ='$x'";
                                        $eksekusibayar = mysqli_query($test, "$bayar");
                                        ?>
                                        <tbody>
                                            <?php while ($data = mysqli_fetch_array($eksekusibayar)) : ?>
                                                <tr>
                                                    <th scope="row"><?php echo  $no;
                                                                    $no++; ?> </th>
                                                    <td style="max-width: 450px;">
                                                        <h5 class="font-size-15"><?php echo $data['nama_unit'] ?></h5>
                                                    </td>
                                                    <td>Rp <?php echo number_format( $data['harga'],0,',','.') ?></td>
                                                    <td><?php echo $data['kuantitas'] ?></td>
                                                    <td class="text-end">Rp <?php echo number_format( $data['total'],0,',','.') ?></td>
                                                </tr>
                                            <?php endwhile;
                                            $subtot = mysqli_query($test, "SELECT sum(kuantitas) as jmlorder, sum(harga*kuantitas) as subtotal FROM unit JOIN detail_booking on unit.id_unit=detail_booking.id_unit WHERE id_booking ='$x'");
                                            $datasub = mysqli_fetch_array($subtot);
                                            ?>
                                            <tr>
                                                <th scope="row" colspan="4" class="text-end">Total</th>
                                                <td class="text-end">Rp <?php echo number_format( $datasub['subtotal'],0,',','.'), "<br>" ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="d-print-none mt-4">
                                    <div class="float-end">
                                        <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light me-1"><i class="fa fa-print"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
    <?php include "../admkomponen/footer.php"; ?>
<?php
//include "../jegal.php";
include "../admkomponen/header.php";
include "../admkomponen/sidebar.php";
include "../koneksi.php";
//@session_start();
$tampil = "select * from booking";
$eksekusi = mysqli_query($test, "$tampil");
$bayar = "select * from marketing";
$eksekbayar = mysqli_query($test, "$bayar");

$unit = "select * from unit";
$eksekunit = mysqli_query($test, "$unit");
?>
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0">Booking Unit</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Data Transaksi</a></li>
                                <li class="breadcrumb-item active">Data Booking</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div>
                        <!-- center modal -->
                        <button type="button" class="btn btn-success waves-effect waves-light" data-bs-toggle="modal"
                            data-bs-target=".modal" style="margin-bottom: 1rem;"><i class="mdi mdi-plus me-1"></i>Tambah
                            Data Booking</button>

                        <div class="modal fade modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Tambah Data Booking</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close">
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="inputan/booking-input.php" method="POST"
                                            enctype="multipart/form-data">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-xl-6 col-md-6">
                                                            <label for="iduser">Nama Lengkap</label>
                                                            <input type="text" class="form-control" id="nama"
                                                                placeholder="Masukan Nama Lengkap" name="nama">
                                                        </div>
                                                        <div class="col-xl-6 col-xl-6">
                                                            <label for="iduser">Nomor Induk KTP</label>
                                                            <input type="datepicker" class="form-control" id="nik"
                                                                placeholder="Masukan Nomor Induk" name="nik">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-xl-6 col-md-6">
                                                            <label for="iduser">Tempat Lahir</label>
                                                            <input type="text" class="form-control" id="nama"
                                                                placeholder="Masukan Tempat Lahir" name="tempatlahir">
                                                        </div>
                                                        <div class="col-xl-6 col-xl-6">
                                                            <label for="iduser">Tanggal Lahir</label>
                                                            <input type="date" class="form-control" id="nama"
                                                                placeholder="Masukan Tanggal Lahir" name="tanggallahir">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="iduser">Alamat</label>
                                                    <textarea class="form-control" id="nama"
                                                        placeholder="Masukan Alamat" name="alamat"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-xl-6 col-md-6">
                                                            <label for="iduser">Jenis Kelamin</label>
                                                            <select class="form-control form-select"
                                                                title="Jenis Kelamin" name="jeniskelamin">
                                                                <option value="-">Pilih Jenis Kelamin</option>
                                                                <option value="L">Laki laki</option>
                                                                <option value="P">Perempuan</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-xl-6 col-md-6">
                                                            <label for="iduser">Agama</label>
                                                            <select class="form-control form-select" title="Agama"
                                                                name="agama">
                                                                <option value="-">Pilih Agama</option>
                                                                <option value="Islam">Islam</option>
                                                                <option value="Kristen">Kristen</option>
                                                                <option value="Hindu">Hindu</option>
                                                                <option value="Buddha">Buddha</option>
                                                                <option value="Konghuchu">Konghuchu</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-xl-6 col-md-6">
                                                            <label for="iduser">Pekerjaan</label>
                                                            <input type="text" class="form-control" id="nama"
                                                                placeholder="Masukan Tempat Lahir" name="pekerjaan">
                                                        </div>
                                                        <div class="col-xl-6 col-xl-6">
                                                            <label for="iduser">Kewarganegaraan</label>
                                                            <input type="datepicker" class="form-control" id="nama"
                                                                placeholder="Masukan Tanggal Lahir"
                                                                name="kewarganegaraan">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-xl-6 col-md-6">
                                                            <label for="iduser">Status Perkawinan</label>
                                                            <select class="form-control form-select" title="Status"
                                                                name="status_perkawinan">
                                                                <option value="-" disabeled>Pilih Status</option>
                                                                <option value="Kawin">Kawin</option>
                                                                <option value="Belum Kawin">Belum Kawin</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-xl-6 col-xl-6">
                                                            <label for="iduser">Nama Marketing</label>
                                                            <select class="form-control form-select" title="Country"
                                                                name="marketing">
                                                                <option value="MKT0001">Pilih Marketing</option>
                                                                <?php while ($data2 = mysqli_fetch_array($eksekbayar)) : ?>
                                                                <option value="<?php echo $data2['id_marketing'] ?>">
                                                                    <?php echo $data2['nama_marketing']; ?></option>
                                                                <?php endwhile; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="iduser">Nama Unit </label>
                                                    <select class="form-control form-select" title="Country"
                                                        name="unit">
                                                        <option value="-">Pilih Unit</option>
                                                        <?php while ($data3 = mysqli_fetch_array($eksekunit)) : ?>
                                                        <option value="<?php echo $data3['id_unit'] ?>">
                                                            <?php echo $data3['nama_unit']; ?></option>
                                                        <?php endwhile; ?>
                                                    </select>
                                                </div>
                                            </div>
                                    </div>

                                    <div class="modal-footer border-top-0 d-flex justify-content-center">
                                        <button type="submit" name="add" class="btn btn-success">Tambahkan</button>
                                    </div>
                                    </form>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>ID Booking</th>
                                <th>ID User</th>
                                <th>Nama Lengkap</th>
                                <th>Tempat Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>Agama</th>
                                <th>Status Perkawinan</th>
                                <th>Pekerjaan</th>
                                <th>Kewarganegaraan</th>
                                <th>NIK</th>
                                <th>Nama Marketing</th>
                                <th>Status</th>
                                <th>Tgl Booking</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($data = mysqli_fetch_array($eksekusi)) : ?>
                            <tr>
                                <td><a href="javascript: void(0);"
                                        class="text-dark fw-bold"><?php echo $data['id_booking'], "<br>"; ?></a>
                                </td>
                                <td> <span><?php echo $data['id_user'], "<br>"; ?></span> </td>
                                <td> <span><?php echo $data['nama_booking'], "<br>"; ?></span> </td>
                                <td> <span><?php echo $data['tempat_lahir'], "<br>"; ?>,
                                        <?php echo $data['tanggal_lahir'], "<br>"; ?></span> </td>
                                <td> <span><?php echo $data['jenis_kelamin'], "<br>"; ?></span> </td>
                                <td> <span><?php echo $data['alamat_lengkap'], "<br>"; ?></span> </td>
                                <td> <span><?php echo $data['agama'], "<br>"; ?></span> </td>
                                <td> <span><?php echo $data['status_perkawinan'], "<br>"; ?></span> </td>
                                <td> <span><?php echo $data['pekerjaan'], "<br>"; ?></span> </td>
                                <td> <span><?php echo $data['kewarganegaraan'], "<br>"; ?></span> </td>
                                <td> <span><?php echo $data['nik'], "<br>"; ?></span> </td>
                                <td> <span><?php echo $data['id_marketing'], "<br>"; ?></span> </td>
                                <td> <?php if ($data['status'] == 'Booking') {
														echo "<div class='badge bg-pill bg-soft-info font-size-12'>" . $data['status'], "<br></div>";
													} elseif($data['status'] == 'Selesai') {
														echo "<div class='badge bg-pill bg-soft-success font-size-12'>" . $data['status'], "<br></div>";
													}
                                                    
													?> </td>
                                <td> <span><?php echo $data['tgl_booking'], "<br>"; ?></span> </td>
                                <td>
                                    <a class="btn btn-outline-secondary btn-sm edit" title="Edit" data-bs-toggle="modal"
                                        data-bs-target=".edituser<?php echo $data['id_booking']; ?>">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <a class="btn btn-outline-secondary btn-sm " title="Hapus"
                                        href="delete/delete-booking.php?id=<?php echo $data['id_booking']; ?>"
                                        name="del" onclick="return confirm('Yakin Hapus data?');">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                    <a class="btn btn-outline-secondary btn-sm" title="View Detail"
                                        href="detail-booking.php?id=<?php echo $data['id_booking']; ?>" name="detail">
                                        <i class="bx bx-spreadsheet"></i>
                                    </a>
                                </td>
                            </tr>
                            <div class="modal fade edituser<?php echo $data['id_booking']; ?>" tabindex="-1"
                                role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                <?php
                                        $x = $data['id_booking'];
                                        $datapro = mysqli_query($test, "SELECT * FROM booking where id_booking='$x' ");
                                        $setpro = mysqli_fetch_array($datapro);

                                        $unitpil = mysqli_query($test, "SELECT * FROM detail_booking where id_booking='$x' ");
                                        $eksekusiunit = mysqli_fetch_array($unitpil);
                                        
                                        $xx = $eksekusiunit['id_unit'];
                                        $unitdeskripsi = mysqli_query($test, "SELECT * FROM unit JOIN detail_booking ON unit.id_unit=detail_booking.id_unit WHERE detail_booking.id_unit='$xx' ");
                                        $eksekusiunitdeskripsi = mysqli_fetch_array($unitdeskripsi);
                                        // $unitnya = $eksekunit['id_unit'] ;
                                        // $deskripunit = mysqli_query($test, "SELECT * FROM unit where id_unit='$unitnya' ");
                                        // $eksekdeskripunit = mysqli_fetch_array($deskripunit);
                                        ?>
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Edit Pesanan</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close">
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="update/update-booking.php" method="POST"
                                                enctype="multipart/form-data">
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="iduser">ID Booking</label>
                                                        <input type="text" class="form-control" id="nama"
                                                            value="<?php echo $setpro['id_booking'] ?>"
                                                            name="id_booking" readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-xl-6 col-md-6">
                                                                <label for="iduser">Nama Lengkap</label>
                                                                <input type="text" class="form-control" id="nama"
                                                                    value="<?php echo $setpro['nama_booking'] ?>"
                                                                    name="nama">
                                                            </div>
                                                            <div class="col-xl-6 col-xl-6">
                                                                <label for="iduser">Nomor Induk KTP</label>
                                                                <input type="text" class="form-control" id="nik"
                                                                    value="<?php echo $setpro['nik'] ?>" name="nik">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-xl-6 col-md-6">
                                                                <label for="iduser">Tempat Lahir</label>
                                                                <input type="text" class="form-control" id="tempatlahir"
                                                                    value="<?php echo $setpro['tempat_lahir'] ?>"
                                                                    name="tempatlahir">
                                                            </div>
                                                            <div class="col-xl-6 col-xl-6">
                                                                <label for="iduser">Tanggal Lahir</label>
                                                                <input type="date" class="form-control"
                                                                    id="tanggallahir"
                                                                    value="<?php echo $setpro['tanggal_lahir'] ?>"
                                                                    name="tanggallahir">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="iduser">Alamat</label>
                                                        <textarea class="form-control" id="nama"
                                                            placeholder="Masukan Alamat"
                                                            name="alamat"><?php echo $setpro['alamat_lengkap'] ?></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-xl-6 col-md-6">
                                                                <label for="iduser">Jenis Kelamin</label>
                                                                <select class="form-control form-select"
                                                                    title="Jenis Kelamin" name="jeniskelamin">
                                                                    <?php if($setpro['jenis_kelamin'] = 'L'){ ?>
                                                                    <option
                                                                        value="<?php echo $setpro['jenis_kelamin'] ?>"
                                                                        selected>Laki Laki</option>
                                                                    <option value="P">Perempuan</option>
                                                                    <?php } else if($setpro['jenis_kelamin'] = 'P'){ ?>
                                                                    <option
                                                                        value="<?php echo $setpro['jenis_kelamin'] ?>"
                                                                        selected>Perempuan</option>
                                                                    <option value="L">Laki laki</option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-xl-6 col-md-6">
                                                                <label for="iduser">Agama</label>
                                                                <select class="form-control form-select" title="Agama"
                                                                    name="agama">
                                                                    <option value="<?php echo $setpro['agama'] ?>"
                                                                        selected>
                                                                        <?php echo $setpro['agama'] ?></option>
                                                                    <option value="Islam">Islam</option>
                                                                    <option value="Kristen">Kristen</option>
                                                                    <option value="Hindu">Hindu</option>
                                                                    <option value="Buddha">Buddha</option>
                                                                    <option value="Konghuchu">Konghuchu</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xl-6 col-md-6">
                                                            <label for="iduser">Status </label>
                                                            <select class="form-control form-select" title="Status"
                                                                name="status">
                                                                <option value="<?php echo $setpro['status'] ?>"
                                                                    disabeled><?php echo $setpro['status'] ?></option>
                                                                <option value="Dibatalkan">Dibatalkan</option>
                                                                <option value="Selesai">Selesai</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-xl-6 col-xl-6">
                                                            <label for="iduser">Nama Marketing</label>
                                                            <select class="form-control form-select" title="Country"
                                                                name="marketing">
                                                                <option value="<?php echo $setpro['id_marketing'] ?>">
                                                                <?php echo $setpro['id_marketing'] ?></option>
                                                                <?php $datamarketing= mysqli_query($test, "SELECT * FROM marketing");
                                                                 while ($data3 = mysqli_fetch_array($datamarketing)) : ?>
                                                                <option value="<?php echo $data3['id_marketing'] ?>">
                                                                    <?php echo $data3['nama_marketing']; ?></option>
                                                                <?php endwhile; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                    <label for="iduser">Nama Unit </label>
                                                    <select class="form-control form-select" title="Country"
                                                        name="unit">
                                                        <option value="<?php echo $eksekusiunitdeskripsi['id_unit'] ?>"
                                                                        selected>
                                                                        <?php echo $eksekusiunitdeskripsi['nama_unit'] ?></option>
                                                        <?php $dataunit= mysqli_query($test, "SELECT * FROM unit");
                                                        while ($data3 = mysqli_fetch_array($dataunit)) : ?>
                                                        <option value="<?php echo $data3['id_unit'] ?>">
                                                            <?php echo $data3['nama_unit']; ?></option>
                                                        <?php endwhile; ?>
                                                    </select>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer border-top-0 d-flex justify-content-center">
                                        <button type="submit" name="add" class="btn btn-success">Perbaharui
                                            Data</button>
                                    </div>
                                    </form>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
            <?php endwhile; ?>
            </tbody>
            </table>
        </div>
    </div>
</div>
<!-- end row -->
</div>
<!-- container-fluid -->
</div>
<!-- End Page-content -->
<?php include "../admkomponen/footer.php"; ?>
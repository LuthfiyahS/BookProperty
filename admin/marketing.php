<?php
//include "../jegal.php";
include "../admkomponen/header.php";
include "../admkomponen/sidebar.php";
include "../koneksi.php";
//@session_start();
$tampil = "select * from marketing";
$eksekusi = mysqli_query($test, "$tampil");
?>
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0">Data Marketing</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Data Master</a></li>
                                <li class="breadcrumb-item active">Data Marketing</li>
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
                            data-bs-target=".bs-example-modal-center" style="margin-bottom: 1rem;"><i
                                class="mdi mdi-plus me-1"></i>Tambah Data Marketing</button>

                        <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog"
                            aria-labelledby="mySmallModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Tambahkan Data Marketing</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close">
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="inputan/marketing-input.php" method="POST"
                                            enctype="multipart/form-data">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="iduser">Nama Marketing</label>
                                                    <input type="text" class="form-control" id="nama"
                                                        placeholder="Masukan Nama Marketing" name="nama">
                                                </div>
                                                <div class="form-group">
                                                    <label for="iduser">No Telpon</label>
                                                    <input type="text" class="form-control" id="nama"
                                                        placeholder="Masukan No Telpon" name="namaakun">
                                                </div>
                                                <div class="form-group">
                                                    <label for="iduser">Email</label>
                                                    <input type="text" class="form-control" id="nama"
                                                        placeholder="Masukan Email" name="noakun">
                                                </div>
                                                <div class="form-group">
                                                    <label for="iduser">Foto Agen</label>
                                                    <input type="file" class="form-control" id="nama" name="berkas">
                                                </div>
                                            </div>
                                            <div class="modal-footer border-top-0 d-flex justify-content-center">
                                                <button type="submit" name="add"
                                                    class="btn btn-success">Tambahkan</button>
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
                                    <th>ID Marketing</th>
                                    <th>Nama Marketing</th>
                                    <th>Telpon Marketing</th>
                                    <th>Email Marketing</th>
                                    <th>Foto Marketing</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>


                            <tbody>
                                <?php while ($data = mysqli_fetch_array($eksekusi)) : ?>
                                <tr>
                                    <td><a href="javascript: void(0);"
                                            class="text-dark fw-bold"><?php echo $data['id_marketing'], "<br>"; ?></a>
                                    </td>
                                    <td> <span><?php echo $data['nama_marketing'], "<br>"; ?></span> </td>
                                    <td> <span><?php echo $data['telpon_marketing'], "<br>"; ?></span> </td>
                                    <td> <span><?php echo $data['email_marketing'], "<br>"; ?></span> </td>
                                    <td> <img src="<?php echo "inputan/" . $data["foto_agen"]; ?>" alt="" height="50"
                                            width="auto"> </td>
                                    <td>
                                        <a class="btn btn-outline-secondary btn-sm edit" title="Edit"
                                            data-bs-toggle="modal"
                                            data-bs-target=".editpembayaran<?php echo $data['id_marketing']; ?>">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a class="btn btn-outline-secondary btn-sm "
                                            href="delete/delete-marketing.php?id=<?php echo $data['id_marketing']; ?>"
                                            name="del" onclick="return confirm('Yakin Hapus data?');">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <div class="modal fade editpembayaran<?php echo $data['id_marketing']; ?>" tabindex="-1"
                                    role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                    <?php
                                                $x = $data['id_marketing'];
                                                $datapro = mysqli_query($test, "SELECT * FROM marketing where id_marketing='$x' ");
                                                $setpro = mysqli_fetch_array($datapro);
                                                ?>
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Edit Marketing</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="update/update-marketing.php" method="POST"
                                                    enctype="multipart/form-data">
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="iduser">ID Marketing</label><br>
                                                            <input type="text" class="form-control" id="idprodi"
                                                                value="<?php echo $setpro['id_marketing'] ?>"
                                                                name="id_marketing" readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="iduser">Nama Pembayaran</label>
                                                            <input type="text" class="form-control" id="nama"
                                                                value="<?php echo $setpro['nama_marketing'] ?>"
                                                                name="nama">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="iduser">Nomor Telpon</label>
                                                            <input type="text" class="form-control" id="nama"
                                                                value="<?php echo $setpro['telpon_marketing'] ?>"
                                                                name="namaakun">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="iduser">Email</label>
                                                            <input type="text" class="form-control" id="nama"
                                                                value="<?php echo $setpro['email_marketing'] ?>"
                                                                name="noakun">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="iduser">Foto Marketing</label>
                                                            <input type="file" class="form-control" id="resume"
                                                                name="berkasfoto">
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="modal-footer border-top-0 d-flex justify-content-center">
                                                        <button type="submit" class="btn btn-success">Perbaharui
                                                            Data</button>
                                                    </div>
                                                </form>
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
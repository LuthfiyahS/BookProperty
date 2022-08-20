<?php
//include "../jegal.php";
include "../admkomponen/header.php";
include "../admkomponen/sidebar.php";
include "../koneksi.php";
//@session_start();
$tampil = "select * from unit";
$eksekusi = mysqli_query($test, "$tampil");
?>
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0">Unit Rumah</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Data Master</a></li>
                                <li class="breadcrumb-item active">Unit Rumah</li>
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
                            Unit Rumah</button>

                        <div class="modal fade modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Tambah Unit Rumah</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close">
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="inputan/unit-input.php" method="POST"
                                            enctype="multipart/form-data">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-xl-6">
                                                            <label for="iduser">Nama Unit Rumah</label>
                                                            <input type="text" class="form-control" id="nama"
                                                                placeholder="Masukan Nama Unit Rumah" name="nama">
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <label for="iduser">Foto Unit Rumah</label>
                                                            <input type="file" class="form-control" id="resume"
                                                                name="berkas">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-xl-6">
                                                            <label for="iduser">Harga Unit Rumah</label>
                                                            <input type="text" class="form-control" id="nama"
                                                                placeholder="Masukan Harga Unit Rumah" name="harga">
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <label for="iduser">Stok Unit Rumah</label>
                                                            <input type="text" class="form-control" id="nama"
                                                                placeholder="Masukan Stok Unit Rumah" name="stok">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="iduser">Deskripsi</label>
                                                    <textarea class="form-control" id="nama"
                                                        placeholder="Masukan Deskripsi Barang"
                                                        name="deskripsi"></textarea>
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
                                    <th>ID Unit</th>
                                    <th>Nama Unit</th>
                                    <th>Foto Unit</th>
                                    <th>Harga</th>
                                    <th>Stok</th>
                                    <th>Deskripsi</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($data = mysqli_fetch_array($eksekusi)) : ?>
                                <tr>
                                    <td><a href="javascript: void(0);"
                                            class="text-dark fw-bold"><?php echo $data['id_unit'], "<br>"; ?></a> </td>
                                    <td> <span><?php echo $data['nama_unit'], "<br>"; ?></span> </td>
                                    <td> <img src="<?php echo "inputan/" . $data["foto_unit"]; ?>" alt="" height="50"
                                            width="auto"> </td>
                                    <td> <span><?php echo $data['harga'], "<br>"; ?></span> </td>
                                    <td> <span><?php echo $data['stok'], "<br>"; ?></span> </td>
                                    <td> <span><?php echo $data['deskripsi'], "<br>"; ?></span> </td>
                                    <td>
                                        <a class="btn btn-outline-secondary btn-sm edit" title="Edit"
                                            data-bs-toggle="modal"
                                            data-bs-target=".edituser<?php echo $data['id_unit']; ?>">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a class="btn btn-outline-secondary btn-sm "
                                            href="delete/delete-unit.php?id=<?php echo $data['id_unit']; ?>" name="del"
                                            onclick="return confirm('Yakin Hapus data?');">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <div class="modal fade edituser<?php echo $data['id_unit']; ?>" tabindex="-1"
                                    role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                    <?php
                                        $x = $data['id_unit'];
                                        $datapro = mysqli_query($test, "SELECT * FROM unit where id_unit='$x' ");
                                        $setpro = mysqli_fetch_array($datapro);
                                        ?>
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Edit Unit Rumah</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="update/update-unit.php" method="POST"
                                                    enctype="multipart/form-data">
                                                    <div class="modal-body">

                                                        <div class="form-group">
                                                            <label for="iduser">Id Unit Rumah</label>
                                                            <input type="text" class="form-control" id="nama"
                                                                value="<?php echo $setpro['id_unit'] ?>" name="id_unit"
                                                                readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-xl-6">
                                                                    <label for="iduser">Nama Unit Rumah</label>
                                                                    <input type="text" class="form-control" id="nama"
                                                                        value="<?php echo $setpro['nama_unit'] ?>"
                                                                        name="nama">
                                                                </div>
                                                                <div class="col-xl-6">
                                                                    <label for="iduser">Foto Unit Rumah</label>
                                                                    <input type="file" class="form-control" id="resume"
                                                                        name="berkasfoto">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-xl-6">
                                                                    <label for="iduser">Harga Unit Rumah</label>
                                                                    <input type="text" class="form-control" id="nama"
                                                                        value="<?php echo $setpro['harga'] ?>"
                                                                        name="harga">
                                                                </div>
                                                                <div class="col-xl-6">
                                                                    <label for="iduser">Stok Unit Rumah</label>
                                                                    <input type="text" class="form-control" id="nama"
                                                                        value="<?php echo $setpro['stok'] ?>"
                                                                        name="stok">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="iduser">Deskripsi</label>
                                                            <textarea class="form-control" id="nama"
                                                                value="<?php echo $setpro['deskripsi'] ?>"
                                                                name="deskripsi"><?php echo $setpro['deskripsi'] ?></textarea>
                                                        </div>
                                                        <div
                                                            class="modal-footer border-top-0 d-flex justify-content-center">
                                                            <button type="submit" name="add"
                                                                class="btn btn-success">Tambahkan</button>
                                                        </div>
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
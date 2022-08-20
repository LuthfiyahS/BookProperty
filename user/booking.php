<?php
include "../userkomponen/header.php";
include "../koneksi.php";
//@session_start();
$id = $_GET['id'];

$tampil = "select * from booking";
$eksekusi = mysqli_query($test, "$tampil");
$bayar = "select * from marketing";
$eksekbayar = mysqli_query($test, "$bayar");

$unit = "select * from unit where id_unit = '$id'";
$eksekunit = mysqli_query($test, "$unit");
?>

<main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single">Booking Sekarang US</h1>
                        <span class="color-text-a">Isi data diri dan pilih agen terbaik kami.</span>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.php">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Booking
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section><!-- End Intro Single-->

    <!-- ======= Contact Single ======= -->
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-md-7">
                            <form action="booking-proses.php" method="post">
                                <div class="row">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xl-6 col-md-6">
                                                <label class="pb-2" for="iduser">Nama Lengkap</label>
                                                <input type="text" class="form-control" id="nama"
                                                    placeholder="Masukan Nama Lengkap" name="nama">
                                            </div>
                                            <div class="col-xl-6 col-xl-6">
                                                <label class="pb-2" for="iduser">Nomor Induk KTP</label>
                                                <input type="datepicker" class="form-control" id="nik"
                                                    placeholder="Masukan Nomor Induk" name="nik">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xl-6 col-md-6">
                                                <label class="pb-2" for="iduser">Tempat Lahir</label>
                                                <input type="text" class="form-control" id="nama"
                                                    placeholder="Masukan Tempat Lahir" name="tempatlahir">
                                            </div>
                                            <div class="col-xl-6 col-xl-6">
                                                <label class="pb-2" for="iduser">Tanggal Lahir</label>
                                                <input type="date" class="form-control" id="nama"
                                                    placeholder="Masukan Tanggal Lahir" name="tanggallahir">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="pb-2" for="iduser">Alamat</label>
                                        <textarea class="form-control" id="nama" placeholder="Masukan Alamat"
                                            name="alamat"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xl-6 col-md-6">
                                                <label class="pb-2" for="iduser">Jenis Kelamin</label>
                                                <select class="form-control form-select" title="Jenis Kelamin"
                                                    name="jeniskelamin">
                                                    <option value="-">Pilih Jenis Kelamin</option>
                                                    <option value="L">Laki laki</option>
                                                    <option value="P">Perempuan</option>
                                                </select>
                                            </div>
                                            <div class="col-xl-6 col-md-6">
                                                <label class="pb-2" for="iduser">Agama</label>
                                                <select class="form-control form-select" title="Agama" name="agama">
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
                                                <label class="pb-2" for="iduser">Pekerjaan</label>
                                                <input type="text" class="form-control" id="nama"
                                                    placeholder="Masukan Tempat Lahir" name="pekerjaan">
                                            </div>
                                            <div class="col-xl-6 col-xl-6">
                                                <label class="pb-2" for="iduser">Kewarganegaraan</label>
                                                <input type="datepicker" class="form-control" id="nama"
                                                    placeholder="Masukan Tanggal Lahir" name="kewarganegaraan">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xl-6 col-md-6">
                                                <label class="pb-2" for="iduser">Status Perkawinan</label>
                                                <select class="form-control form-select" title="Status"
                                                    name="status_perkawinan">
                                                    <option value="-" disabeled>Pilih Status</option>
                                                    <option value="Kawin">Kawin</option>
                                                    <option value="Belum Kawin">Belum Kawin</option>
                                                </select>
                                            </div>
                                            <div class="col-xl-6 col-xl-6">
                                                <label class="pb-2" for="iduser">Nama Marketing</label>
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
                                        <label class="pb-2" for="iduser">Nama Unit </label>
                                        <select class="form-control form-select" title="Country" name="unit" required>
                                            <?php while ($data3 = mysqli_fetch_array($eksekunit)) : ?>
                                            <option value="<?php echo $data3['id_unit'] ?>">
                                                <?php echo $data3['nama_unit']; ?></option>
                                            <?php endwhile; ?>
                                        </select>
                                    </div>

                                    <div class="col-md-12 text-center" style="margin-top:10px;">
                                        <button type="submit" class="btn btn-a">Booking NOW</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-5 section-md-t3">
                            <div class="icon-box section-b2">
                                <div class="icon-box-icon">
                                    <span class="bi bi-envelope"></span>
                                </div>
                                <div class="icon-box-content table-cell">
                                    <div class="icon-box-title">
                                        <h4 class="icon-title">Say Hello</h4>
                                    </div>
                                    <div class="icon-box-content">
                                        <p class="mb-1">Email.
                                            <span class="color-a">contact@example.com</span>
                                        </p>
                                        <p class="mb-1">Phone.
                                            <span class="color-a">+54 356 945234</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="icon-box section-b2">
                                <div class="icon-box-icon">
                                    <span class="bi bi-geo-alt"></span>
                                </div>
                                <div class="icon-box-content table-cell">
                                    <div class="icon-box-title">
                                        <h4 class="icon-title">Find us in</h4>
                                    </div>
                                    <div class="icon-box-content">
                                        <p class="mb-1">
                                            Manhattan, Nueva York 10036,
                                            <br> EE. UU.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="icon-box">
                                <div class="icon-box-icon">
                                    <span class="bi bi-share"></span>
                                </div>
                                <div class="icon-box-content table-cell">
                                    <div class="icon-box-title">
                                        <h4 class="icon-title">Social networks</h4>
                                    </div>
                                    <div class="icon-box-content">
                                        <div class="socials-footer">
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a href="#" class="link-one">
                                                        <i class="bi bi-facebook" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="link-one">
                                                        <i class="bi bi-twitter" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="link-one">
                                                        <i class="bi bi-instagram" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="link-one">
                                                        <i class="bi bi-linkedin" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Contact Single-->

</main><!-- End #main -->
<?php
  include "../userkomponen/footer.php";
?>
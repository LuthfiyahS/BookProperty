<?php
include "../userkomponen/header.php";
$id = $_SESSION['id_user'];
$tampil = "select * from booking where id_user = '$id'";
$user = mysqli_query($test, "$tampil");
$user2 = mysqli_query($test, "$tampil");

?>

  <main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Profil Akun</h1>
              <span class="color-text-a"><?php echo $_SESSION['nama'] ?></span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="index.php">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  <?php echo $_SESSION['nama'] ?>
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single -->

    <!-- ======= Agent Single ======= -->
    <section class="agent-single" id="profil">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="row">
              <div class="col-md-6">
                <div class="agent-avatar-box">
                    <?php if($_SESSION["pp"] == '../admin/inputan/localhost'){?>
                        <img src="../assets/img/default.jpg" alt="" class="img-a img-fluid" style="height:500px;">
                    <?php }else{ ?>
                        <img src="<?php echo $_SESSION["pp"]; ?>" alt="" class="img-a img-fluid" style="height:500px;">
                    <?php } ?>
                </div>
              </div>
              <div class="col-md-5 section-md-t3">
                <div class="agent-info-box">
                  <div class="agent-title">
                    <div class="title-box-d">
                      <h3 class="title-d"><?php echo $_SESSION['nama'] ?></h3>
                    </div>
                  </div>
                  <div class="agent-content mb-3">
                    <!-- <p class="content-d color-text-a">
                      Sed porttitor lectus nibh. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.
                      Vivamus suscipit tortor
                      eget felis porttitor volutpat. Vivamus suscipit tortor eget felis porttitor volutpat.
                    </p> -->
                    <div class="info-agents color-a">
                      <p>
                        <strong>Phone: </strong>
                        <span class="color-text-a"> <?php echo $_SESSION['hp'] ?> </span>
                      </p>
                      <p>
                        <strong>Email: </strong>
                        <span class="color-text-a"> <?php echo $_SESSION['email'] ?></span>
                      </p>
                      <p>
                        <strong>Tanggal Daftar: </strong>
                        <span class="color-text-a"> <?php echo $_SESSION['tgl'] ?></span>
                      </p>
                    </div>
                  </div>
                  <div class="socials-footer">
                    <ul class="list-inline">
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-facebook" aria-hidden="true"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12 section-t8" id="booking">
            <div class="title-box-d">
              <h3 class="title-d">Properti Saya</h3>
            </div>
          </div>
          <div class="row property-grid grid">
            <?php 
            $data = mysqli_fetch_array($user);
            if($data == null){
                echo "<h5 style='color:red;'>Tidak Ada Properti yang di beli</h5>";
            } else{
            while ($data2 = mysqli_fetch_array($user2) ) : 
                $detailbook = $data2['id_booking'];
                $detail = "SELECT * FROM unit JOIN detail_booking on unit.id_unit=detail_booking.id_unit WHERE id_booking ='$detailbook'";
                $dtl = mysqli_query($test, "$detail");
                $datadetl = mysqli_fetch_array($dtl);
                // $dtlunit = $dtl['id_unit'];
                // $det = "select * from unit where id_unit = '$dtlunit'";
                // $unit = mysqli_query($test, "$det");
            ?>

            <div class="col-md-4">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                <img src="../admin/inputan/<?php echo $datadetl["foto_unit"]; ?>" alt="" class="img-a img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="#"><?php echo $datadetl["nama_unit"]; ?></a>
                      </h2>
                    </div>
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                        <span class="price-a">Rp <?php echo number_format( $datadetl['harga'],0,',','.') ?></span>
                      </div>
                      <a href="cetak-invoice.php?id=<?php echo $data2['id_booking'] ?>" class="link-a">Lihat Detail INVOICE Booking
                        <span class="bi bi-chevron-right"></span>
                      </a>
                    </div>
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4 class="card-info-title">L.Tanah</h4>
                          <span><?php echo $datadetl["luas_tanah"]; ?>
                            <sup>2</sup>
                          </span>
                        </li>
                        <li>
                          <h4 class="card-info-title">K.Tidur</h4>
                          <span>2</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">K.Mandi</h4>
                          <span>1</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Carports</h4>
                          <span>1</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php endwhile;} ?>
            
          </div>
        </div>
      </div>
    </section><!-- End Agent Single -->

  </main><!-- End #main -->
  <?php
  include "../userkomponen/footer.php";
?>
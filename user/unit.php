<?php
include "../userkomponen/header.php";
$tampil = "select * from unit";
$unit = mysqli_query($test, "$tampil");
?>

  <main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Our Amazing Properties</h1>
              <span class="color-text-a">Grid Properties</span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Properties Grid
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= Property Grid ======= -->
    <section class="property-grid grid">
      <div class="container">
        <div class="row">
              <?php while ($data = mysqli_fetch_array($unit)) : ?>
          <div class="col-md-4">
            <div class="card-box-a card-shadow">
              <div class="img-box-a">
              <img src="<?php echo "../admin/inputan/" . $data["foto_unit"]; ?>" alt="" class="img-a img-fluid">
              </div>
              <div class="card-overlay">
                <div class="card-overlay-a-content">
                  <div class="card-header-a">
                    <h2 class="card-title-a">
                      <a href="#"><?php echo $data['nama_unit']; ?></a>
                    </h2>
                  </div>
                  <div class="card-body-a">
                    <div class="price-box d-flex">
                    <span class="price-a">Harga | Rp <?php echo number_format( $data['harga'],0,',','.') ?></span>
                    </div>
                    <a href="detail-unit.php?id=<?php echo $data['id_unit']; ?>" class="price-link-a">Booking Sekarang
                      <span class="bi bi-chevron-right"></span>
                    </a>
                  </div>
                  <div class="card-footer-a">
                    <ul class="card-info d-flex justify-content-around">
                    <li>
                          <h4 class="card-info-title">L.Tanah</h4>
                          <span><?php echo $data['luas_tanah']; ?>m
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
                          <h4 class="card-info-title">Carport</h4>
                          <span>1</span>
                        </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
              <?php endwhile; ?>
        </div>
      </div>
    </section><!-- End Property Grid Single-->

  </main><!-- End #main -->
  <?php
  include "../userkomponen/footer.php";
?>
<?php
include "../userkomponen/header.php";

$id = $_GET['id'];

$row = mysqli_query($test,"SELECT * FROM unit WHERE id_unit = '$id'");
$isi = mysqli_fetch_assoc($row);
?>

  <main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single"><?php echo $isi["nama_unit"]; ?></h1>
              <span class="color-text-a"><?php echo $isi["id_unit"]; ?></span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item">
                  <a href="property-grid.html">Properti</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  <?php echo $isi["nama_unit"]; ?>
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= Property Single ======= -->
    <section class="property-single nav-arrow-b">
      <div class="container">

        <div class="row">
          <div class="col-sm-12">

            <div class="row justify-content-between">
              <div class="col-md-5 col-lg-4">
                <div class="property-price d-flex justify-content-center foo">
                  <div class="card-header-c d-flex">
                    <div class="card-box-ico">
                      <span class="bi bi-cash">Rp</span>
                    </div>
                    <div class="card-title-c align-self-center">
                      <h6 class="title-c"><?php echo number_format( $isi['harga'],0,',','.') ?></h6>
                    </div>
                  </div>
                </div>
                <div class="property-summary">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="title-box-d section-t4">
                        <h3 class="title-d">Detail Properti</h3>
                      </div>
                    </div>
                  </div>
                  <div class="summary-list">
                    <ul class="list">
                      <li class="d-flex justify-content-between">
                        <strong>Property ID:</strong>
                        <span><?php echo $isi["id_unit"]; ?></span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Lokasi:</strong>
                        <span> Jl. Alternative Bukit Indah <br> - Purwakarta, Cigelam, <br> 41151</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Type Properti:</strong>
                        <span>House</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Status:</strong>
                        <span>Sale</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Luas Tanah:</strong>
                        <span><?php echo $isi["luas_tanah"]; ?>m
                          <sup>2</sup>
                        </span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Kamar Tidur:</strong>
                        <span>2</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Kamar Mandi:</strong>
                        <span>1</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Carport:</strong>
                        <span>1</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-7 col-lg-7 section-md-t3">
              <div class="amenities-list color-text-a">
                  <div id="property-single-carousel" class="swiper">
              <div class="swiper-wrapper">
                <div class="carousel-item-b swiper-slide">
                <img src="../admin/inputan/<?php echo $isi["foto_unit"]; ?>" alt="" class="img-a img-fluid">
                </div>
                <!-- <div class="carousel-item-b swiper-slide">
                  <img src="assets/img/slide-2.jpg" alt="">
                </div> -->
              </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="title-box-d">
                      <h3 class="title-d">Property Description</h3>
                    </div>
                  </div>
                </div>
                <div class="property-description">
                  <p class="description color-text-a">
                  Perumahan Islami Purwakarta, Dibalut Dengan Kawasan Hijau Yang Sejuk, Nyaman, dan Menenangkan
                  </p>
                </div>
            </div>
            <div class="property-single-carousel-pagination carousel-pagination"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12 text-center">
          <a href="booking.php?id=<?php echo $isi['id_unit'];?>"><button type="button" class="btn btn-b">Booking Sekarang</button></a>
          </div>
          
          <!-- <div class="col-md-12">
            <div class="row section-t3">
              <div class="col-sm-12">
                <div class="title-box-d">
                  <h3 class="title-d">Contact Agent</h3>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-lg-4">
                <img src="assets/img/agent-4.jpg" alt="" class="img-fluid">
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="property-agent">
                  <h4 class="title-agent">Anabella Geller</h4>
                  <p class="color-text-a">
                    Nulla porttitor accumsan tincidunt. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet
                    dui. Quisque velit nisi,
                    pretium ut lacinia in, elementum id enim.
                  </p>
                  <ul class="list-unstyled">
                    <li class="d-flex justify-content-between">
                      <strong>Phone:</strong>
                      <span class="color-text-a">(222) 4568932</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Mobile:</strong>
                      <span class="color-text-a">777 287 378 737</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Email:</strong>
                      <span class="color-text-a">annabella@example.com</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Skype:</strong>
                      <span class="color-text-a">Annabela.ge</span>
                    </li>
                  </ul>
                  <div class="socials-a">
                    <ul class="list-inline">
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="bi bi-facebook" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="bi bi-twitter" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="bi bi-instagram" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="bi bi-linkedin" aria-hidden="true"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-12 col-lg-4">
                <div class="property-contact">
                  <form class="form-a">
                    <div class="row">
                      <div class="col-md-12 mb-1">
                        <div class="form-group">
                          <input type="text" class="form-control form-control-lg form-control-a" id="inputName" placeholder="Name *" required>
                        </div>
                      </div>
                      <div class="col-md-12 mb-1">
                        <div class="form-group">
                          <input type="email" class="form-control form-control-lg form-control-a" id="inputEmail1" placeholder="Email *" required>
                        </div>
                      </div>
                      <div class="col-md-12 mb-1">
                        <div class="form-group">
                          <textarea id="textMessage" class="form-control" placeholder="Comment *" name="message" cols="45" rows="8" required></textarea>
                        </div>
                      </div>
                      <div class="col-md-12 mt-3">
                        <button type="submit" class="btn btn-a">Send Message</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </section><!-- End Property Single-->

  </main><!-- End #main -->

  <?php
  include "../userkomponen/footer.php";
?>
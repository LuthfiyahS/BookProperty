<?php
include "../userkomponen/header.php";
$tampil = "select * from unit  limit 6";
$unit = mysqli_query($test, "$tampil");


$tampil = "select * from marketing limit 3";
$marketer = mysqli_query($test, "$tampil");
?>

  <!-- ======= Intro Section ======= -->
  <div class="intro intro-carousel swiper position-relative">

    <div class="swiper-wrapper">

      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(../assets/img/Sukamanah-Islamic-Village.png)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <!-- <p class="intro-title-top">Doral, Florida
                      <br> 78345
                    </p>
                    <h1 class="intro-title mb-4 ">
                      <span class="color-b">204 </span> Mount
                      <br> Olive Road Two
                    </h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">rent | $ 12.000</span></a>
                    </p> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(../assets/img/slide-2.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">Sukamanah 
                      <br> Islamic Village
                    </p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b">1st </span> Hunian
                      <br> Islami Terbaik
                    </h1>
                    <p class="intro-subtitle intro-price">
                    <?php if (!isset($_SESSION['nama'])) {  ?>
                      <a href="../login.php"><button type="button" class="btn btn-b">Booking Sekarang</button></a>
                      <?php } else { ?>
                        <a href="unit.php"><span class="price-a">Booking Sekarang</span></a>
                        <?php } ?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div><!-- End Intro Section -->

  <main id="main">

    
    <!-- ======= Latest Properties Section ======= -->
    <section class="section-property section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Properti Terbaik Kami</h2>
              </div>
              <div class="title-link">
                <a href="unit.php">Semua Properti
                  <span class="bi bi-chevron-right"></span>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div id="property-carousel" class="swiper">
          <div class="swiper-wrapper">

          <?php while ($data = mysqli_fetch_array($unit)) : ?>
            <div class="carousel-item-b swiper-slide">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="<?php echo "../admin/inputan/" . $data["foto_unit"]; ?>" alt="" class="img-a img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="detail-unit.php?id=<?php echo $data['id_unit']; ?>"><?php echo $data['nama_unit']; ?></a>
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
            </div><!-- End carousel item -->
            <?php endwhile; ?>
          </div>
        </div>
        <div class="propery-carousel-pagination carousel-pagination"></div>

      </div>
    </section><!-- End Latest Properties Section -->

    <!-- ======= Services Section ======= -->
    <section class="section-services section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Fasilitas Terbaik</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                  <span> <img src="../assets/img/Pesantren-Sukamanah-Islamic-Village.png" alt="" width="75px"></span>
                </div>
                <div class="card-title-c align-self-center">
                  <h3 class="title-c">Pesantren MBI</h2>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                <span> <img src="../assets/img/Gate-Sukamanah-Islamic-Village.png" alt="" width="75px"></span>
                </div>
                <div class="card-title-c align-self-center">
                  <h3 class="title-c">One Gate System</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                <span> <img src="../assets/img/Masjid-Sukamanah-Islamic-Village.png" alt="" width="75px"></span>
                </div>
                <div class="card-title-c align-self-center">
                  <h3 class="title-c">Masjid Besar</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                  <span> <img src="../assets/img/panahan-Sukamanah-Islamic-Village.png" alt="" width="75px"></span>
                </div>
                <div class="card-title-c align-self-center">
                  <h3 class="title-c">Area Memanah</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                <span> <img src="../assets/img/Playground-Sukamanah-Islamic-Village.png" alt="" width="75px"></span>
                </div>
                <div class="card-title-c align-self-center">
                  <h3 class="title-c">Playground</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                <span> <img src="../assets/img/lapangan-Sukamanah-Islamic-Village.png" alt="" width="75px"></span>
                </div>
                <div class="card-title-c align-self-center">
                  <h3 class="title-c">Mini SportCenter</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                  <span> <img src="../assets/img/Food-Court-Sukamanah-Islamic-Village.png" alt="" width="75px"></span>
                </div>
                <div class="card-title-c align-self-center">
                  <h3 class="title-c"> Food Court</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                <span> <img src="../assets/img/jogging-Sukamanah-Islamic-Village.png" alt="" width="75px"></span>
                </div>
                <div class="card-title-c align-self-center">
                  <h3 class="title-c">Jogging Track</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                <span> <img src="../assets/img/Stable-Sukamanah-Islamic-Village.png" alt="" width="75px"></span>
                </div>
                <div class="card-title-c align-self-center">
                  <h3 class="title-c">Area Berkuda</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->


    <!-- ======= Agents Section ======= -->
    <section class="section-agents section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Best Agents</h2>
              </div>
              <div class="title-link">
                <a href="agen.php">All Agents
                  <span class="bi bi-chevron-right"></span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
        <?php while ($data = mysqli_fetch_array($marketer)) : ?>
          <div class="col-md-4">
            <div class="card-box-d">
              <div class="card-img-d">
              <img src="<?php echo "../admin/inputan/" . $data["foto_agen"]; ?>" alt="" class="img-a img-fluid" style="height:500px;">
              </div>
              <div class="card-overlay card-overlay-hover">
                <div class="card-header-d">
                  <div class="card-title-d align-self-center">
                    <h3 class="title-d">
                    <a href="detail-agen.php?id=<?php echo $data['id_marketing']; ?>" class="link-two"><?php echo $data['nama_marketing']; ?></a>
                    </h3>
                  </div>
                </div>
                <div class="card-body-d">
                  <div class="info-agents color-a">
                    <p>
                      <strong>Phone: </strong> <?php echo $data['telpon_marketing']; ?>
                    </p>
                    <p>
                      <strong>Email: </strong> <?php echo $data['email_marketing']; ?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
        </div>
      </div>
    </section><!-- End Agents Section -->

    <!-- ======= Testimonials Section ======= -->
    <section class="section-testimonials section-t8 nav-arrow-a">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Testimonials</h2>
              </div>
            </div>
          </div>
        </div>

        <div id="testimonial-carousel" class="swiper">
          <div class="swiper-wrapper">

            <div class="carousel-item-a swiper-slide">
              <div class="testimonials-box">
                <div class="row">
                  <div class="col-sm-12 col-md-6">
                    <div class="testimonial-img">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/EGsA3XIXTRk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-6">
                    <div class="testimonial-ico">
                      <i class="bi bi-chat-quote-fill"></i>
                    </div>
                    <div class="testimonials-content">
                      <p class="testimonial-text">
                        Insyaallah dengan lingkungan yang islami akan terbentuk perilaku yang islami.
                      </p>
                    </div>
                    <div class="testimonial-author-box">
                      <img src="../assets/img/default.jpg" alt="" class="testimonial-avatar">
                      <h5 class="testimonial-author">Bapak Ardian</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

            <div class="carousel-item-a swiper-slide">
              <div class="testimonials-box">
                <div class="row">
                  <div class="col-sm-12 col-md-6">
                    <div class="testimonial-img">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/yJ3ll3Oz_4o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-6">
                    <div class="testimonial-ico">
                      <i class="bi bi-chat-quote-fill"></i>
                    </div>
                    <div class="testimonials-content">
                      <p class="testimonial-text">
                        Konsep dan fasilitas islami bikin kami jatuh hati.
                      </p>
                    </div>
                    <div class="testimonial-author-box">
                    <img src="../assets/img/default.jpg" alt="" class="testimonial-avatar">
                      <h5 class="testimonial-author">Ibu Vita Mulya & Ibu Ade Irvi</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

          </div>
        </div>
        <div class="testimonial-carousel-pagination carousel-pagination"></div>

      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->

<?php
  include "../userkomponen/footer.php";
?>
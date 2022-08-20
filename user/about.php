<?php
include "../userkomponen/header.php";
$tampil = "select * from marketing";
$marketer = mysqli_query($test, "$tampil");
?>

  <main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Rumah Keluarga Muslim Masa Kini</h1>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Tentang Kami
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= About Section ======= -->
    <section class="section-about">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 position-relative">
            <div class="about-img-box">
              <img src="../assets/img/perumahan2.jpeg" alt="" class="img-fluid">
            </div>
            <div class="sinse-box">
              <h3 class="sinse-title">Sukamanah Islamic 
                <span></span>
                <br> Village
              </h3>
              <p>Islamic & Muslim</p>
            </div>
          </div>
          <div class="col-md-12 section-t8 position-relative">
            <div class="row">
              <div class="col-md-6 col-lg-5">
                <img src="../assets/img/property-10.jpg" alt="" class="img-fluid">
              </div>
              <div class="col-lg-2  d-none d-lg-block position-relative">
                <div class="title-vertical d-flex justify-content-start">
                  <span>Sukamanah Islamic Village</span>
                </div>
              </div>
              <div class="col-md-6 col-lg-5 section-md-t3">
                <div class="title-box-d">
                  <h3 class="title-d">Perumahan  
                    <span class="color-d">Islami</span> 
                    <br> Purwakarta
                  </h3>
                </div>
                <p class="color-text-a">
                Sukamanah Islamic Village merupakan salah satu persembahan PT. SHARIA GREEN LAND, dengan luas lahan 7,7 hektar, dan dengan konsep HUNIAN ISLAMI TERINTEGRASI, bertujuan membangun masyarakat yang Islami.Dilengkapi dengan beragam fasilitas yang dapat membantu menumbuhkan ketaatan dan kecintaan terhadap Islam yang damai dan penuh kasih sayang.
                </p>
                <p class="color-text-a">
                Kawasan Islami Yang Terjaga. Memberikan Kenyamanan Bagi Seluruh Anggota Keluarga. Saatnya rumah Anda menjadi bagian dari terbangunnya peradaban Islami. Hunian Islami Terintegrasi, Sukamanah Islamic Village, berusaha mewujudkan kesalehan kolektif yang terbangun antar tiap penghuni. Menciptakan lingkungan menyenangkan dan menenangkan, serta kondusif bagi tumbuh kembang buah hati tercinta.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- =======Team Section ======= -->
    <section class="section-agents section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Temui Tim Kami</h2>
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
    </section><!-- End About Section-->

  </main><!-- End #main -->

  <?php
  include "../userkomponen/footer.php";
?>
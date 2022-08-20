<?php
include "../userkomponen/header.php";
$tampil = "select * from marketing";
$marketer = mysqli_query($test, "$tampil");
?>

  <main id="main">
    <!-- =======Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Agen Terbaik Kami</h1>
              <span class="color-text-a">untuk properti terbaik anda</span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Agen
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= Agents Grid ======= -->
    <section class="agents-grid grid">
      <div class="container">
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
    </section><!-- End Agents Grid-->

  </main><!-- End #main -->
  
  <?php
  include "../userkomponen/footer.php";
?>
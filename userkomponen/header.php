<?php

@session_start();
include "../koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sukamanah Islamic Village</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/Logo SIV.png" rel="icon">
  <link href="../assets/img/Logo SIV.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: EstateAgency - v4.8.0
  * Template URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Property Search Section ======= -->
  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <div class="box-collapse">
    <div class="title-box-d">
      <h4 class="title-d">Sukamanah <br> Islamic  Village</h4>
    </div>
    <span class="close-box-collapse right-boxed bi bi-x"></span>
    <div class="box-collapse-wrap form">
      <br><br>
      <?php if (!isset($_SESSION['nama'])) {  ?>
      <h6>Kawasan Islami Yang Terjaga</h6>
      <p>Saatnya rumah Anda menjadi bagian dari terbangunnya peradaban Islami. Hunian Islami Terintegrasi, Sukamanah Islamic Village, berusaha mewujudkan kesalehan kolektif yang terbangun antar tiap penghuni. Menciptakan lingkungan menyenangkan dan menenangkan, serta kondusif bagi tumbuh kembang buah hati tercinta.</p>
      <a href="../login.php"><button type="button" class="btn btn-b">Login</button></a>
      <a href="../register.php"><button type="button" class="btn btn-b-n">Register</button></a>
      <?php } else { ?>
      <h6>Hallo, <?php echo $_SESSION['nama'];?> </h6>
      <p>Saatnya rumah Anda menjadi bagian dari terbangunnya peradaban Islami. Bersama kami.</p> <br>
      <p class="intro-subtitle intro-price">
      <a href="profil.php#profil"><span class="price-b"> <i class="bi bi-person-rolodex"></i> | Profil</span></a>
        </p>
        <p class="intro-subtitle intro-price">
      <a href="profil.php#booking"><span class="price-b"> <i class="bi bi-list-columns-reverse"></i> | Booking</span></a>
        </p>
      <a href="../logout.php"><button type="button" class="btn btn-b-n">Log Out</button></a>


      <?php } ?>
    </div>
  </div><!-- End Property Search Section -->>

  <!-- ======= Header/Navbar ======= -->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.html"><span class="logo-sm">
                                <img src="../assets/img/Logo SIV.png" alt="" height="35">
                            </span><span class="color-b">Sukamanah</span></a>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        
<?php
function active($currect_page){
  $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
  $url = end($url_array);  
  if($currect_page == $url){
      echo 'active'; //class name in css 
  } 
}
?>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link <?php active('index.php');?>" href="index.php">Beranda</a>
          </li>

          <li class="nav-item">
            <a class="nav-link <?php active('about.php');?>" href="about.php">Tentang Kami</a>
          </li>

          <li class="nav-item">
            <a class="nav-link <?php active('unit.php');?>" href="unit.php">Type Rumah</a>
          </li>

          <li class="nav-item">
            <a class="nav-link <?php active('agen.php');?>" href="agen.php">Agen</a>
          </li>
        </ul>
      </div>

      <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01">
      <?php if (!isset($_SESSION['nama'])) {  ?>
        <i class="bi bi-menu-app"></i>    
      <?php    } else { ?>
        <i class="bi bi-person-fill"></i>
      <?php    }?>
      </button>

    </div>
  </nav><!-- End Header/Navbar -->

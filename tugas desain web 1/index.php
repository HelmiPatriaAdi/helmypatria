<!DOCTYPE html>
<html lang="en">
<head>
<title>Nice Transport</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/slider.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300' rel='stylesheet' type='text/css'>
<script src="js/jquery-1.7.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/tms-0.4.1.js"></script>
<script>
$(document).ready(function () {
    $('.slider')._TMS({
        show: 0,
        pauseOnHover: true,
        prevBu: '.prev',
        nextBu: '.next',
        playBu: false,
        duration: 500,
        preset: 'fade',
        pagination: true, //'.pagination',true,'<ul></ul>'
        pagNums: false,
        slideshow: 8000,
        numStatus: false,
        banners: 'fromBottom', // fromLeft, fromRight, fromTop, fromBottom
        waitBannerAnimation: false,
        progressBar: false
    })
})
$(function () {
    if ($(window).width() <= 1066) {
        $("#slider .prev").css("left", "55px")
        $("#slider .next").css("right", "55px")
    }
})
</script>
<!--[if lt IE 9]>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/html5.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
<![endif]-->
</head>
<body>
<div class="bg">
  <header>
    <div class="main wrap">
      <h1><a href="index.php"><img src="images/logo2.png" alt=""></a></h1>
      <p>55284 Sinduadi, Sleman<span>089691014184</span></p>
    </div>
    <nav>
      <ul class="menu">
        <li class="current"><a href="index.php" class="home"><img src="images/home.jpg" alt=""></a></li>
        <li><a href="profil.php">Profil</a></li>
        <li><a href="syarat.php">Syarat & Ketentuan</a></li>
        <li><a href="daftarharga.php">Daftar Harga</a></li>
        <li class="current"><a href="contactus.php">Contact</a></li>

      </ul>
      <div class="clear"></div>
    </nav>
  </header>
  <div id="slider">
    <div class="slider-block">
      <div class="slider">
        <ul class="items">
          <li><img src="images/elf.jpg" alt="">
            <div class="banner">
              <div><span>Isuzu</span><strong>Elf</strong>
                <p>Kelebihan : memuat banyak penumpang, tenaga mesin dieselnya yg hebat, power steering & ada turbo intercooler, suspensinya bagus, pandangan luas ke depan, lebar bodi kecil, enak buat take offer+manuver</p>
              </div>
            </div>
          </li>
          <li><img src="images/avansa.jpg" alt="">
            <div class="banner">
              <div><span>Toyota</span><strong>Avanza</strong>
                <p>kelebihan : Fitur dan Kenyamanan, Muat lebih banyak penumpang, Harga sewa sangat terjangkau, Hemat bahan bakar, Memiliki Design Yang Baik, nyaman</p>
             </div>
            </div>
          </li>
          <li><img src="images/granmax.jpg" alt="">
            <div class="banner">
              <div><span>Dhaihatsu</span><strong>Granmax Pick Up</strong>
                <p>ukurannya yang besar dan lapang, mobil ini juga mampu tahan terhadap banjir, mesin 1.3 DOHC & 1.5 DOHC VVT-I yang irit bertenaga dan ramah lingkungan, mampu mengangkut berbagai macam barang</p>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <a href="#" class="prev"></a> <a href="#" class="next"></a> </div>
  </div>
  <section id="content">
    <div class="block-1 box-1">
      <div> <img src="images/livina.jpg" alt="">
        <p class="text-1">Nissan <strong>Grand Livina</strong></p>
      </div>
      <div> <img src="images/jazz.jpg" alt="">
        <p class="text-1">Honda<strong>Jazz</strong></p>
      </div>
      <div> <img src="images/apv.jpg" alt="">
        <p class="text-1">Suzuki<strong>Apv</strong></p>
      </div>
      <div class="last"> <img src="images/inova.jpg" alt="">
		  <p class="text-1">Toyota<strong>Kijang Inova</strong></p>
      </div>
    </div>
    <div class="block-2 wrap pad-2">
    </div>
  </section>
  <footer>Nice Transport | 5140411247 | Design by: Helmi Patria Adi</footer>
</div>
</body>
</html>
<?php
session_start(); 
if ( !isset($_SESSION['kullaniciadi']) && !isset($_SESSION['sifre']) ) {
	header("Location: index.html?error=Kullanıcı adı veya şifre yanlış");
}
?>

<html>
<head>
<title>Online OtoAnaliz Sistemi</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
</head>
<body>

<nav class="w3-sidebar w3-black w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>Online OtoAnaliz<br>Sistemi</b><br>
	Hoşgeldin <?php echo $_SESSION["kullaniciadi"]; ?></h3>
  </div>
  <div class="w3-bar-block">
	<a href="#nisan_2020" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Nisan 2020</a>
	<a href="#mayis_2020" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Mayıs 2020</a>
	<a href="#haziran_2020" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Haziran 2020</a>
	<a href="#temmuz_2020" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Temmuz 2020</a>
	<a href="#agustos_2020" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Ağustos 2020</a>
	<a href="#eylul_2020" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Eylül 2020</a>
	<a href="#ekim_2020" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Ekim 2020</a>
	<a href="#kasim_2020" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Kasım 2020</a>
	<a href="#aralik_2020" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Aralık 2020</a>
	<a href="#ocak_2021" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Ocak 2021</a>
	<a href="#subat_2021" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Şubat 2021</a>
	<a href="#mart_2021" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Mart 2021</a>
	<a href="#nisan_2021" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Nisan 2021</a>
	<a href="#mayis_2021" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Mayıs 2021</a>
	<a href="#haziran_2021" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Haziran 2021</a>
	<a href="#temmuz_2021" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Temmuz 2021</a>
	<a href="#agustos_2021" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Ağustos 2021</a>
	<a href="#eylul_2021" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Eylül 2021</a>
	<a href="#ekim_2021" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Ekim 2021</a>
	<a href="#kasim_2021" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Kasım 2021</a>
	<a href="#aralik_2021" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Aralık 2021</a>
	<a href="#ocak_2022" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Ocak 2022</a>
	<a href="#subat_2022" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Şubat 2022</a>
	<a href="#mart_2022" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Mart 2022</a>
	<a href="#nisan_2022" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Nisan 2022</a>
	<a href="#mayis_2022" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Mayıs 2022</a>
	<a href="#haziran_2022" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Haziran 2022</a>
	<a href="#temmuz_2022" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Temmuz 2022</a>
	<a href="#agustos_2022" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Ağustos 2022</a>
	<a href="#eylul_2022" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Eylül 2022</a>
	<a href="#ekim_2022" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Ekim 2022</a>
	<a href="#kasim_2022" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Kasım 2022</a>
	<a href="#aralik_2022" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Aralık 2022</a>
	<a href="#cikisyap" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Çıkış Yap</a>
  </div>
</nav>

<header class="w3-container w3-top w3-hide-large w3-black w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-black w3-margin-right" onclick="w3_open()">☰</a>
  <span>Online OtoAnaliz Sistemi</span>
</header>

<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b>ONLINE OTOANALİZ SİSTEMİ</b></h1>
	<img src="logo.jpg" class="img-responsive img-circle margin" style="display:inline" alt="Sistem_Logosu" width="500" height="500">
    <br><br>
	
  <div class="w3-container" id="nisan_2020" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-black"><b>Nisan 2020</b></h1>
    <hr style="width:50px;border:5px solid black" class="w3-round">
	<form method="post" action="aracverileri1.php">
	<header class="w3-container w3-black w3-center" style="padding:128px 16px">
	<h2>Araç Verilerine Erişmek İçin Tıklayınız</h2>
	<form action="/aracverileri1.php">
  <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Giriş</button>
  </header>
  </form>
  </div>
  
  <div class="w3-container" id="mayis_2020" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-black"><b>Mayıs 2020</b></h1>
    <hr style="width:50px;border:5px solid black" class="w3-round">
	<form method="post" action="aracverileri2.php">
	<header class="w3-container w3-black w3-center" style="padding:128px 16px">
	<h2>Araç Verilerine Erişmek İçin Tıklayınız</h2>
	<form action="/aracverileri2.php">
  <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Giriş</button>
  </header>
  </form>
  </div>
  
  <div class="w3-container" id="haziran_2020" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-black"><b>Haziran 2020</b></h1>
    <hr style="width:50px;border:5px solid black" class="w3-round">
	<form method="post" action="aracverileri3.php">
	<header class="w3-container w3-black w3-center" style="padding:128px 16px">
	<h2>Araç Verilerine Erişmek İçin Tıklayınız</h2>
	<form action="/aracverileri3.php">
  <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Giriş</button>
  </header>
  </form>
  </div>
  
  <div class="w3-container" id="temmuz_2020" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-black"><b>Temmuz 2020</b></h1>
    <hr style="width:50px;border:5px solid black" class="w3-round">
	<form method="post" action="aracverileri4.php">
	<header class="w3-container w3-black w3-center" style="padding:128px 16px">
	<h2>Araç Verilerine Erişmek İçin Tıklayınız</h2>
	<form action="/aracverileri4.php">
  <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Giriş</button>
  </header>
  </form>
  </div>
  
  <div class="w3-container" id="agustos_2020" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-black"><b>Ağustos 2020</b></h1>
    <hr style="width:50px;border:5px solid black" class="w3-round">
	<form method="post" action="aracverileri5.php">
	<header class="w3-container w3-black w3-center" style="padding:128px 16px">
	<h2>Araç Verilerine Erişmek İçin Tıklayınız</h2>
	<form action="/aracverileri5.php">
  <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Giriş</button>
  </header>
  </form>
  </div>
  
  <div class="w3-container" id="eylul_2020" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-black"><b>Eylül 2020</b></h1>
    <hr style="width:50px;border:5px solid black" class="w3-round">
	<form method="post" action="aracverileri6.php">
	<header class="w3-container w3-black w3-center" style="padding:128px 16px">
	<h2>Araç Verilerine Erişmek İçin Tıklayınız</h2>
	<form action="/aracverileri6.php">
  <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Giriş</button>
  </header>
  </form>
  </div>
  
  <div class="w3-container" id="ekim_2020" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-black"><b>Ekim 2020</b></h1>
    <hr style="width:50px;border:5px solid black" class="w3-round">
	<form method="post" action="aracverileri7.php">
	<header class="w3-container w3-black w3-center" style="padding:128px 16px">
	<h2>Araç Verilerine Erişmek İçin Tıklayınız</h2>
	<form action="/aracverileri7.php">
  <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Giriş</button>
  </header>
  </form>
  </div>
  
  <div class="w3-container" id="kasim_2020" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-black"><b>Kasım 2020</b></h1>
    <hr style="width:50px;border:5px solid black" class="w3-round">
	<form method="post" action="aracverileri8.php">
	<header class="w3-container w3-black w3-center" style="padding:128px 16px">
	<h2>Araç Verilerine Erişmek İçin Tıklayınız</h2>
	<form action="/aracverileri8.php">
  <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Giriş</button>
  </header>
  </form>
  </div>
  
  <div class="w3-container" id="aralik_2020" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-black"><b>Aralık 2020</b></h1>
    <hr style="width:50px;border:5px solid black" class="w3-round">
	<form method="post" action="aracverileri9.php">
	<header class="w3-container w3-black w3-center" style="padding:128px 16px">
	<h2>Araç Verilerine Erişmek İçin Tıklayınız</h2>
	<form action="/aracverileri9.php">
  <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Giriş</button>
  </header>
  </form>
  </div>
  
  <div class="w3-container" id="ocak_2021" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-black"><b>Ocak 2021</b></h1>
    <hr style="width:50px;border:5px solid black" class="w3-round">
	<form method="post" action="aracverileri10.php">
	<header class="w3-container w3-black w3-center" style="padding:128px 16px">
	<h2>Araç Verilerine Erişmek İçin Tıklayınız</h2>
	<form action="/aracverileri10.php">
  <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Giriş</button>
  </header>
  </form>
  </div>
  
  <div class="w3-container" id="subat_2021" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-black"><b>Şubat 2021</b></h1>
    <hr style="width:50px;border:5px solid black" class="w3-round">
	<form method="post" action="aracverileri11.php">
	<header class="w3-container w3-black w3-center" style="padding:128px 16px">
	<h2>Araç Verilerine Erişmek İçin Tıklayınız</h2>
	<form action="/aracverileri11.php">
  <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Giriş</button>
  </header>
  </form>
  </div>
  
  <div class="w3-container" id="mart_2021" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-black"><b>Mart 2021</b></h1>
    <hr style="width:50px;border:5px solid black" class="w3-round">
	<form method="post" action="aracverileri12.php">
	<header class="w3-container w3-black w3-center" style="padding:128px 16px">
	<h2>Araç Verilerine Erişmek İçin Tıklayınız</h2>
	<form action="/aracverileri12.php">
  <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Giriş</button>
  </header>
  </form>
  </div>
  
  <div class="w3-container" id="nisan_2021" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-black"><b>Nisan 2021</b></h1>
    <hr style="width:50px;border:5px solid black" class="w3-round">
	<form method="post" action="aracverileri13.php">
	<header class="w3-container w3-black w3-center" style="padding:128px 16px">
	<h2>Araç Verilerine Erişmek İçin Tıklayınız</h2>
	<form action="/aracverileri13.php">
  <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Giriş</button>
  </header>
  </form>
  </div>
  
  <div class="w3-container" id="mayis_2021" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-black"><b>Mayıs 2021</b></h1>
    <hr style="width:50px;border:5px solid black" class="w3-round">
	<form method="post" action="aracverileri14.php">
	<header class="w3-container w3-black w3-center" style="padding:128px 16px">
	<h2>Araç Verilerine Erişmek İçin Tıklayınız</h2>
	<form action="/aracverileri14.php">
  <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Giriş</button>
  </header>
  </form>
  </div>
  
  <div class="w3-container" id="haziran_2021" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-black"><b>Haziran 2021</b></h1>
    <hr style="width:50px;border:5px solid black" class="w3-round">
	<form method="post" action="aracverileri15.php">
	<header class="w3-container w3-black w3-center" style="padding:128px 16px">
	<h2>Araç Verilerine Erişmek İçin Tıklayınız</h2>
	<form action="/aracverileri15.php">
  <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Giriş</button>
  </header>
  </form>
  </div>
  
  <div class="w3-container" id="temmuz_2021" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-black"><b>Temmuz 2021</b></h1>
    <hr style="width:50px;border:5px solid black" class="w3-round">
	<form method="post" action="aracverileri16.php">
	<header class="w3-container w3-black w3-center" style="padding:128px 16px">
	<h2>Araç Verilerine Erişmek İçin Tıklayınız</h2>
	<form action="/aracverileri16.php">
  <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Giriş</button>
  </header>
  </form>
  </div>
  
  <div class="w3-container" id="agustos_2021" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-black"><b>Ağustos 2021</b></h1>
    <hr style="width:50px;border:5px solid black" class="w3-round">
	<form method="post" action="aracverileri17.php">
	<header class="w3-container w3-black w3-center" style="padding:128px 16px">
	<h2>Araç Verilerine Erişmek İçin Tıklayınız</h2>
	<form action="/aracverileri17.php">
  <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Giriş</button>
  </header>
  </form>
  </div>
  
  <div class="w3-container" id="eylul_2021" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-black"><b>Eylül 2021</b></h1>
    <hr style="width:50px;border:5px solid black" class="w3-round">
	<form method="post" action="aracverileri18.php">
	<header class="w3-container w3-black w3-center" style="padding:128px 16px">
	<h2>Araç Verilerine Erişmek İçin Tıklayınız</h2>
	<form action="/aracverileri18.php">
  <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Giriş</button>
  </header>
  </form>
  </div>
  
  <div class="w3-container" id="ekim_2021" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-black"><b>Ekim 2021</b></h1>
    <hr style="width:50px;border:5px solid black" class="w3-round">
	<form method="post" action="aracverileri19.php">
	<header class="w3-container w3-black w3-center" style="padding:128px 16px">
	<h2>Araç Verilerine Erişmek İçin Tıklayınız</h2>
	<form action="/aracverileri19.php">
  <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Giriş</button>
  </header>
  </form>
  </div>
  
  <div class="w3-container" id="kasim_2021" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-black"><b>Kasım 2021</b></h1>
    <hr style="width:50px;border:5px solid black" class="w3-round">
	<form method="post" action="aracverileri20.php">
	<header class="w3-container w3-black w3-center" style="padding:128px 16px">
	<h2>Araç Verilerine Erişmek İçin Tıklayınız</h2>
	<form action="/aracverileri20.php">
  <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Giriş</button>
  </header>
  </form>
  </div>
  
  <div class="w3-container" id="aralik_2021" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-black"><b>Aralık 2021</b></h1>
    <hr style="width:50px;border:5px solid black" class="w3-round">
	<form method="post" action="aracverileri21.php">
	<header class="w3-container w3-black w3-center" style="padding:128px 16px">
	<h2>Araç Verilerine Erişmek İçin Tıklayınız</h2>
	<form action="/aracverileri21.php">
  <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Giriş</button>
  </header>
  </form>
  </div>
  
  <div class="w3-container" id="ocak_2022" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-black"><b>Ocak 2022</b></h1>
    <hr style="width:50px;border:5px solid black" class="w3-round">
	<form method="post" action="aracverileri22.php">
	<header class="w3-container w3-black w3-center" style="padding:128px 16px">
	<h2>Araç Verilerine Erişmek İçin Tıklayınız</h2>
	<form action="/aracverileri22.php">
  <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Giriş</button>
  </header>
  </form>
  </div>
  
  <div class="w3-container" id="subat_2022" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-black"><b>Şubat 2022</b></h1>
    <hr style="width:50px;border:5px solid black" class="w3-round">
	<form method="post" action="aracverileri23.php">
	<header class="w3-container w3-black w3-center" style="padding:128px 16px">
	<h2>Araç Verilerine Erişmek İçin Tıklayınız</h2>
	<form action="/aracverileri23.php">
  <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Giriş</button>
  </header>
  </form>
  </div>
  
  <div class="w3-container" id="mart_2022" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-black"><b>Mart 2022</b></h1>
    <hr style="width:50px;border:5px solid black" class="w3-round">
	<form method="post" action="aracverileri24.php">
	<header class="w3-container w3-black w3-center" style="padding:128px 16px">
	<h2>Araç Verilerine Erişmek İçin Tıklayınız</h2>
	<form action="/aracverileri24.php">
  <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Giriş</button>
  </header>
  </form>
  </div>
  
  <div class="w3-container" id="nisan_2022" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-black"><b>Nisan 2022</b></h1>
    <hr style="width:50px;border:5px solid black" class="w3-round">
	<form method="post" action="aracverileri25.php">
	<header class="w3-container w3-black w3-center" style="padding:128px 16px">
	<h2>Araç Verilerine Erişmek İçin Tıklayınız</h2>
	<form action="/aracverileri25.php">
  <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Giriş</button>
  </header>
  </form>
  </div>
  
  <div class="w3-container" id="mayis_2022" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-black"><b>Mayıs 2022</b></h1>
    <hr style="width:50px;border:5px solid black" class="w3-round">
	<form method="post" action="aracverileri26.php">
	<header class="w3-container w3-black w3-center" style="padding:128px 16px">
	<h2>Araç Verilerine Erişmek İçin Tıklayınız</h2>
	<form action="/aracverileri26.php">
  <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Giriş</button>
  </header>
  </form>
  </div>
  
  <div class="w3-container" id="haziran_2022" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-black"><b>Haziran 2022</b></h1>
    <hr style="width:50px;border:5px solid black" class="w3-round">
	<form method="post" action="aracverileri27.php">
	<header class="w3-container w3-black w3-center" style="padding:128px 16px">
	<h2>Araç Verilerine Erişmek İçin Tıklayınız</h2>
	<form action="/aracverileri27.php">
  <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Giriş</button>
  </header>
  </form>
  </div>
  
  <div class="w3-container" id="temmuz_2022" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-black"><b>Temmuz 2022</b></h1>
    <hr style="width:50px;border:5px solid black" class="w3-round">
	<form method="post" action="aracverileri28.php">
	<header class="w3-container w3-black w3-center" style="padding:128px 16px">
	<h2>Araç Verilerine Erişmek İçin Tıklayınız</h2>
	<form action="/aracverileri28.php">
  <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Giriş</button>
  </header>
  </form>
  </div>
  
  <div class="w3-container" id="agustos_2022" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-black"><b>Ağustos 2022</b></h1>
    <hr style="width:50px;border:5px solid black" class="w3-round">
	<form method="post" action="aracverileri29.php">
	<header class="w3-container w3-black w3-center" style="padding:128px 16px">
	<h2>Araç Verilerine Erişmek İçin Tıklayınız</h2>
	<form action="/aracverileri29.php">
  <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Giriş</button>
  </header>
  </form>
  </div>
  
  <div class="w3-container" id="eylul_2022" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-black"><b>Eylül 2022</b></h1>
    <hr style="width:50px;border:5px solid black" class="w3-round">
	<form method="post" action="aracverileri30.php">
	<header class="w3-container w3-black w3-center" style="padding:128px 16px">
	<h2>Araç Verilerine Erişmek İçin Tıklayınız</h2>
	<form action="/aracverileri30.php">
  <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Giriş</button>
  </header>
  </form>
  </div>
  
  <div class="w3-container" id="ekim_2022" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-black"><b>Ekim 2022</b></h1>
    <hr style="width:50px;border:5px solid black" class="w3-round">
	<form method="post" action="aracverileri31.php">
	<header class="w3-container w3-black w3-center" style="padding:128px 16px">
	<h2>Araç Verilerine Erişmek İçin Tıklayınız</h2>
	<form action="/aracverileri31.php">
  <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Giriş</button>
  </header>
  </form>
  </div>
  
  <div class="w3-container" id="kasim_2022" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-black"><b>Kasım 2022</b></h1>
    <hr style="width:50px;border:5px solid black" class="w3-round">
	<form method="post" action="aracverileri32.php">
	<header class="w3-container w3-black w3-center" style="padding:128px 16px">
	<h2>Araç Verilerine Erişmek İçin Tıklayınız</h2>
	<form action="/aracverileri32.php">
  <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Giriş</button>
  </header>
  </form>
  </div>
  
  <div class="w3-container" id="aralik_2022" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-black"><b>Aralık 2022</b></h1>
    <hr style="width:50px;border:5px solid black" class="w3-round">
	<form method="post" action="aracverileri33.php">
	<header class="w3-container w3-black w3-center" style="padding:128px 16px">
	<h2>Araç Verilerine Erişmek İçin Tıklayınız</h2>
	<form action="/aracverileri33.php">
  <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Giriş</button>
  </header>
  </form>
  </div>

 <div class="w3-container" id="cikisyap" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-black"><a href="cikis.php"><b>Çıkış Yap</b></a></h1>
	<form method="post" action="cikis.php">
  <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Çıkış Yap</button>
</header>
</form>
</div>

</div>

<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right"></p></div>

</body>
</html>
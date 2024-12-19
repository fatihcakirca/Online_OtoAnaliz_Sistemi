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
  </div>
  <div class="w3-bar-block">
	<a href="#mayis_2021" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Mayıs 2021</a>
	<a href="#anasayfayadon" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Anasayfaya Dön</a>
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
	
  <div class="w3-container" id="mayis_2021" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-black"><b>Mayıs 2021</b></h1>
    <hr style="width:50px;border:5px solid black" class="w3-round">
	<?php  
    $command = escapeshellcmd('C:\wamp64\www\bitirme\mayis_2021.py'); 
    $output = shell_exec($command); 
    echo $output; 
    ?>
  </div>
  
 <div class="w3-container" id="anasayfayadon" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-black"><a href="anasayfa.php"><b>Anasayfaya Dön</b></a></h1>
	<form method="post" action="anasayfa.php">
  <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Anasayfaya Dön</button>
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
<?php
@ $db=mysqli_connect("localhost","root","","bitirmeprojesi");

if(!$db)
  {
  	echo "Hata: Veritabanına Bağlanılamadı. Lütfen tekrar deneyin";
  	exit;
  }
  if (!$db->set_charset("utf8")) {
   
    exit();
} else {
   
}
mysqli_select_db($db,"bitirmeprojesi");
?>
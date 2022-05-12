<!DOCTYPE html>
<html>
<head>
	<title>Mysql bağlanma</title>
	<META http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<?php
$urunnId=$_POST["Urid"];
$urunnAdi=$_POST["UrAd"];
$urunnFiyat=$_POST["UrFiy"];
$urunnAcik=$_POST["UrAcik"];
$urunnAdet=$_POST["UrAdt"];
$urunnTuru=$_POST["UrTuru"];
$bg=new mysqli("localhost","root",/*şifre için*/"","alisveris");
$sorgucuk="update urunler SET urunid='$urunnId',urunAdi='$urunnAdi',urunFiyati='$urunnFiyat',urunTuru='$urunnTuru',urunAdeti='$urunnAdet',urunAciklamasi='$urunnAcik' where (urunid='$urunnId')";
$git=mysqli_query($bg,$sorgucuk);
if ($git) echo "<br> Kayıt başarı ile girilmiştir..";
mysqli_close($bg);
?>
<br>
<a href="giris.php">Yeni Kayıt için tıklayınız...</a><br>
<a href="listele.php">Kayıtları listelemek için tıklayınız...</a>
 
</body>
</html>

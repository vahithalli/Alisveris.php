<?php 
require("baglanti.php");
if(isset($_POST['guncelle'])){  
 
    
    $ad=$_POST['ad'];
    $soyad=$_POST['soyad'];
    $adres=$_POST['adres'];
    $tarih=$_POST['tarih']; 
    $ID=$_POST['ID'];
    //sorguda ? sırasına göre Form verilerini değişkene aktarma
    $liste=[$ad,$soyad,$adres,$tarih,$ID]; 
    
    $sorgu = "UPDATE `uye` SET `ad` = ?, `soyad` = ?, `adres` = ?, `tarih` = ? WHERE `ID` = ?";
    $stmt = $db->prepare($sorgu);
    $stmt->execute($liste);
    $db = null;
?>

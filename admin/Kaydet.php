<h3>MENÜ<h3>
    <?php
    $ua=$_GET["UrAd"];
    $uf=$_GET["UrFiy"];
    $us=$_GET["UrAdt"];
    $ut=$_GET["UrTuru"];
    $uac=$_GET["UrAcik"];

    $bg=new mysqli("localhost","root",/*sifre*/"","alisveris");
    if ($bg->connect_error)
    echo"Bağlanamadınız.Çünkü:".$bg->connect_error;
    else
    {
        $sorgucuk=" INSERT INTO urunler(urunAdi,urunFiyati,urunAciklamasi,urunAdeti,urunTuru)
        VALUES('$ua','$uf','$uac','$us','$ut')";
        $git=mysqli_query($bg,$sorgucuk) or die("Sorgu çalıştırılmadı..".$mysql->error);
        if($git) echo "Kayit Basarili";   
    }
    $bg->close();
?>
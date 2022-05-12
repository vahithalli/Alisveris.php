<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="deneme.css"> 
</head>
<body style="background-image:url('s.jpg');
background-repeat:no-repeat;background-position:center;
background-size:cover;">
<div style="color: white; margin: 20%; vertical-align: middle;margin-top:max-height ">
<div  align="center">

<ul class="kategori">
    <li><a href="yeniKayit.php"><font size="5"><font color="cyan">YeniKayit</font></font></a>
        <ul>
            <li><a href="listele.php"><font size="5"><font color="red">listeleme</font></font></a></li>
            <li><a href="Sıl.php"><font size="5"><font color="orenge">Silme</font></font></a></li>
            <li><a href="Düzenleme.php"><font size="5"><font color="Yellow">Düzenleme</font></font></a></li>
            <li><a href="Arama.php"><font size="5"><font color="pink">Arama</font></font></a></li>
        </ul>
        </ul>
    </li>
      
</ul>


</div>

<?php
$ka=$_POST["adiniz"];
$sf=$_POST["sifre"];
$bg= new mysqli("localhost","root",/*Şifre icin*/"","alisveris");
if($bg->connect_error)
echo"Baglanamadiniz.Cunki:" .$bg->coonect_error;
else{
    echo"Baglandiniz <br>";
    $sorgucuk=" SELECT *  FROM giris WHERE (kadi='".$ka."' AND sifre='".$sf."')";
    $git=mysqli_query($bg,$sorgucuk);
    $deneme= mysqli_num_rows($git);   
    if(mysqli_num_rows($git)>0)
    {
        $str=mysqli_fetch_array($git);
        echo "Sayin".$str['AdSoyad']." hosgeldiniz.<br>";
    }
    else
echo"kullanici girisi hatalidir.tekrar giris icin<a href='giris.php'>tiklayiniz..</a>";
    }
$bg->close();
?> 
</body>
</html>
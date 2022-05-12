<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listele</title>
</head>
<body style="background-image:url('v.jpg');
background-repeat:no-repeat;background-position:center;
background-size:cover;">
</style>

<div style="color: black; margin: 10%; vertical-align: middle;margin-top:max-height ">
<div align="center">
<?php
$bg= new mysqli("localhost","root","","alisveris"); //baglantı olusturma
if($bg->connect_error)
echo"Baglanamadiniz.Cunki:" .$bg->coonect_error;
else{
    echo"Baglandiniz <br>";
    $sorgucuk=" SELECT *  FROM urunler ";
    $git=mysqli_query($bg,$sorgucuk);
    $deneme= mysqli_num_rows($git);
    echo $deneme."adet kayit vardir..<br>";
    echo "<table border='1' bordercolor='gold'.bgcolor='#CC0033'.align='center'>
    <tr align='center'>
    <td>
    <font color='#FF1234'><b>urunId</b></font>
    <td>
    <font color='#FF1234'><b>urunAdi</b></font>   
    <td>
    <font color='#FF1234'><b>urunFiyati</b></font>   
    <td>
    <font color='#FF1234'><b>urunAciklamasi</b></font>
    <td>
    <font color='#FF1234'><b>urunAdeti</b></font>
    <td>
    <font color='#FF1234'><b>urunTuru</b></font>
    </td>
    <td>
    <font color='#FF1234'><b>Resim</b></font>
    </td>
    </tr>";
    while($str=mysqli_fetch_array($git))
    {
        echo "<tr align='center'>
        
        <td>
        <font color='#FFFFFF'><b>$str[0]</b></font>
        </td>
        <td>
        <font color='#FFFFFF'><b>$str[1]</b></font>
        </td>
        <td>
        <font color='FFFFFF'><b>$str[2]</b></font>
        </td>
        <td>
        <font color='FFFFFF'><b>$str[3]</b></font>
        </td>
        <td>
        <font color='FFFFFF'><b>$str[4]</b></font>
        </td>
        <td>
        <font color='FFFFFF'><b>$str[5]</b></font>
        </td>
        <td>
        <img src=R.jpg width=100>
        </td>
        </tr>";
        
}
 echo"</table>";
}
$bg->close();
?>  
</body>
</html>
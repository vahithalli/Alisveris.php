<?php
$baglanti=new mysqli("localhost","root",/*sifre*/"","alisveris");
if($baglanti->connect_error)
echo "baglamadınız  çünkü : ". $baglanti->connect_error;
else

{  
    $sorgu="SELECT * FROM urunler";
    $git=mysqli_query($baglanti,$sorgu);
    while($str=mysqli_fetch_array($git))
    {
        echo"<table style=float:left:margin-margin-left=20%=2 aling=center width=500 height=100 border=3 bordercolor=lightblue><tr><td with=100 rowspan=4><img src=R.jpg width=100% heigth=100></td>";
        echo "<td><font size=7>".$str['urunAdi']."</font></td></tr>";
        echo "<tr><td color=red>kalan adet:".$str['urunAdeti']."</td></tr>";
        echo "<td><font size=7 color=green>Ederi:".$str['urunFiyati']."$</font></td></tr>";
        echo "<tr><td>Turu: ".$str['urunTuru']."</td></tr>";
        echo "<tr><td colspan=2>Acıklama: ".$str['urunAciklamasi']."</td></tr>";
        echo"</table>";
  
        
    }$baglanti->close();
}               

    ?>
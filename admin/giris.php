<html>
	<head>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.dots.min.js"></script>
		<style>
			#vahit{
				width:100% ;
				height: 100vh;
			}
		</style>
	</head>
	< >
<body div id="vahit"
>
 
<div style="color: white; margin:5%;; vertical-align: middle;margin-top:max-height ">
<form action="anaSayfa.php" method="POST">
	<table border="4" align="center" style=" top: 25% left: 50%; position:absolute;height: 70%; border-width: 7">
	<tr>
<td colspan="2" align="center" style="font-size: 27	"> <font color="DarkSlateBlue ">Kullanici Girişi</font>	</td><td align="center"<?php echo(date("d.m.y"))?></td>
</tr>
<tr>
	<td><font color="DarkSlateBlue ">Kullanici Adi</font></td>
	<td colspan="2"><input type="text" name="adiniz" placeholder="Kullanici adini giriniz:" value="vahit"></td>
</tr>
<tr>
	<td><font color="DarkSlateBlue ">Şifreniz</font></td>
	<td colspan="2"><input type="password" name="sifre" placeholder="Sifrenizi giriniz:" value="1316"></td>
</tr>	
<tr>
	<td style="text-align: center; font-weight: bolder;font-size: 27"><font color="cyan ">HOŞGELDİNİZ</font></td>
	<td align="center"><input type="submit" value="Gönder"></td><td align="center"><input type="reset" value="Temizle"></td>
</tr>
</table>
</div>
</body>
</html>

<script>
VANTA.DOTS({
  el: "#vahit",
  mouseControls: true,
  touchControls: true,
  gyroControls: false,
  minHeight: 200.00,
  minWidth: 200.00,
  scale: 1.00,
  scaleMobile: 1.00,
  color: 0x34c516,
  color2: 0x3a20ff
})
</script>
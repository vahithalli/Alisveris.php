<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Php Kayıt işlemleri...</title>
<style type="text/css">
<!--
body {
	font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
	background-color: #42413C;
	margin: 0;
	padding: 0;
	color: #000;
}

/* ~~ Element/tag selectors ~~ */
ul, ol, dl { /* Due to variations between browsers, it's best practices to zero padding and margin on lists. For consistency, you can either specify the amounts you want here, or on the list items (LI, DT, DD) they contain. Remember that what you do here will cascade to the .nav list unless you write a more specific selector. */
	padding: 0;
	margin: 0;
}
h1, h2, h3, h4, h5, h6, p {
	margin-top: 0;	 /* removing the top margin gets around an issue where margins can escape from their containing div. The remaining bottom margin will hold it away from any elements that follow. */
	padding-right: 15px;
	padding-left: 15px; /* adding the padding to the sides of the elements within the divs, instead of the divs themselves, gets rid of any box model math. A nested div with side padding can also be used as an alternate method. */
}
a img { /* this selector removes the default blue border displayed in some browsers around an image when it is surrounded by a link */
	border: none;
}

/* ~~ Styling for your site's links must remain in this order - including the group of selectors that create the hover effect. ~~ */
a:link {
	color: #42413C;
	text-decoration: underline; /* unless you style your links to look extremely unique, it's best to provide underlines for quick visual identification */
}
a:visited {
	color: #6E6C64;
	text-decoration: underline;
}
a:hover, a:active, a:focus { /* this group of selectors will give a keyboard navigator the same hover experience as the person using a mouse. */
	text-decoration: none;
}

/* ~~ this fixed width container surrounds all other divs ~~ */
.container {
	width: 960px;
	background-color: #FFF;
	margin: 0 auto; /* the auto value on the sides, coupled with the width, centers the layout */
	overflow: hidden; /* this declaration makes the .container understand where the floated columns within ends and contain them */
}

.sidebar1 {
	float: left;
	width: 180px;
	background-color: #EADCAE;
	padding-bottom: 10px;
}
.content {

	padding: 10px 0;
	width: 780px;
	float: left;
}

/* ~~ This grouped selector gives the lists in the .content area space ~~ */
.content ul, .content ol { 
	padding: 0 15px 15px 40px; /* this padding mirrors the right padding in the headings and paragraph rule above. Padding was placed on the bottom for space between other elements on the lists and on the left to create the indention. These may be adjusted as you wish. */
}

/* ~~ The navigation list styles (can be removed if you choose to use a premade flyout menu like Spry) ~~ */
ul.nav {
	list-style: none; /* this removes the list marker */
	border-top: 1px solid #666; /* this creates the top border for the links - all others are placed using a bottom border on the LI */
	margin-bottom: 15px; /* this creates the space between the navigation on the content below */
}
ul.nav li {
	border-bottom: 1px solid #666; /* this creates the button separation */
}
ul.nav a, ul.nav a:visited { /* grouping these selectors makes sure that your links retain their button look even after being visited */
	padding: 5px 5px 5px 15px;
	display: block; /* this gives the link block properties causing it to fill the whole LI containing it. This causes the entire area to react to a mouse click. */
	width: 160px;  /*this width makes the entire button clickable for IE6. If you don't need to support IE6, it can be removed. Calculate the proper width by subtracting the padding on this link from the width of your sidebar container. */
	text-decoration: none;
	background-color: #C6D580;
}
ul.nav a:hover, ul.nav a:active, ul.nav a:focus { /* this changes the background and text color for both mouse and keyboard navigators */
	background-color: #ADB96E;
	color: #FFF;
}

/* ~~ miscellaneous float/clear classes ~~ */
.fltrt {  /* this class can be used to float an element right in your page. The floated element must precede the element it should be next to on the page. */
	float: right;
	margin-left: 8px;
}
.fltlft { /* this class can be used to float an element left in your page. The floated element must precede the element it should be next to on the page. */
	float: left;
	margin-right: 8px;
}
.clearfloat { /* this class can be placed on a <br /> or empty div as the final element following the last floated div (within the #container) if the overflow:hidden on the .container is removed */
	clear:both;
	height:0;
	font-size: 1px;
	line-height: 0px;
}
-->
</style></head>

<body>

<div class="container">
  <div class="sidebar1">
    <ul class="nav">
      <li><b>Menü</b></li>
      <li><a href="yeniKayit.php" target="_self">Yeni Kayıt</a></li>
      <li><a href="duzenleme.php">Düzenleme</a></li>
      <li><a href="silme.php">Silme</a></li>
      <li><a href="arama.php">Arama</a></li>
      <li><a href="liste.php">Listeleme</a></li>
    </ul>
    <p>&nbsp;</p>
    <!-- end .sidebar1 --></div>
  <div class="content">
    <h5>Güncelle</h5>
    <?php
    $gelenId=$_GET["Urid"];
    $gelenAdi=$_GET["UrAd"];
    $gelenFiyat=$_GET["UrFiy"];
    $gelenAcik=$_GET["UrAcik"];
    $gelenAdet=$_GET["UrAdt"];
    $gelenTuru=$_GET["UrTuru"];
	?>
    	<form action="duzenleKaydet.php" method="post">
    	<table border="1" bordercolor="blue" bgcolor="#C0C0C0" align="center">
        <tr align="center">
        	<td>
				<font color="#FF0000"><b>urunid:</b></font>
            </td>
            <td>
            	<input type="text" name="Urid" value="<?php echo $gelenId ?>">
            </td>
        </tr>
        <tr align="center">
        	<td>
				<font color="#FF0000"><b>Ürün Adı:</b></font>
            </td>
            <td>
            	<input type="text" name="UrAd" value="<?php echo $gelenAdi ?>">
            </td>
        </tr>
        <tr align="center">
        	<td>
				<font color="#FF0000"><b>Ürün Fiyati</b></font>
            </td>
            <td>
            	<input type="text" name="UrFiy" value="<?php echo $gelenFiyat ?>">
            </td>
        </tr>
        <tr align="center">
        	<td>
				<font color="#FF0000"><b>Ürün Adeti:</b></font>
            </td>
            <td>
            	<input type="text" name="UrAdt" value="<?php echo $gelenAdet ?>">
            </td>
        </tr>
        <tr align="center">
        	<td>
				<font color="#FF0000"><b>Ürün Türü:</b></font>
            </td>
            <td>
            	<input type="text" name="UrTuru" value="<?php echo $gelenTuru ?>">
            </td>
        </tr>
        <tr align="center">
            <td>
                <font color="#FF0000"><b>Ürün Açıklaması:</b></font>
            </td>
            <td>
                <textarea name="UrAcik"><?php echo $gelenAcik ?></textarea>
            </td>
        </tr>
        <tr align="center">
        	<td align="center">
				<input type="reset" value="Sil" name="rst">
            </td>
            <td>
            	<input type="submit" value="Kaydet" name="sbmt">
            </td>
        </tr>
    </form>
    <!-- end .content --></div>
  <!-- end .container --></div>
</body>
</html>
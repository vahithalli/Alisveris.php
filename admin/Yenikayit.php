<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
<script src="d.js"></script>
<link rel="stylesheet" href="v.css"> 
<div class="signupSection">
  <div class="info">
   <h3>YeniKayit</h3>
    <i class="icon ion-ios-ionic-outline" aria-hidden="true"></i>
    <p>HOŞGELDİNİZ</p>
  </div>

  <br></br>
  <form action="kaydet.php" method="GET">
  
    <ul class="noBullet">
      <li>
        <label <font color="blue">Ürün Adı</font></label>
        <input type="text" name="UrAd" placeholder="Ürün Adını Giriniz" class="inputFields">
      </li>
      <li>
        <label  <font color="blue">Ürün Fiyati</font></label>
        <input type="text" name="UrFiy" placeholder="Ürün Fiyati Giriniz" class="inputFields">
      </li>
      <li>
        <label  <font color="blue">Ürün Adeti</font></label>
        <input type="number" name="UrAdt" placeholder="Ürün Adetini Giriniz" class="inputFields">
      </li>
      <li>
        <label  <font color="blue">Ürün Turu</font></label>
        <input type="text" name="UrTuru" placeholder="Ürün Türünü Giriniz" class="inputFields">
      </li>
      <li>
        <label  <font color="blue">Ürün Açıklaması</font></label>
        <input type="text" name="UrAcik" placeholder="Ürün Açıklamasini Giriniz:" class="inputFields">
      </li>
      <li id="center-btn">
        <input type="submit" id="Giriş" name="join" alt="Giriş" value="Giriş"
        class="inputFields">
      </li>
    </ul>
  </form>
</div>
</body>
</html>
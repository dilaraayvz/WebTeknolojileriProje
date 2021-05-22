<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
 
    <!-- google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
 <!-- google fonts-->
 <!-- font awesome -->
 <link href="css/all.css" rel="stylesheet"> <!--load all styles -->
 <!-- font awesome -->
 
<link href="css/style.css" rel="stylesheet"> <!--load all styles -->
    <title >İletişim</title>
  </head>
  <body>
<!-- Navbar başlangıç-->
<nav  class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">ERZURUM</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown"> <!-- Justify-content-end menüyü sağa yasladı. -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="index.html" aria-current="page" href="#">Hakkında</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ozgecmis.html">Özgeçmiş</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sehrim.html">Şehrim</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="takimimiz.html">Takımımız</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ilgi-alanlarim.html">İlgi Alanlarım</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="iletisim.php">İletişim</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="giris-yap.html">Giriş Yap</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- Navbar bitiş -->

 <!-- İletişim başlangıç-->
  <section class="p-5 iletisim mb-0 align-middle " >
    <div class="container ">
      <div class="opak">
        <h2 class="mb-5 font-weight-bold iletisimbaslik"> İletişim</h2>
        <div class="formgroup"> 
          <form action="iletisim.php" method="POST" name="formIletisim" class=" text-left margin-auto" onsubmit="return kontrol()">
          <div class="form-group-row">
             <input type="text"  id="isim" name="isim" placeholder="Ad Soyad"> 
            <input type="text" name="tel" placeholder="Telefon numarası" class="form-kontrol">
          </select>
          </div>
          <div class="form-group-row">
            <select name="okul" id="okul" >
              <option value="sau">Sakarya Üniversitesi</option> 
              <option value="subu"  >Sakarya Uygulamalı Bilimler </option>
              <option value="kou">Kocaeli Üniversitesi</option>
            </select>
            <select name="derece" id="derece" >
              <option value="lisans">Lisans</option> 
              <option value="ylisans"  >Yüksek Lisans</option>
              <option value="doktora">Doktora</option>
          </select>
          </div>
          <div class="form-group-row">
            <input type="text" name="mail" placeholder="E-mail"  class="form-kontrol">
          </div>
          <div class="form-group-row">
            Kadın <input type="radio" name="cinsiyet" value="kadin" checked class="form-kontrol">
            Erkek <input type="radio" name="cinsiyet" value="erkek" class="form-kontrol"> 
            Diğer <input type="radio" name="cinsiyet" value="diger" class="form-kontrol">
          </div>
          <div class="form-grpup-row">
            <textarea name="mesaj" class="form-kontrol" placeholder="Mesaj giriniz." cols="45" rows="5"></textarea>
          </div>
          <div class="form-group-row">
            <input type="submit" value="Gönder"> 
            <input type="reset" value="Sıfırla">
          </div>
        </form>
        </div>
      
      <div class="adres">
        <h4>Adres : </h4>
        <p>Bayramoğlu Mahallesi</p>
        <p>Ahmet Rasim Caddesi</p>
        <p>Oğuz Bey Sokak</p>
        <p>No : 123</p>
        <p>0555 555 5555</p>
        <p>Email : dilara.yavuz@ogr.sakarya.edu.tr</p>
      </div>
    </div>
  </div>
  <br>
</section>
     <!-- Footer başlangıç-->
     <div class="bg-dark text-light text-center mb-0">
      <p class="align-middle p-5 mb-0 " >
        <span>Tüm hakları saklıdır. &copy; | 2021</span><br>
        <span><b>Dilara YAVUZ</b> </span>
      </p>
      <a target="_blank" href="https://www.facebook.com/"><i class="fab fa-facebook-square"></i></a>
      <a target="_blank" href="https://www.instagram.com/?hl=tr"><i class="fab fa-instagram-square"></i></a>
      <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter-square"></i></a><br>
      <a href="#"><i class="fas fa-arrow-up"></i></a>
    
    </div>
<!-- Footer bitiş-->
  


<!-- İletişim bitiş-->
     
      
    

 

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
   
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    -->

  
<!-- use strict: herangi bir probmelde hemen hata verir, sıkı mod-->
<script type="text/javascript">

    var form = document.forms["formIletisim"];  // form seçimi
    var ad=form.isim;
    var telefon=form.tel;
    var email=form.mail;
    var mesaj=form.mesaj;
   // var cinsiyet=document.forms["form"]["cinsiyet"]
    function kontrol(){
      if (ad.value=="") {
    alert("İsim boş bırakılamaz!");
    return false;
  }
  if (telefon.value=="") {
    alert("Telefon numarası boş bırakılamaz!");
    return false;
  }
  if ( email.value.indexOf("@")<1 || email.value.lastIndexOf(".")<email.value.indexOf("@")+2 || email.value.lastIndexOf(".")+2>=email.value.length )
    {
        alert("Geçerli email adresi giriniz!");
        return false;
    }    
  if (mesaj.value=="") {
    alert("Mesaj boş bırakılamaz!");
    return false;
  }
   
    return true;
    }


   
  </script>
  </body>
</html>

<?php
  include("baglanti.php");
  if(isset($_POST["isim"], $_POST["tel"], $_POST["mail"], $_POST["okul"], $_POST["derece"], $_POST["cinsiyet"], $_POST["mesaj"])){
    $adsoyad=$_POST["isim"];
    $telefon= $_POST["tel"];
    $email=$_POST["mail"];
    $okul=$_POST["okul"];
    $derece=$_POST["derece"];
    $cinsiyet=$_POST["cinsiyet"];
    $mesaj=$_POST["mesaj"];

    $ekle="INSERT INTO  iletisim (adsoyad, telefon, email, okul, derece, cinsiyet, mesaj)
     VALUES
    ('".$adsoyad."','".$telefon."','".$email."','".$okul."','".$derece."','".$cinsiyet."','".$mesaj."')";
    
    if($baglan->query($ekle)===TRUE)
    {
        echo"<script>alert('Mesajınız başarı ile gönderildi.')</script>";
    }
    else
    {
      echo"Bir hata oluştu! Mesajınız gönderilemedi.";
    }
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <!-- google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
 <!-- google fonts-->
 
 <!-- font awesome -->
 <link href="css/all.css" rel="stylesheet"> <!--load all styles -->
 <!-- font awesome -->
<title>Panel</title>
  </head>
  <body>
      

<!-- Navbar başlangıç-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.html">ERZURUM</a>
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
<!-- Navbar bitiş-->


<section class="p-5 mb-0" >
  <div class="container ">
        <table id="customers">
           <thead>
              <tr>
                <th scope="col">Ad Soyad</th>
                <th scope="col">Telefon</th>
                <th scope="col">E-Mail</th>
                <th scope="col">Okul</th>
                <th scope="col">Derece</th>
                <th scope="col">Cinsiyet</th>
                <th scope="col">Mesaj</th>
              </tr>
            </thead>
            <tbody>
              
            <?php
              session_start();
           if($_SESSION["user"]==""){
              echo"<script>window.location.href='cikis.php'</script>";
           }
           else{
           echo"Hoşgeldiniz  ".$_SESSION['user']."<br>";
           echo"<a href='cikis.php'>Çıkış Yap</a><br><br><br><br>";
            include("baglanti.php");
            $sec="Select * From iletisim";
            $sonuc=$baglan->query($sec);
            
            if($sonuc->num_rows>0){
              while($cek=$sonuc->fetch_assoc()){
                  echo"
                  <tr>
                    <td>".$cek['adsoyad']."</td>
                    <td>".$cek['telefon']."</td>
                    <td>".$cek['email']."</td>
                    <td>".$cek['okul']."</td>
                    <td>".$cek['derece']."</td>
                    <td>".$cek['cinsiyet']."</td>
                    <td>".$cek['mesaj']."</td>
                    </tr>
                  ";
              }
            }
            else{
              echo"Veritabanında hiç veri bulunamadı.";
            }
           }
              

?>
             
            </tbody>
          </table>
  </div>
 </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    -->
  </body>
</html>


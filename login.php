<?php
session_start();
if(isset($_POST["email"], $_POST["sifre"])){
  if($_POST["email"]=="g191210022@ogr.sakarya.edu.tr" && $_POST["sifre"]=="g191210022"){
    $_SESSION["user"]=$_POST["email"];
    header("location:panel.php");
  }
  else{
    echo"<script>alert('Kullanıcı adı veya şifre yanlış girildi.')</script>";
    header("Refresh: 2; url=giris-yap.html");
  }
}
?>
<?php
include("kullanicilar.php");
session_start();
ob_start();

if(($_POST["email"]==$user) and ($_POST["sifre"]==$pass)){
    $_SESSION["login"] = "true";
    $_SESSION["user"] = $user;
    $_SESSION["pass"] = $pass;
    
    header("Location:admin.php");
    
    }
    else{
    echo ("Kullancı Adı veya Şifre Yanlış.<br>");
    echo ("Giriş sayfasına yönlendiriliyorsunuz.");
    header("Refresh: 2; url=giris-yap.html");
    }
    ob_end_flush();
?>
<?php
include("kullanicilar.php");
session_start();
ob_start();
if($_SESSION["login"]==false){
    echo "Bu sayfayı görüntüleme yetkiniz yoktur.";
}
else{
    echo("Giriş başarılı. <br>");
    header("Refresh: 2; url=panel.php");
}
ob_end_flush();
?>
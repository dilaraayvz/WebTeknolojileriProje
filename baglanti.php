<?php
      $vt_sunucu="sql310.epizy.com";
      $vt_kullanici="epiz_28638987";
      $vt_sifre="pu3ssotOEiGyQ";
      $vt_adi="epiz_28638987_WebSitem";
     
      $baglan=mysqli_connect($vt_sunucu, $vt_kullanici, $vt_sifre, $vt_adi);
     
      if(!$baglan){
         die("Veritabanı bağlantı işlemi başarısız.".mysqli_connect_error());
      }
    
?>
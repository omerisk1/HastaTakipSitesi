<?php
require 'config.php';

if ( isset($_GET['cikisYap']) ){
    unset($_SESSION['login']);
    header("Location:doktorLogin.php");
    die();
    
}
if ( !isset($_SESSION['login']) ){
    header("Location:doktorLogin.php");
    die();
}
$kullanici_id = $_SESSION['login'];
$kullanici_id = DB::getRow("SELECT * FROM doktorlogin WHERE id=?",array($kullanici_id));


?>

<?php

include("vt_ayar.php");

$sorgu=$vt->prepare('SELECT *FROM hastarandevu');
$sorgu->execute();
$personellist=$sorgu-> fetchAll(PDO::FETCH_OBJ);

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <title>Doktor İşlem Ekranı</title>
    <link rel="stylesheet" type="text/css" href="css/Anasayfa.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css">
   <style>
    body{
        
        background-image: url("img/d1.jpg");
        background-repeat: no-repeat;
        background-position: center center;
        background-attachment: fixed;
        background-size : cover;
        opacity: 0.9;
    }
    #jumbotron{
        background-color: #a5d8ff;
        opacity:0.9;
    }
    #navbar{
         background-color: #000;
         opacity:0.9;
    }
    .blog-footer{
    margin-top: 200px;
    background-color:#000;
    opacity: 0.9;
    height: 220px;

    
    }
   </style>
</head>

<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top " id="navbar">
      <a href=""><img src="img/logo.png" alt="doktorlogo"></a>
      <a class="navbar-brand" href="#">Hasta Takip Programı</a>
      
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
        </ul>
        <form class="form-inline mt-2 mt-md-0">
        <a href=""><img src="img/doktor.png" alt="hastalogo"></a>
        <a class="p-2 text-white" href="#"><b>Doktor</b></a>&nbsp;&nbsp;
        <a class="btn btn-danger my-2 my-sm-0" type="submit" href="doktorLogin.php">Çıkış</a>
        </form>
      </div>
    </nav>
    <div class="jumbotron p-3 p-md-5 text-black text-center" id="jumbotron">
                <div class="col-md-12">
                    <h1 class="display-5 font-italic">Sayın Doktor Hasta Takip Sistemine Hoşgeldiniz</h1>
                </div>
                <br><br><br>
                <div class="col-md-12">
                    <h4><p class="display">
                        Hastaların randevuları aşağıda güncel olarak listelenmektedir.</p></h4>
                   

                </div>
    </div>
    <br><br>
    <div class="container"> 
        <div class="row justify-content-center">
            <div class="col">
                <table class="table table-bordered table-striped table-dark">
                    <tr>
                        <td>TC Kimlik No</td>
                        <td>Ad</td>
                        <td>Soyad</td>
                        <td>Telefon Numara</td>
                        <td>İl</td>
                        <td>Bölüm</td>
                        <td>Sil</td>
                        <td>Düzenle</td>
                    </tr>
                    <?php
                        foreach($personellist as $hastarandevu){?>
                            <tr>
                            <td><?= $hastarandevu->tc ?></td>
                            <td><?= $hastarandevu->ad ?></td>
                            <td><?= $hastarandevu->soyad ?></td>
                            <td><?= $hastarandevu->tel ?></td>
                            <td><?= $hastarandevu->il ?></td>
                            <td><?= $hastarandevu->bolum ?></td>
                            <td><a href="hastaKayitSil.php?pid=<?= $hastarandevu->tc ?>" class="btn btn-danger" >Sil</a></td>
                            <td><a class="btn btn-primary">Güncelle</a></td>
                            
                            
                            
                            </tr>
                        <?php } ?>
                </table>
            </div>
        </div>
    </div>
    
    <footer class="blog-footer text-center text-white">
           <br>
           <br>
            <p><img src="img/footerlogo.png" alt="footerlogo"> Hasta Takip Programı</p>
            <p>Sosyal Medya Hesaplarımız</p>
            <p><img src="img/facebook.png" alt="facebook">&nbsp;Facebook&nbsp;&nbsp;<img src="img/twitter.png" alt="twitter">&nbsp;Twitter&nbsp;&nbsp;<img src="img/instagram.png" alt="instagram">&nbsp;İnstagram&nbsp;&nbsp;</p>
            <p>Hasta Takip Programı, Ömer IŞIK tarafından geliştirilmektedir. Tüm hakları saklıdır © </p>

    </footer>


</body>

</html>

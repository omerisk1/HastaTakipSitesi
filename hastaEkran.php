<?php
require 'config.php';

if ( isset($_GET['cikisYap']) ){
    unset($_SESSION['login']);
    header("Location:hastaLogin.php");
    die();
    
}
if ( !isset($_SESSION['login']) ){
    header("Location:hastaLogin.php");
    die();
}
$kullanici_id = $_SESSION['login'];
$kullanici = DB::getRow("SELECT * FROM hastakayit WHERE id=?",array($kullanici_id));
?>

<?php
if( $_POST ){
   $tc = $_POST['tc'];
   $ad = $_POST['ad']; 
   $soyad = $_POST['soyad'];
   $tel = $_POST['tel'];
   $il = $_POST['il'];
   $bolum = $_POST['bolum'];  
    
    $id = DB::insert("INSERT INTO hastarandevu(tc,ad,soyad,tel,il,bolum) VALUES(?,?,?,?,?,?)",array(
    $tc,
    $ad,
    $soyad,
    $tel,
    $il,
    $bolum
    ));
    header("Location:hastaEkran.php?success=1");
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hasta İşlem Ekranı</title>
    <link rel="stylesheet" type="text/css" href="css/Anasayfa.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css">
    <style>
    body{
        height:1500px;
        background-image: url("img/h3.jpg");
        background-repeat: no-repeat;
        background-position: center center;
        background-attachment: fixed;
        background-size : cover;
        opacity: 0.9;
    }
    .content{
        border-style: ridge;
        border-radius: 15px;
        margin-top: 100px;
        background-color:#d8dee9;
    }
    .randevubutton{
        margin-top: 70px;
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
    #jumbotron{
        background-color: #a5d8ff;
        opacity:0.8;,
        
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
        <a href=""><img src="img/hastaicon.png" alt="hastalogo"></a>
        <a class="p-2 text-white" href="#"><b><?php echo $kullanici->kullaniciad ?></b></a>&nbsp;&nbsp;
        <a class="btn btn-danger my-2 my-sm-0" type="submit" href="hastaLogin.php">Çıkış</a>
        </form>
      </div>
    </nav>
        <div class="jumbotron p-3 p-md-5 text-black text-center" id="jumbotron">
                <div class="col-md-12">
                    <h1 class="display-5 font-italic">Sayın <?php echo $kullanici->kullaniciad ?> Hasta Takip Programına Hoşgeldiniz</h1>
                </div>
                <br><br><br>
                <div class="col-md-12">
                    <h4><p class="display">
                        Aşağıdaki bölümden doktorunuz ile randevu oluşturabilirsiniz.</p></h4>
                   

                </div>
        </div>
        <div class="container content">
        <br><br>
            <?php if ( isset($_GET['success'] )): ?>
                <div class="alert alert-success">Sayın <?php echo $kullanici->kullaniciad ?> randevunuz başarı ile oluşturuldu.</div>
            <?php endif ?>
            <form action="" method="POST">
            <br><br>
                <div class="form-group">
                    <label for="exampleInputEmail1"><h6>TC Kimlik No</h6></label>
                    <input type="tcno" name="tc" class="form-control"  aria-describedby="emailHelp" placeholder="Tc Kimlik Numarası"  required="" autocomplete="off">
                    <small class="form-text text-muted">11 haneli kimlik numaranızı giriniz.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1"><h6>Adınız</h6></label>
                    <input type="ad" name="ad" class="form-control"  aria-describedby="emailHelp" placeholder="Adınız"  required="" autocomplete="off">               
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1"><h6>Soyadınız</h6></label>
                    <input type="soyad" name="soyad" class="form-control"  aria-describedby="emailHelp" placeholder="Soyadınız"  required="" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1"><h6>Telefon Numaranız</h6></label>
                    <input type="tel" name="tel" class="form-control"  aria-describedby="emailHelp" placeholder="Telefon Numarası"  required="" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1"><h6>İl Seçiniz</h6></label>
                    <select class="form-control" type="il" name="il">
                        <option>İstanbul</option>
                        <option>Ankara</option>
                        <option>İzmir</option>
                        <option>Adana</option>
                        <option>Antalya</option>
                        <option>Bolu</option>
                        <option>Konya</option>
                        <option>Trabzon</option>
                        <option>Sivas</option>
                        <option>Sakarya</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1"><h6>Bölüm Seçiniz</h6></label>
                    <select class="form-control" type="bolum" name="bolum">
                        <option>Ağız ve Diş Sağlığı</option>
                        <option>Anestezi ve Reanimasyon</option>
                        <option>Beslenme ve Diyet</option>
                        <option>Beyin ve Sinir Cerrahisi</option>
                        <option>Check Up Merkezi</option>
                        <option>Çocuk Sağlığı ve Hastalıkları</option>
                        <option>Damar Hastalıkları</option>
                        <option>Enfeksiyon Hastalıkları</option>
                        <option>Fizik Tedavi ve Rehabilitasyon</option>
                        <option>Genel Cerrahi</option>
                        <option>Göz Hastalıkları</option>
                        <option>İç Hastalıklar(Dahiliye)</option>
                        <option>Onkoloji</option>
                        <option>Psikoloji</option>
                        <option>Radyoloji</option>
                        <option>Üroloji</option>
                    </select>
                </div>
                <div class="randevubutton">
                <button type="submit" class="btn btn-success">Randevu Oluştur</button>
                <br><br><br>
                
                </div>
            </form>
           
            
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
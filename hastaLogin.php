<?php
require 'config.php';
if( $_POST ){
       $kullaniciad = $_POST['kullaniciad'];
       $sifre = $_POST['sifre'];
       $kontrol = DB::getRow("SELECT * FROM hastakayit WHERE kullaniciad=? AND sifre=?",array(
       $kullaniciad,
       $sifre
       ));
       
    
       if( $kontrol ) {
           $_SESSION ['login'] = $kontrol->id;
           header("Location:hastaEkran.php");
           die();
       }
       else {
        header("Location:hastaLogin.php?error=1");
        die();
       }
    
}

?>


<!DOCTYPE html>
<html>

<head>
    <title>Hasta Giriş Ekranı</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css">


    <link rel="stylesheet" type="text/css" href="css/doktorLogin.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
         #navbar{
         background-color: #000;
         opacity:0.9;
    }
    </style>
</head>

<body>
     <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 border-bottom box-shadow text-white" id="navbar">
        <img src="img/logo.png" alt="logo">
        <h5 class="my-0 mr-md-auto font-weight-normal">Hasta Takip Programı</h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-white" href="homepage.php">Anasayfa</a>
        </nav>
        
    </div>

    <img class="wave" src="img/wave.png">
    <div class="container">
        <div class="img">
            <img src="img/first-aid-kit.png">
        </div>
        <div class="login-content">
            <form action="" method="POST">
                <img src="img/man.png">
                <h2 class="title">Hoş Geldiniz</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5></h5>
                        <input type="text" class="input"  name="kullaniciad" required="" autocomplete="off">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5></h5>
                        <input type="password" class="input"  name="sifre" required="" autocomplete="off">
                    </div>
                </div>
              
                
                

                <input type="submit" class="btn" name="gonder" value="Giriş">
                <input class="btn" value="Kayıt Ol" onclick="window.location.href = 'hastaKayit.php';">
                <?php
                if ( isset($_GET['error']) ): ?>
                <div class="alert alert-danger"> Kullanıcı adı ve şifre hatalı!</div>
                <?php endif ?>
                <?php if ( isset($_GET['success'] )): ?>
                <div class="alert alert-success"> Kayıt İşleminiz Başarı ile Tamamlandı.</div>
                <?php endif ?>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>

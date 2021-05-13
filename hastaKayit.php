<?php
require 'config.php';

if($_POST){
   $kullaniciad = $_POST['kullaniciad'];
   $sifre = $_POST['sifre']; 
    
    $id = DB::insert("INSERT INTO hastakayit(kullaniciad,sifre) VALUES(?,?)",array(
    $kullaniciad,
    $sifre
    ));
    header("Location:hastaLogin.php?success=1");
} 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hasta Kayıt Ekranı</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css">


    <link rel="stylesheet" type="text/css" href="css/doktorLogin.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    #navbar{
        background-color: #424242;
    }
        .login-content{
            margin-top: 100px;
            margin-left: 350px;
            border-style: ridge;
            border-radius: 15px;
            height: 650px;
            background-color: #a5d8ff;
       
        }
        body{
            
            background-image: url("img/h2.jpg");
            background-repeat: no-repeat;
            background-position: center center;
            background-attachment: fixed;
            background-size : cover;
            opacity: 0.9;
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
    <div class="container">
       
        <div class="login-content">
            <form action="" method="POST">
                <img src="img/hastakayit.png">
                <br><br>
                <h3 class="title">Hasta Takip Sistemine Hoşgeldiniz</h3>
                <br><br>
                <h5 >Adınız</h5>
                <div class="input-div one">
                   
                    <div class="">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5></h5>
                        <input type="text" name="kullaniciad" class="input" required="" autocomplete="off">
                    </div>
                </div>
                 <br>
                  <h5>Şifreniz</h5>
                <div class="input-div pass">
                    <div class="">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5></h5>
                        <input type="password" name="sifre" class="input" required="" autocomplete="off">
                    </div>
                </div>

             <br>
                <input type="submit" class="btn" value="Kayıt Ol">
            </form>
        </div>
    </div>
</body>
</html>
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





<!DOCTYPE html>
<html lang="en">

<head>
    <title>Doktor Randevu Ekranı</title>
    <link rel="stylesheet" type="text/css" href="css/Anasayfa.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css">

</head>

<body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 border-bottom box-shadow" id="navbar">
        <img src="img/logo.png" alt="logo">
        <h5 class="my-0 mr-md-auto font-weight-normal">Hasta Takip Programı</h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a href=""><img src="img/doktor.png" alt="doktorlogo"></a>
            <a class="p-2 text-dark" href="#">Doktor</a>


        </nav>
        <a class="btn btn-outline-primary" href="doktorEkran.php?cikisYap=1">Çıkış Yap</a>
    </div>


</body>

</html>

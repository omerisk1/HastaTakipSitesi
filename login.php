<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hasta Takip Programı</title>
    <link rel="stylesheet" type="text/css" href="css/Login.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css">
</head>
<style>
    .card-header {
        background-color: #4094b3;
    }

    .card-body {
        background-color: #fff;
    }

    .btn1 {
        background-color: #f7f7f5;
    }
    .cardtext{
    font-size:18px;
}
    .card{
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    }
    

</style>

<body>
   
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 border-bottom box-shadow" id="navbar">
        <img src="img/logo.png" alt="logo">
        <h5 class="my-0 mr-md-auto font-weight-normal">Hasta Takip Programı</h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="homepage.php">Anasayfa</a>


        </nav>
        <a class="btn btn-outline-primary" href="#">Giriş Yap</a>
    </div>
    <div class="container py-4 up">


        <div class="card-deck mb-3 text-center">
            <div class="card mb-4 box-shadow">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Doktor Giriş</h4>
                </div>
                <div class="card-body">

                    <ul class="list-unstyled mt-3 mb-4">
                        <li class="cardtext">Değerli doktorlarımız, size ayrılan bu kısımdan sisteme giriş yapabilmektesiniz.</li>

                    </ul>
                    <button type="button" class="btn btn-lg btn-block btn-outline-primary btn1" onclick="window.location.href = 'doktorLogin.php';">Doktor Giriş Ekranı İçin Tıklayınız.</button>
                </div>
            </div>
            <div class="card mb-4 box-shadow">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Hasta Giriş</h4>
                </div>
                <div class="card-body">

                    <ul class="list-unstyled mt-3 mb-4">
                        <li class="cardtext">Değerli hastalarımız, size ayrılan bu kısımdan sisteme giriş yapabilmektesiniz.</li>

                    </ul>
                    <button type="button" class="btn btn-lg btn-block btn-outline-primary btn1" onclick="window.location.href = 'hastaLogin.php';">Hasta Giriş Ekranı İçin Tıklayınız.</button>
                </div>
            </div>

        </div>

    </div>

    <footer class="blog-footer text-center">
        <br>
        <br>
        <p><img src="img/footerlogo.png" alt="footerlogo"> Hasta Takip Programı</p>
        <p>Sosyal Medya Hesaplarımız</p>
        <p><img src="img/facebook.png" alt="facebook">&nbsp;Facebook&nbsp;&nbsp;<img src="img/twitter.png" alt="twitter">&nbsp;Twitter&nbsp;&nbsp;<img src="img/instagram.png" alt="instagram">&nbsp;İnstagram&nbsp;&nbsp;</p>
        <p>Hasta Takip Programı, Ömer IŞIK tarafından geliştirilmektedir. Tüm hakları saklıdır © </p>

    </footer>


</body>

</html>

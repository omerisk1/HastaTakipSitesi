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
    body{
       
        background-image: url("img/d2.jpg");
        background-repeat: no-repeat;
        background-position: center center;
        background-attachment: fixed;
        background-size : cover;
        opacity: 0.9;
    }
    .card-header {
        background-color: #4094b3;
    }

    .card-body {
        background-color: #e9ecef;
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
    
    #navbar{
         background-color: #000;
         opacity:0.9;
    } 

    .blog-footer{
    margin-top: 220px;
    background-color:#000;
    opacity: 0.9;
    height: 234px;

    }
    

</style>

<body>
   
<nav class="navbar navbar-expand-md navbar-dark fixed-top " id="navbar">
      <a href=""><img src="img/logo.png" alt="doktorlogo"></a>
      <a class="navbar-brand" href="#">Hasta Takip Programı</a>
      
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
        </ul>
        <form class="form-inline mt-2 mt-md-0">
            <a class="p-2 text-white" href="homepage.php">Anasayfa</a> &nbsp;&nbsp; 
            <a class="btn btn-success my-2 my-sm-0" type="submit" href="login.php">Sisteme Giriş</a>
        </form>
      </div>
    </nav>
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

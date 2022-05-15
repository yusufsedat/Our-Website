
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    
    <title>Kişisel Web Sayfam</title>

  </head>

  <!---  Head kapanış body açılış   --->
  
  <body>

    
    <!---- navigation bar section ---->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark text-white fixed-top">
        <a class="navbar-brand" href="index.html"> Kişisel Web Sayfam</a> 
        <div class=container-fluid>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item px-2">
                        <a class="nav-link text-white" href="hakkimda.html" target="_self" >Hakkımda</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link text-white" href="ozgecmis.html" target="_self" >Özgeçmiş</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link text-white" href="sehrim.html " target="_self" >Şehrim</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link text-white" href="mirasimiz.html" target="_self" >Mirasımız</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link text-white" href="ilgialanlarim.html" target="_self" >İlgi Alanlarım</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link text-white" href="login.php" target="_self" >Login</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link text-white" href="iletisim.html" target="_self" >İletişim</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<main>

<div class="container">
    
    <?php 

        include("kullanicilar.php");


        if (($_POST["email"] == $user) and ($_POST["password"] == $pass))
        {
           $_SESSION["login"] = "true";
           $_SESSION["user"] = $user;
           $_SESSION["pass"] = $pass;
    
           echo("SİTEYE GİRİŞ YAPTINIZ HOŞGELDİNİZ !!");
    
        }
    
        else 
        {
                echo "Kullancı Adı veya Şifre Yanlış.<br>";
                echo "!!!TEKRAR DENEYİN!!!";
                header("Refresh: 1; url=login.php");
        }
    
    ?>
    
</div>

</main>

      <!--footer-->
      <footer>
        <div class="container-fluid padding">
            <div class="row text-center">
                <div class="col-md-12">
                    <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> Yusuf Sedat Sağaltıcı</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  

</body>

</html>

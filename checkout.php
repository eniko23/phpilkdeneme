<!DOCTYPE html>
<!--
	ustora by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com/ustora/
-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Checkout Page - Ustora Demo</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                        <li><a href="checkout.php"><i class="fa fa-user"></i> Kayıt Ol</a></li>
                            <li><a href="#"><i class="fa fa-user"></i> Giriş Yap</a></li>
                        </ul>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div> <!-- End header area -->
    
    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                <div class="logo">
                        <h1><a href="./"><img src="img/logo2.png" width="100" height="100></a></h1>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="shopping-item">
                        <a href="cart.php">SEPET - <span class="cart-amunt"></span> <i class="fa fa-shopping-cart"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                    <li><a href="index.php">ANASAYFA</a></li>
                        <li><a href="shop.php">ÜRÜNLER</a></li>
                        
                        <li><a href="cart.php">SEPET</a></li>
                        
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->
    
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Kayıt Ol</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>



    



    <div class="kayit-kutusu">
        <form method="POST" class="form-kutusu">
            <input type="text" name="isim" placeholder="Isim giriniz ->" required>
            
            <input type="password" name="sifre" placeholder="Sifre giriniz ->" required>
            <input class='kayit-button' type="submit" name="kayitOl">
        </form>
    </div>
    

    <?php
$dbHost = "localhost";
$dbName = "kayit";
$dbUser = "root";
$dbPsw = "";

$conn = mysqli_connect($dbHost, $dbUser, $dbPsw, $dbName);

if(isset($_POST['kayitOl'])) {
$isim = mysqli_real_escape_string($conn, $_POST['isim']);
$sifre = mysqli_real_escape_string($conn, $_POST['sifre']);

$sql = "INSERT INTO users (user_name, user_password) VALUES('".$isim."', '".$sifre."');";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo "Baglanti hatasi";
} else {
    mysqli_stmt_execute($stmt);
   
    header("refresh:2 ; http://localhost/ustora/index.php");
    echo "<script>location.href = ../index.php</script>";
}
}
?>
    
    
    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="js/main.js"></script>
  </body>
</html>
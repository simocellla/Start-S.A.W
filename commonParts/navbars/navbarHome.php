<?php 
session_start();
//require_once '/~S4334970/SauceForYou/php/getCookies.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="/~S4334970/SauceForYou/nav/min.css.css">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
          <a class="logo" href="/~S4334970/SauceForYou/index.php"><img alt="SauceForYou" class="img-responsive" src="/~S4334970/SauceForYou/images/logoNav.png"></a>
          <span><p>&nbsp;&nbsp;</p></span>
          <a class="navbar-brand" href="/~S4334970/SauceForYou/index.php">SauceForYou</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="/~S4334970/SauceForYou/index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/~S4334970/SauceForYou/nav/about.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/~S4334970/SauceForYou/shop-home/index.php">Shop</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/~S4334970/SauceForYou/nav/contatti.php">Contatti</a>
              </li>
              <li class="nav-item">
              <?php if(isset($_SESSION['name'])){?>
                <a class="nav-link" href="/~S4334970/SauceForYou/nav/userAccount.php">Ciao,<?php echo $_SESSION['name']; ?></a>
              <?php } ?>
              <?php if(!isset($_SESSION['name'])){ ?>
                <a class="nav-link" href="/~S4334970/SauceForYou/nav/login.php">Login</a>
              <?php } ?>
              <li class="nav-item">
                <a class="nav-link" name href="/~S4334970/SauceForYou/nav/userAccount.php"></li>
                </a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
         <!--<script src="/~S4334970/SauceForYou/js/changeActive.js"></script>--> 
  </body>
</html>
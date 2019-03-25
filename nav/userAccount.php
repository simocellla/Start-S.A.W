 <?php
    session_start();
    if(!isset($_SESSION['name'])){
      header('location: /~S4334970/SauceForYou/nav/login.php');
    }
?>
<!DOCTYPE html>
<html lang="it">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SauceForYou</title>
   
    <!-- Bootstrap core CSS -->
    <link href="/~S4334970/SauceForYou/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="/~S4334970/SauceForYou/js/jquery-3.3.1.min.js"></script>
    <script src="/~S4334970/SauceForYou/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <link rel="shortcut icon" type="image" href="/~S4334970/SauceForYou/images/logoNav.png"></link>

  </head>

  <body>
    <!-- Navigation -->
    <div id="includedContent2"> <script src="/~S4334970/SauceForYou/js/loadNavbar.js"> </script> </div> 
    <!-- Header with Background Image -->

    
    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col-sm-8">
          <h2 class="mt-4"><br><br>Profilo di: <?php echo $_SESSION['name']; ?></h2>  
          <p>In questa pagina potrai modificare i dati relativi alla spedizione dei nostri sughi e attivare il codice sconto
           ricevuto nella mail di conferma della newsletter!  </p>
        </div>
     </div>
          <div class="data-table">
            <h4>Ecco i tuoi dati: </h4>
          </div>
          <div class = "row"> 
            <div class ="col-lg-4">
            <p>Nome : <?php echo $_SESSION['name']; ?></p>
            <p>Cognome : <?php echo $_SESSION['surname']; ?></p>
            <p>Email : <?php echo $_SESSION['email']; ?></p>
            </div>

            <div class ="col-lg-3" style="text-align: right">
              <form action = "/~S4334970/SauceForYou/nav/changeInfo.php" method ="post">
              <?php require(__DIR__."/errors/errors3.php") ?>
                <div class="form-group">
                Via:<input type="text" name="form-address" method="post" action="/~S4334970/SauceForYou/nav/changeInfo.php"placeholder=" <?php echo $_SESSION['address'] ?> " >
                </div>
                <div class="form-group">
                Provincia: <input type="text" name="form-country" placeholder="<?php echo $_SESSION['country'] ?>">
                </div>
                <div class="form-group">
                Cap: <input type="text" name="form-cap" placeholder="<?php echo $_SESSION['cap'] ?>">
                <br><br>
                <input type="submit" style= "padding-button: 7px;"class="btn btn-primary btn-sg" action = "/~S4334970/SauceForYou/nav/changeInfo.php" method ="post">
                </div>
              </form>
            </div>
            <!-- Spzi vuoti -->
            <div class ="col-lg-1"></div>
            <div class ="col-lg-1"></div>

            <div class ="col-lg-3">
            <form action="/~S4334970/SauceForYou/nav/riscattaCodice.php">
              <input class="btn" type="submit" value="Riscatta codice sconto" />
            </form>
            <br>
            <form action="/~S4334970/SauceForYou/nav/modPSW.php">
              <input class="btn" type="submit" value="Modifica password" />
            </form>
            <br>
            <form action="/~S4334970/SauceForYou/php/logout.php">
              <input class="btn" type="submit" value="Logout" />
            </form>
            </div>
          </div>
      </div>

      
   

    </div>
    <!-- /.container -->
    <div style="padding-top: 248px">
    <!-- Footer -->
    <div id="includedContent"> <script src="/~S4334970/SauceForYou/js/loadFooter.js"> </script> </div>

  </body>

</html>
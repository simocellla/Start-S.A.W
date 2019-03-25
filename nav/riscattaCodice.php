<?php
    session_start();
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
          <p>In questa pagina potrai inserire il codice sconto ricevuto per mail:</p>
        </div>
    </div>
    <div class="container">
      <div class = "row"> 
        <div class ="col-lg-6">
          <form action = "/~S4334970/SauceForYou/php/confirmCode.php" method ="post">
            <?//php require(__DIR__."/errors/errors4.php") ?>
              <div class="form-group">
              Inserisci il codice: <input type="text"  name = "form-code" method="post" placeholder="Inserisci il codice" >
              <input value="Invia" type="submit" style= "padding-button: 7px;"class="btn btn-primary btn-sg" action = "/~S4334970/SauceForYou/php/confirmCode.php" method ="post">
              <?php require(__DIR__."/message.php") ?>
              </div>
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
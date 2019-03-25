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
          <p>In questa pagina potrai modificare la tua password:</p>
        </div>
     </div>
          <div class="data-table">
            <h4>Modifica password:</h4>
            <br>
          </div>
          <div class = "row"> 
            <div class ="col-lg-12">
            <div class ="col-lg-6">
              <form action = "/~S4334970/SauceForYou/php/changePassword.php" method ="post">
              <?php require(__DIR__."/errors/errors4.php") ?>
                <div class="form-group">
                Immetti la vecchia password:&nbsp;<input type="password" name="old-pwd" method="post" placeholder="..." >
                </div>
                <div class="form-group">
                Immetti nuova password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="password" name="new-pwd1" placeholder="...">
                </div>
                <div class="form-group">
                Conferma nuova password:&nbsp;&nbsp;&nbsp;<input type="password" name="new-pwd2" placeholder="...">
                <br><br>
                <input value="Modifica" type="submit" style= "padding-button: 7px;"class="btn btn-primary btn-sg" action = "/~S4334970/SauceForYou/php/changePassword.php" method ="post">
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
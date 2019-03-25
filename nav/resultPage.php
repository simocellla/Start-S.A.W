<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage</title>

    <!-- Bootstrap core CSS -->
    <link href="/~S4334970/SauceForYou/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/~S4334970/SauceForYou/shop-home/css/shop-homepage.css" rel="stylesheet">
    <script src="/~S4334970/SauceForYou/js/jquery-3.3.1.min.js"></script>
    <script src="/~S4334970/SauceForYou/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <link rel="shortcut icon" type="image" href="/~S4334970/SauceForYou/images/logoNav.png"></link>
    <!-- Bootstrap core JavaScript -->
    <script src="/~S4334970/SauceForYou/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </head>

  <body>

    <!-- Navigation -->
    <div id="includedContent2"> <script src="/~S4334970/SauceForYou/js/loadNavbar.js"> </script> </div> 
    <br>
    <div class="container">
      <div class="row">
        <div class="col-lg-2">
        Nome:
        </div>

        <div class="col-lg-2">
        Link:
        </div>

        <div class="col-lg-2">
        Prezzo:
        </div>

      </div>
    </div> 
    <br>
    <div class="container">
    <?php
    foreach ($_SESSION['risultati'] as $item) { 
    ?>
     <div class="row">
      <div class="col-lg-2">
            <?php echo $item['Nome']; ?>
      </div>
      <div class="col-lg-2">
          <a href="<?php echo $item['Link']; ?>"> Clicca qui </a>
      </div>
      <div class="col-lg-2">
            <?php echo $item['Prezzo']; ?>
      </div>
    </div>
    <?php } ?>
    </div>
  <div style="padding-top:395px;"></div>
  <div id="includedContent"> <script src="/~S4334970/SauceForYou/js/loadFooter.js"> </script> </div>
  <?php ?>
  </body>
</html>
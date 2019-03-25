<?php   session_start(); ?>
<!DOCTYPE html>
<html lang="it">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SauceForYou</title>

    <!-- Custom styles for this template -->
    
    <link href="/~S4334970/SauceForYou/css/business-frontpage.css" rel="stylesheet">
    <link href="/~S4334970/SauceForYou/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <!--<link href="/~S4334970/SauceForYou/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="/~S4334970/SauceForYou/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <link rel="shortcut icon" type="image" href="/~S4334970/SauceForYou/images/logoNav.png"></link>
    
  </head>

  <body>
    <!-- Navigation -->
    <div id="includedContent2"> <script src="/~S4334970/SauceForYou/js/loadNavbar.js"> </script> </div>
    
    <!-- Header with Background Image -->
    <header class="business-header">
      <div class="container">
        <div class="row">
          <div class="col-lg-12"></div>
        </div>
      </div>
    </header>
    
    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col-sm-8">
          <h2 class="mt-4">Cosa facciamo</h2>
          <p>Salve a tutti, siamo Matteo e Simone, insieme abbiamo sviluppato la SauceForYou, un'innovativo sistema che vi renderà la vita più facile sotto ogni punto di vista.</p>
          <p>Scegliendo il nostro servizio avrete la possibilità di ottenere entro 24h dal pagamento il sugo scelto in un innovativo box salva freschezza, avendo così un ottimo sugo, ma non è tutto, tutti i nostri sughi contengono ingredienti selezionati e locali.</p>
          <p>
          <a class="btn btn-primary btn-lg" href="/~S4334970/SauceForYou/nav/about.php">Scopri di più sulla nostra azienda &raquo;</a>
          </p>
        </div>
        <div class="col-sm-4">
          <p>
          <h3>Iscriviti alla nostra <b>Newsletter</b>,</h3>
          <h6>potrai ricevere magnifici sconti...</h6>
          <div class="form">
            <form action = "/~S4334970/SauceForYou/php/mailer/newsletter.php" method ="post">
              <input type="email" name="email-newsletter" placeholder=" Inserisci la tua email:" style="padding-bottom:8px">
              <input type="submit" value="Iscrivimi" class="btn btn-primary btn-sg" action = "/~S4334970/SauceForYou/php/mailer/newsletter.php" method ="post">
              <?php require(__DIR__."/nav/errors/message.php") ?>
            </form>
          </div>
          </p>
        </div>
     </div>
      <!-- /.row -->

     
      <div class="pres">
          <div class="negozio">
            <h4>Ecco i sughi classici della nostra tradizione: </h4>
          </div>
      </div>
    
      <div class="row">
        <div class="col-sm-4 my-4">
          <div class="card">
            <img class="card-img-top" src="images/sugo1.jpg" alt="">
            <div class="card-body">
              <h4 class="card-title">Sugo al Basilico</h4>
              <p class="card-text">Da un delizioso pomodoro italiano maturato al sole e un profumato basilico nasce il Sugo al Basilico SauceForYou.</p>
            </div>
            <div class="card-footer">
              <a href="/~S4334970/SauceForYou/shop-item/item/index.php" class="btn btn-primary">Vai allo shop</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4 my-4">
          <div class="card">
            <img class="card-img-top" src="images/pesto.jpg" alt="">
            <div class="card-body">
              <h4 class="card-title">Pesto</h4>
              <p class="card-text">Tante foglie di basilico fresco italiano raccolte all’alba si uniscono al sapore genuino del Parmigiano Reggiano: un incontro perfetto, per un pesto profumato dal gusto fresco ed autentico.</p>
            </div>
            <div class="card-footer">
              <a href="/~S4334970/SauceForYou/shop-item/item/index1.php" class="btn btn-primary">Vai allo shop</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4 my-4">
          <div class="card">
            <img class="card-img-top" src="images/sugo3.jpg" alt="">
            <div class="card-body">
              <h4 class="card-title">Sugo ''Al Tuccu''</h4>
              <p class="card-text">Carne da filiera controllata, un profumato soffritto, delizioso pomodoro e cottura lenta. Il nostro Sugo 'Al Tuccu' si prepara così: con pazienza, sapienza e niente conservanti aggiunti.</p>
            </div>
            <div class="card-footer">
              <a href="/~S4334970/SauceForYou/commonParts/underCostruction.html" class="btn btn-primary">Vai allo shop</a>
            </div>
          </div>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
   
    <!-- Footer -->
    <div id="includedContent"> <script src="js/loadFooter.js"> </script> </div>
  </body>

</html>


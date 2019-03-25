<?php  
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>SauceForYou Login &amp; Register</title>

    <!--CSS-->

    <link href="/~S4334970/SauceForYou//vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/~S4334970/SauceForYou/css/style.css">
    <script src="/~S4334970/SauceForYou/js/jquery-3.3.1.min.js"></script>
    <script src="/~S4334970/SauceForYou/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <link rel="shortcut icon" type="image" href="/~S4334970/SauceForYou/images/logoNav.png"></link>

</head>  

<body>

    <!--NAVBAR-->
    <div id="includedContent2"> <script src="/~S4334970/SauceForYou/js/loadNavbar.js"> </script> </div>
    <div style="padding-top: 75px">
    <!--FORM-LOGIN-REGISTER-->

    <div class="top-content">
        <div class="inner-bg">
            <div class="container">
                <div class="intro">
                    <h1>Benvenuto,</h1>
                    <h5>accedi o registrati al nostro servizio:</h5>
                </div>
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="form-box">
                                <div class="form-top">
                                    <div class="form-top-left">
                                        <h3>Login</h3>
                                        <p>Immetti mail e password:</p>
                                        <br>
                                    </div>
                                        <div class="form-top-right">
                                            <i class="fa fa-key"></i>
                                        </div>
                                </div>
                                    <div class="form-bottom">
                                    <form action = "/~S4334970/SauceForYou/php/logUser.php" method ="post" class="login-form">
                                        <?php require(__DIR__."/errors/errors.php") ?>
                                            <div class="form-group">
                                                <label class="sr-only" for="form-email">Email</label>
                                                <input type="email" name="form-email" placeholder="Email" class="form-email form-control">
                                            </div>
                                                <div class="form-group">
                                                <label class="sr-only" for="form-password">Password</label>
                                                <input type="password" name="form-password" placeholder="Password" class="form-password form-control" id="form-password-login">
                                                </div>                        
                                                <button type="submit" class="btn" action = "/~S4334970/SauceForYou/php/logUser.php">Accedi!</button>
                                        </form>
                                    </div>
                                </div>                
                            </div>
            
            <!--linee divisorie |-->
            <div class="col-sm-1 middle-border"></div>
            <div class="col-sm-1"></div>
                            
            <div class="col-sm-5">
                <div class="form-box">
                    <div class="form-top">	
                        <div class="form-top-left">
                            <h3>Registrazione</h3>
                            <p>Completa il form sottostante per creare un account:</p>
                        </div>
                            <div class="form-top-right">
                                <i class="fa fa-pencil"></i>
                            </div>
                    </div>
                        <form class="form-bottom" method="POST" action="/~S4334970/SauceForYou/php/register.php">
                            <form role="form" action="/~S4334970/SauceForYou/php/register.php" method="POST" class="registration-form">
                            <?php require(__DIR__."/errors/errors2.php") ?>
                                <div class="form-group">
                                    <label class="sr-only">Nome</label>
                                    <input type="text" name="reg-username" placeholder="Nome..." class="form-first-name form-control" id="form-first-name">
                                </div>
                                    <div class="form-group">
                                        <label class="sr-only">Cognome</label>
                                        <input type="text" name="reg-surname" placeholder="Cognome..." class="form-last-name form-control" id="form-last-name">
                                    </div>
                                        <div class="form-group">
                                            <label class="sr-only">Email</label>
                                            <input type="email" name="reg-email" placeholder="Email..." class="form-email form-control" id="form-email">
                                        </div>
                                            <div class="form-group">
                                                <label class="sr-only">Password</label>
                                                <input type="password" name="reg-password" placeholder="Password..." class="form-password form-control" id="form-password">
                                            </div>
                                                <div class="form-group">
                                                    <label class="sr-only">Reinserisci la password</label>
                                                    <input type="password" name="reg-password2" placeholder="Reinserisci la password..." class="form-password form-control" id="form-password2">
                                                </div>
                                                <button type="submit" class="btn" action = "/~S4334970/SauceForYou/php/register.php">Registrati!</button>
                            </form>
                    </div>
                </div>
                
            </div>
        
        </div>
        
    </div>
    </div>

    </div>
    <div style="padding-top: 25px">
    <!--FOOTER-->
    <?php session_destroy(); ?>
    <div id="includedContent"> <script src="/~S4334970/SauceForYou/js/loadFooter.js"> </script> </div>
</body>
</html>
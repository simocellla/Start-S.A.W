<?php
//script di logout

//distruggo le sessione dell'utente

//if (isset($_COOKIE['username'])) {
    //pulisco la variabile globale $_COOKIE
    //unset($_COOKIE['name']);
    //unset($_COOKIE['email']);
    //e settando il tempo di scadenza in una data del passato faccio scadere il file nel browser
    //setcookie('name', '', time() - 3600,'/');  
//}
//if (isset($_COOKIE['name'])) {
    //setcookie('email', '',time() - 3600,'/');  
    //echo 'cookie distrutti';
//}
//mod
    header('Location: /~S4334970/SauceForYou/nav/login.php' );
    session_destroy();
?>
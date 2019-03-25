<?php
//script di logout

//distruggo le sessione dell'utente

    //unset($_SESSION['name']);
    session_destroy();
    header('Location: /~S4334970/SauceForYou/nav/login.php' );
    


?>
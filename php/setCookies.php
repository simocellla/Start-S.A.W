<?php
    
    //file con funzioni relative all' utilizzo dei cookie per salvare i dati di sessione dell' utente nel sito
        $email = $_SESSION['email'];
        //giorni di validita' del cookie
        $days = 2;
        setcookie('email' ,$email, time() + (86400 * $days));
    
        $name = $_SESSION['name'];
        $days = 2;
        setcookie('name' ,$name, time() + (86400 * $days));
    
?>
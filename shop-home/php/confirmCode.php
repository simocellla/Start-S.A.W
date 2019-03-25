<?php

    $link = mysqli_connect('127.0.0.1', 'S4334970', 'spinaxomis2018', 'S4334970');
    if(!$link) {
        die('Failed to connect to server!');
    }

    //Select database
    $db = mysqli_select_db($link,'S4334970');
    if(!$db) {
        die("Unable to select database");
    }
    $email = $_SESSION['email'];
    $code = $_GET['code']; 
    $code = htmlspecialchars($code);
    $code = mysqli_real_escape_string($link, $code);
    
    $raw_results = mysqli_query($link, "SELECT * FROM mailnewsletter WHERE $code == 'codSconto' && $email == 'Email'");
    if(mysqli_num_rows($raw_results) > 0){ 
        $_SESSION['message'] = "Codice trovato!";
        header("location: /~S4334970/SauceForYou/nav/riscattaCodice.php");
    }
    else { // se non ci sono risultati
        $_SESSION['message'] = "Mail non iscritta o codice errato!";
        header("location: /~S4334970/SauceForYou/nav/riscattaCodice.php");
    } 
?>
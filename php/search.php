<?php 
session_start();
    //script per la ricerca di sughi con nome dato in input dall' utente
    $link = mysqli_connect('127.0.0.1', 'S4334970', 'spinaxomis2018', 'S4334970');
    if(!$link) {
        die('Failed to connect to server!');
    }

    //Select database
    $db = mysqli_select_db($link,'S4334970');
    if(!$db) {
        die("Unable to select database");
    }
    //prende la stringa da cercare
    $query = $_GET['query']; 
      
    
    if (strlen($query) < 1) {
        header('location:/~S4334970/SauceForYou/shop-home/index.php'); 
        die("");
    }
    //sanitizzazione input
    $query = htmlspecialchars($query);
    $query = mysqli_real_escape_string($link, $query);
        
    //query che prende tutte le righe del DB in cui e' presente nel nome una parola che corrisponde alla query
    $raw_results = mysqli_query($link, "SELECT * FROM sughisearch
    WHERE (`Nome` LIKE '%".$query."%')") or die(mysqli_error());
            
    //se ci sono risultati
    if(mysqli_num_rows($raw_results) > 0){ 
        $_SESSION['risultati'] = array();
        while($results = mysqli_fetch_array($raw_results)){
            array_push($_SESSION['risultati'], $results);
            }
            header('location: /~S4334970/SauceForYou/nav/resultPage.php');
        }
        else { // se non ci sono risultati
            header('location:/~S4334970/SauceForYou/shop-home/index.php'); 
        } 
     
?>
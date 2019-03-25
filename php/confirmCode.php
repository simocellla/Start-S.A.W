<?php

    session_start();

    $link = mysqli_connect('127.0.0.1', 'S4334970', 'spinaxomis2018', 'S4334970');
    if(!$link) {
        die('Failed to connect to server!');
    }
    //Select database
    $db = mysqli_select_db($link,'S4334970');
    if(!$db) {
        die("Unable to select database");
    }

    $messages = array();
    //$_SESSION['messages'] = $messages;

    $mail = $_SESSION['email'];
    $code = $_POST['form-code'];//mysqli_real_escape_string($link,$_POST['form-code']);
    //$code = 881644075;
    if(empty($code)){
        array_push($messages, "Il codice è obbligatorio!"); 
    }
    if(count($messages)!= 0){
        header('location: /~S4334970/SauceForYou/nav/riscattaCodice.php');
    }
    //if(count($messages) == 0){
    $mysqli = new mysqli('127.0.0.1', 'S4334970', 'spinaxomis2018', 'S4334970');
    if(count($messages) == 0){
    $stmt = $mysqli->prepare("select * from mailnewsletter where Email = ? AND codSconto = ?");
    if (!$stmt) {
        echo "Prepared failed!";
    }
    $stmt->bind_param('si', $mail, $code) or die("Binding parameters failed!");
    $result = $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
    //Prendo i dati dal db!!!
    $query = "select * from mailnewsletter where Email = '$mail'";
    $result = mysqli_query($mysqli,$query);
    $row = mysqli_fetch_assoc($result);
    $codSconto = $row['codSconto'];
    if($code == $codSconto){
        array_push($messages, "Codice sconto attivato con successo!");
        header("location: /~S4334970/SauceForYou/nav/riscattaCodice.php");
    } else{ // se non ci sono risultati
        array_push($messages,"Mail non iscritta o codice errato!");
        header("location: /~S4334970/SauceForYou/nav/riscattaCodice.php");
    }
}else{
    array_push($messages,"Mail non iscritta o codice errato!");
        header("location: /~S4334970/SauceForYou/nav/riscattaCodice.php");
}
}
        $_SESSION['messages'] = $messages;
        

    //$raw_results = mysqli_query($link, "SELECT * FROM mailnewsletter WHERE 'codSconto' == $code && 'Email' == $mail");
    //$row = mysqli_fetch_assoc($raw_results);

    /*if(mysqli_num_rows($raw_results) > 0){ 
        $codSconto = $row['codSconto'];
        $_SESSION['codSconto'] = $codSconto;
        $_SESSION['message'] = "Codice trovato!";
        if($code == $codSconto){
            array_push($messages, "Codice sconto attivato con successo!");
            header("location: /~S4334970/SauceForYou/nav/riscattaCodice.php");
        } else { // se non ci sono risultati
            $_SESSION['message'] = "Mail non iscritta o codice errato!";
            header("location: /~S4334970/SauceForYou/nav/riscattaCodice.php");
        }
    }*/
    $_SESSION['messages'] = $messages;
    
?>
<?php
    //Dati per la connessione:
    $HOST = '127.0.0.1';
    $user = 'S4334970';
    $pwd = 'spinaxomis2018';
    $dbName = 'S4334970';

    $con = mysqli_connect($HOST, $user, $pwd, $dbName);
    //mysqli_select_db($con,'mailnewsletter');

    if(!$con){
        mysqli_close($con);
        //include("../404.html");
        exit;
    }
?>
<?php
    session_start();

    // variable declaration
	$username = "";
	$email    = "";
	$_SESSION['success'] = "";

	// connect to database

    $db = mysqli_connect('127.0.0.1', 'S4334970', 'spinaxomis2018', 'S4334970');
    
?>
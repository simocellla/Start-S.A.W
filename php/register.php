<?php

    session_start();
    //creazione della connessione con il database
    $connection = mysqli_connect('127.0.0.1', 'S4334970', 'spinaxomis2018');
    //selezione della tabella
    mysqli_select_db($connection,'S4334970');

    // array delle stringhe di errore
    $errors = array(); 

    // Registrazione utente

    
    // receive all input values from the form
    $name = mysqli_real_escape_string($connection, $_POST['reg-username']);
    $surname = mysqli_real_escape_string($connection, $_POST['reg-surname']);
    $email = mysqli_real_escape_string($connection, $_POST['reg-email']);
    $password = mysqli_real_escape_string($connection, $_POST['reg-password']);
    $password2 = mysqli_real_escape_string($connection, $_POST['reg-password2']);
    

    // validazione del form 
    // si aggiungono all' array errors le stringhe di errore che vengono passate allo script che le stampa grazie a session
    if (empty($name)) { 
        array_push($errors, "Il nome è obbligatorio"); 
    }
    else if (strlen($name) < 3) {  
        array_push($errors, "Il nome deve essere lungo almeno tre caratteri");
    }
    if (empty($surname)) { 
        array_push($errors, "Il cognome è obbligatorio"); 
    }
    else if (strlen($surname) < 3) {  
        array_push($errors, "Il cognome deve essere lungo almeno tre caratteri");
    }
    if (empty($email)) { 
        array_push($errors, "La mail e' obbligatoria"); 
    }
    if (empty($password)) { 
        array_push($errors, "La password e' obbligatoria"); 
    }
    else if(strlen($password) < 8) {
        array_push($errors, "La password deve essere lunga almeno 8 caratteri");
    }
    else if ($password != $password2) {
	    array_push($errors, "Le due password non corrispondono");
    }
    
    // controllo se la mail e' gia' presente nel DB
    $q1 = " select * from users where Email = '$email'";
    $result = mysqli_query($connection,$q1);
    $user = mysqli_fetch_assoc($result);
    $num = mysqli_num_rows($result);
    if ($num >= 1) {
        array_push($errors, "La mail esiste gia'");
    }
   

    $_SESSION['errors-reg'] = $errors;

    if(count($errors)!= 0){
        header('location: /~S4334970/SauceForYou/nav/login.php');
    }
    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
  	    $password = md5($password); //encrypt the password before saving in the database
  	    $stmt = $connection->prepare(" insert into users(FirstName,LastName,Email,Password) values (?, ?, ?,?) ");
        $stmt->bind_param("ssss", $name, $surname, $email,$password);
        $stmt->execute();
        $_SESSION['name'] = $name;
        $_SESSION['surname'] = $surname;
        $_SESSION['email'] = $email;
        $_SESSION['address'] = ' ';
        $_SESSION['country'] = ' ';
        $_SESSION['cap'] = ' ';
        

        //setcookie('name' ,$name, time() + (86400 * $days));
        //setcookie('mail' ,$email, time() + (86400 * $days));
        //require_once '/~S4334970/SauceForYou/php/setCookies.php';
        //echo $_COOKIE['name'];
        header('location: /~S4334970/SauceForYou/nav/userAccount.php');
    } 
    

?>
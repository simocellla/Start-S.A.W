<?php
    //prendo i dati
    session_start();
    $email = $_SESSION['email'];

    $errors = array();

    $conn = new mysqli('127.0.0.1', 'S4334970', 'spinaxomis2018', 'S4334970');
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed!");
    } 

    //Prendo i dati sanificati dell'utente:
    $addresstemp = mysqli_real_escape_string($conn,trim($_POST['form-address']));
    $countrytemp = mysqli_real_escape_string($conn,trim($_POST['form-country']));
    $captemp = mysqli_real_escape_string($conn,trim($_POST['form-cap']));

    //Verifica dati:
    if(empty($addresstemp)){
        array_push($errors, "La Via è obbligatoria"); 
    }
    if(empty($countrytemp)){
        array_push($errors, "La Regione è obbligatoria"); 
    }
    if(empty($captemp)){
        array_push($errors, "Il CAP è obbligatorio"); 
    }

    //Preparo query per modificare address
    $query = "select * from users where Email = '$email'";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($result);
    //$address = $row['Via'];
    //$row['Via'] = $addresstemp;

    if(count($errors)!= 0){
        header('location: /~S4334970/SauceForYou/nav/userAccount.php');
    }
    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
    $sql = "update users set Via ='$addresstemp', Provincia = '$countrytemp', CAP = '$captemp' where Email='$email'";
    if ($conn->query($sql) === TRUE) {
        $_SESSION['address'] = $addresstemp;
        $_SESSION['country'] = $countrytemp;
        $_SESSION['cap'] = $captemp;
        array_push($errors, "Dati aggiornati con successo!");
        header('location: /~S4334970/SauceForYou/nav/userAccount.php');
    } else {
        array_push($errors, "Problema di connessione.");
    }
}
    $_SESSION['errors-updater'] = $errors;
?>
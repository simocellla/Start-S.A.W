<?php
    //prendo i dati
    session_start();
    $email = $_SESSION['email'];
    //echo $email;

    $errors = array();

    $conn = new mysqli('127.0.0.1', 'S4334970', 'spinaxomis2018', 'S4334970');
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed!");
    } 

    //Prendo i dati sanificati dell'utente:
    $oldpwd = trim($_POST['old-pwd']);//mysqli_real_escape_string($conn, $_POST['old-pwd']);
    $newpwd1 = trim($_POST['new-pwd1']); //mysqli_real_escape_string($conn, $_POST['new-pwd1']);
    $newpwd2 = trim($_POST['new-pwd2']); //mysqli_real_escape_string($conn, $_POST['new-pwd1']);

    if(empty($oldpwd)){
        array_push($errors, "La vecchia password è obbligatoria"); 
    }
    if(empty($newpwd1)){
        array_push($errors, "La nuova password è obbligatoria"); 
    }
    if(empty($newpwd2)){
        array_push($errors, "La verifica è obbligatoria"); 
    }
    if($newpwd1 != $newpwd2){
        array_push($errors, "Le due password non coincidono");
    }
    if(count($errors)!= 0){
        header('location: /~S4334970/SauceForYou/nav/modPSW.php');
    }
    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
        $oldpwd = mysqli_real_escape_string($conn, $_POST['old-pwd']);
        $newpwd1 = mysqli_real_escape_string($conn, $_POST['new-pwd1']);
        $newpwd2 = mysqli_real_escape_string($conn, $_POST['new-pwd2']);

        $oldpwd = md5($oldpwd);
        $newpwd1 = md5($newpwd1); 

        $query = "SELECT * FROM users WHERE Email = ? AND Password = ?";
        if($stmt = $conn->prepare($query)){
            $stmt->bind_param('ss', $email,$oldpwd);
            $stmt->execute();
            $stmt->store_result();
            $num = $stmt->num_rows;
            //$stmt->bind_result($email);
            $stmt->fetch();
            $stmt->close();
        }
        if($num >= 1){
            $querycheck = "update users set Password ='$newpwd1' where Email='$email'";
            if($conn->query($querycheck) === TRUE){
                array_push($errors, "Dati aggiornati con successo!");
                header('location: /~S4334970/SauceForYou/nav/modPSW.php');
            }
        } else{
            array_push($errors, "Impossibile verificare la password.");
            header('location: /~S4334970/SauceForYou/nav/modPSW.php');
        }
    }
        
        $_SESSION['errors-updaterpass'] = $errors;
        header('location: /~S4334970/SauceForYou/nav/modPSW.php');
?>
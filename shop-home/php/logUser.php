<?php  

    //Start session
    session_start();
    //require_once('server.php');
    //Connect to mysql server ------TOGLIERE!
    $link = mysqli_connect('127.0.0.1', 'S4334970', 'spinaxomis2018', 'S4334970');
    if(!$link) {
        die('Failed to connect to server: ' . mysql_error());
    }

    //Select database
    $db = mysqli_select_db($link,'S4334970');
    if(!$db) {
        die("Unable to select database");
    }
    //Array di errrori
    $errors = array();

    //Dati dal form
    $email = mysqli_real_escape_string($link, $_POST['form-email']);
    $password = mysqli_real_escape_string($link,$_POST['form-password']);

    if(empty($email)){
        array_push($errors, "L'email è obbligatoria"); 
    }
    if(empty($password)) { 
        array_push($errors, "La password e' obbligatoria"); 
    }

    //$temp = $password;
    $password = md5($password);
    $_SESSION['password'] = $password;
    $_SESSION['errors-log'] = $errors;

    if(count($errors)!= 0){
        header('location: /~S4334970/SauceForYou/nav/login.php');
    }

    if(count($errors) == 0){
        $mysqli = new mysqli('127.0.0.1', 'S4334970', 'spinaxomis2018', 'S4334970'); 
    if ($mysqli->connect_error) { 
        die('Errore di connessione!'); 
    } 

    //prepared statement
    $stmt = $mysqli->prepare("SELECT * FROM users WHERE Email = ? AND Password = ?");
    if (!$stmt) {
        echo "Prepared failed!";
    }

    $stmt->bind_param('ss', $email, $password) or die("Binding parameters failed!");
    $result = $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        //Prendo i dati dal db!!!
        $query = "select * from users where Email = '$email'";
        $result = mysqli_query($mysqli,$query);
        $row = mysqli_fetch_assoc($result);
        $surname = $row['LastName'];
        $name = $row['FirstName'];
        $address = $row['Via'];
        $country = $row['Provincia'];
        $cap = $row['CAP'];
        $_SESSION['name'] = $name;
        $_SESSION['surname'] = $surname;
        $_SESSION['email'] = $email;
        $_SESSION['address'] = $address;
        $_SESSION['country'] = $country;
        $_SESSION['cap'] = $cap;
        //setcookie('name' ,$name, time() + (86400 * $days));
        //setcookie('mail' ,$email, time() + (86400 * $days));
        //require_once '/~S4334970/SauceForYou/php/setCookies.php';
        header('location: /~S4334970/SauceForYou/nav/userAccount.php');
    }
    else {
        array_push($errors, "Accesso rifiutato");
        header ('location: /~S4334970/SauceForYou/nav/login.php'); 
    }  
} 
    $_SESSION['errors-log'] = $errors;
    $mysqli->close();
?>
<?php

    session_start();
    //load phpmailer:
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require_once(__DIR__ . '/includes/PHPMailer/src/Exception.php');
    require_once(__DIR__ . '/includes/PHPMailer/src/PHPMailer.php');
    require_once(__DIR__ . '/includes/PHPMailer/src/SMTP.php');

    //includo il file per il collegamento al db
    require_once(__DIR__ . '/dbConn.php');

    $mail = new PHPMailer(true);

    $message = array();
    //header (location:'/~S4334970/mailer/index.php'); 
    try {
        //CodSconto da salvare sul db!!!!
        $codSconto = rand(10000,1000000000);
        
        //Server settings
        //$mail->SMTPDebug = 2;                                  
        $mail->isSMTP();                                        
        $mail->Host = 'ssl://smtp.gmail.com';                   // Specify main and backup SMTP servers
        $mail->Port = 465;                                      // TCP port to connect to
        // 
        //Mail settings                              
        $mail->Username = 'sauceforyou2019@gmail.com';                 // SMTP username
        $mail->Password = 'spinaxomis';                                // SMTP password
        $mail->SMTPSecure = 'ssl';                                     // SSL Mode
        $mail->SMTPAuth   = true;

        //connessione al db-mysql
        $con = mysqli_connect('127.0.0.1', 'S4334970', 'spinaxomis2018', 'S4334970');
        mysqli_select_db($con,'mailnewsletter');
        $email = $_POST['email-newsletter'];

        $query = 'SELECT * FROM mailnewsletter WHERE Email=?';
        $mysqli = new mysqli('127.0.0.1', 'S4334970', 'spinaxomis2018', 'S4334970');

        if($stmt = $mysqli->prepare($query)){
            $stmt->bind_param('s', $email);
            $stmt->execute();
            $stmt->store_result();
            $num_row = $stmt->num_rows;
            //$stmt->bind_result($email);
            $stmt->fetch();
            $stmt->close();
        }else die("failed to check query");         //LEVARE! SOLO PER VEDERE SE VA

        if($num_row >= 1){
            //Bisogna stampare che la mail è già iscritta e rimandarlo alla home.
            array_push($message, "Email già esistente.");
        }else{
            $addEmail = "INSERT INTO mailnewsletter(Email,codSconto) VALUES('$email','$codSconto')";
            mysqli_query($con,$addEmail);
            //Recipients
            $mail->setFrom('donotreply@sauceforyou.com', 'SauceForYou');
            $mail->addAddress($email);
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'SauceForYou-Newsletter';
            $mail->Body    = "
                            <body>
                            Benvenuto in SauceForYou,<br>
                            per te che ti sei iscritto alla newsletter abbiamo 
                            riservato un sacco di sconti, inizia a risparmiare il 50% con il codice:
                            $codSconto
                            </body>
                            ";
            $mail->send(); 
            array_push($message,"Messaggio inviato.");
                }
        }catch(Exception $e){
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo; }

        $_SESSION['message'] = $message;
        header ('location: /~S4334970/SauceForYou/index.php');   //Bisogna mettere la home!!!
?>
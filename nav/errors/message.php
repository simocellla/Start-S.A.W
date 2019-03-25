<?php
    ini_set('display_errors', 'Off');
    $result = array();
    if(empty($_POST['message'])){
        $result = $_SESSION['message'];
    }
?>
<?php foreach($result as $message) : ?>
        <p><?php echo $message ?></p>
<?php endforeach; //session_destroy();?>  
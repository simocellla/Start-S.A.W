<?php
    ini_set('display_errors', 'Off');
    $result = array();
    if(empty($_POST['messages'])){
        $result = $_SESSION['messages'];
    }
?>
<?php foreach($result as $message) : ?>
        <p><?php echo $message ?></p>
<?php endforeach; unset($_SESSION['messages']);?>
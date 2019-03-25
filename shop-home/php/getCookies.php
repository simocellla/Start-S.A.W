<?php 
    if(isset($_COOKIE['name'])) {
        $name = $_COOKIE['name'];
    }
    if(isset($_COOKIE['email'])) {
        $_SESSION['email'] = $_COOKIE['email']; 
    }
?>
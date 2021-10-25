<?php
    session_start();
    if(!isset($_SESSION['loginSuccess'])){
        header('Location: ./signin.php');
    }
?>
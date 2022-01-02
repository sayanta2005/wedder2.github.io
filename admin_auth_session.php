<?php
    session_start();
    if(!isset($_SESSION['adminuser'])) {
        header("Location: adminlogin.php");
        exit();
    }
?>
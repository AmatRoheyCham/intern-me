<?php
    session_start();
    if (isset($_SESSION['admin'])) {
        $_SESSION = array();
        setcookie("admin",$row['username'],time() -36000);
        header("location: ./login.php");
    }
?>
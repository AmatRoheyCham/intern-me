<?php
    session_start();
    if (isset($_SESSION['companyName']) || isset($_SESSION['username'])){
        $_SESSION = array();
        setcookie("companyName",$row['username'],time()-36000);
        setcookie("username",$row['username'],time()-36000);
        header("location: index.php");

    }
?>
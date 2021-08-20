
<?php

define("SITEURL", "http://localhost/intern-me/");

// Dev Conn
    // $dbUser = "root";
    // $dbPassword = "";
    // $dbHost = "localhost";
    // $dbName = "intern_me";

    // Remote Conn
    $dbUser = "L8xoD85YLF";
    $dbPassword = "Ar7DbLD6l1";
    $dbHost = "remotemysql.com";
    $dbName = "L8xoD85YLF";

    try{
    $dbConnection = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);
    mysqli_set_charset($dbConnection, 'utf-8');
    }
    catch(Exception $e){
        print "database exception:". $e->getMessage();
    }
    catch(Error $e){
        print "Error unknown occured:". $e->getMessage();

    }


?>
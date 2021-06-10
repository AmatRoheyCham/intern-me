
<?php

    $dbUser = "root";
    $dbPassword = "rohey593";
    $dbHost = "localhost";
    $dbName = "intern_me";

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
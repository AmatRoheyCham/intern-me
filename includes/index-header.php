<?php
    session_start();
    if (isset($_SESSION['companyName'])){
        $_SESSION['already-logged-in'] = '
        <div class="alert container alert-success alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>logged in SuccessFully!</strong>
      </div>
        ';
    }
    else if (isset($_SESSION['username'])) {
        $_SESSION['already-logged-in'] = '
        <div class="alert container alert-success alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>logged in SuccessFully!</strong>
        </div>
        ';
    }
    if (isset($_SESSION['not-logged-in'])) {
        echo $_SESSION['not-logged-in'];
        unset($_SESSION['not-logged-in']);
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <script src="libraries\custom\script.js"></script>
  <link rel="stylesheet" href="libraries\custom\style.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- SEMANTIC UI CSS -->
    <link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
    <!-- SEMANTIC UI JS -->
    

<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>intern-me</title>
</head>
<body >
    <div >
      <!-- Nav Begins -->
      <nav class="navbar navbar-expand-lg navbar-light bg-dark text-white fixedtop pt-3">
            <div class="container">
                <a class="navbar-brand text-warning text-bold" href="index.php">INTERN~ME</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
				
                <div class="navbar-nav">
                    <a class="nav-item nav-link active mr-2 text-white" style="color:rgb(6,6,6);" href="login.php">Login</a>
                    <button type="button" class="btn btn-outline-warning border-4" onclick=' location.href="signup.php" '>
                    <a href="signup.php" class="text-warning">Sign up</a>
                    </button>
                </div>
                </div>
            </div>
        </nav>
      <!-- Nav Ends -->





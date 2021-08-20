<?php
    session_start();
    require_once("../const/mysqli-connection.php");
    if (isset($_SESSION['already-logged-in'])) {
      echo $_SESSION['already-logged-in'];
      unset($_SESSION['already-logged-in']);
  }
  if (!isset($_SESSION['username'])) {
    $_SESSION['not-logged-in'] = '
    <div class="alert container mt-4 mb-0 alert-warning alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>You Must Log in to Access Students panel!!</strong>
  </div>
    ';
    header("location:../index.php");
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
  <link rel="stylesheet" href="../libraries/custom/style.css">
  <link rel="stylesheet" href="../libraries/custom/stylo.css">

<!-- BOOTSTRAP -->
  <link rel="stylesheet" href="../libraries\bootstrap5\css\bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="../plugins/sweetalert2/sweetalert2.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="../plugins/toastr/toastr.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- SEMANTIC UI CSS -->
  <link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
      <!-- SEMANTIC UI JS -->
    <script
src="https://code.jquery.com/jquery-3.1.1.min.js"
integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
crossorigin="anonymous"></script>
<script src="semantic/dist/semantic.min.js"></script>


<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>intern-me</title>
</head>
<body class="">
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
                
                    <!-- <a class="nav-item nav-link active mr-2 text-white" href="view-companies.php">Companies</a>
                    <a class="nav-item nav-link active mr-2 text-white" href="view-mentors.php">Mentors</a> -->
                    <a class="nav-item btn btn-outline-warning nav-link  mr-2 text-white" href="../students/recent-applications.php">My Applications</a>
                    <a class="nav-item btn btn-outline-warning nav-link  mr-2 text-white" href="../students/interviews.php">Interviews</a>
                    <a class="nav-item nav-link active mr-2 text-warning" href=""><i class="fa fa-user-circle"></i></a>
                    <button type="button" class="btn btn-outline-warning" onclick=' location.href="../logout.php" '>Logout</button>
                </div>
                </div>
            </div>
        </nav>
      <!-- Nav Ends -->
    </div>




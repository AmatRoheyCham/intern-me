<?php
    session_start();
    require_once("../const/mysqli-connection.php");
    if (isset($_SESSION['already-logged-in'])) {
        echo $_SESSION['already-logged-in'];
        unset($_SESSION['already-logged-in']);
    }
 
    if (!isset($_SESSION['companyName'])) {
        $_SESSION['not-logged-in'] = '
        <div class="alert container mt-4 mb-0 alert-warning alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>You Must Log in to Access Companies panel!!</strong>
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
  <link rel="stylesheet" href="libraries/custom/stylo.css">
  <!-- Bootstraap -->
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="../plugins/sweetalert2/sweetalert2.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="../plugins/toastr/toastr.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
     <!-- SEMANTIC UI CSS -->
<!-- Semantic Ui -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js" integrity="sha512-dqw6X88iGgZlTsONxZK9ePmJEFrmHwpuMrsUChjAw1mRUhUITE5QU9pkcSox+ynfLhL15Sv2al5A0LVyDCmtUw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" integrity="sha512-8bHTC73gkZ7rZ7vpqUQThUDhqcNFyYi2xgDgPDHc+GXVGHXq+xPjynxIopALmOPqzo9JZj0k6OqqewdGO3EsrQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 

<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>intern-me</title>

</head>
<body>
    <div >
      <!-- Nav Begins -->
      <nav class="navbar navbar-fixed-top navbar-expand-lg navbar-light bg-dark text-white fixedtop pt-3">
            <div class="container">
                <a class="navbar-brand text-warning text-bold" href="index.php">INTERN~ME</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">       
                    <a class="nav-item nav-link active mr-2 text-warning" href=""><i class="fa fa-user-circle">Profile</i></a>
                    <button type="button" class="btn btn-outline-warning mx-1" onclick=' location.href="post_internship.php" '> <i class="fas fa-plus"></i> Post Internship</button>
                    <button type="button" class="btn btn-outline-warning ml-5" onclick=' location.href="../logout.php" '>Logout</button>
                </div>
                </div>
            </div>
        </nav>
      <!-- Nav Ends -->
    
    </div>
    




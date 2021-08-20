<?php
    session_start();    
    require_once("../const/mysqli-connection.php");
    if (!isset($_SESSION['admin'])) {
        $_SESSION['not-logged-in'] = '
        <div class="alert container mt-4 mb-0 alert-warning alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>You Must Log in to Access ADMIN panel!!</strong>
      </div>
        ';
        header("location:./login.php");
    }
    if (isset($_SESSION['already-logged-in'])) {
        echo $_SESSION['already-logged-in'];
        unset($_SESSION['already-logged-in']);
      }
    // if (isset($_SESSION['login-success'])) {
    //     echo $_SESSION['login-success'];
    //     unset($_SESSION['login-success']);
    //   }
   

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
  <script src="./admin.js"></script>
  <link rel="stylesheet" href="libraries\custom\style.css">
  <link rel="stylesheet" href="libraries/custom/stylo.css">
  <link rel="stylesheet" href="./admin.css">

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
<!-- <script src="semantic/dist/semantic.min.js"></script> -->
  


<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>intern-me</title>
</head>
<body >
    <!-- SideBar -->
    <div id="mySidebar" class="sidebar bg-dark">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href="./index.php"><i class="fas fa-chart-line m-2"></i>DashBoard</a>
    <a href="./companies.php"><i class="fas fa-building m-2"></i>Companies</a>
    <a href="students.php"><i class="fas fa-user-cog m-2"></i>Students</a>
    <a href="mentors.php"><i class="fas fa-user-tie m-2"></i>Mentors</a>
    <a href="categories.php"><i class="fa fa-list-alt m-2"></i>All Categories</a>
    </div>

    <div >
      <!-- Nav Begins -->
      <nav class="navbar navbar-expand-lg navbar-light bg-dark text-white fixedtop pt-3">
      <button class="openbtn rounded-circle ml-1" onclick="openNav()"><i class="fas fa-bars rounded-circle"></i></button>  
            <div class="container">
                <a class="navbar-brand text-warning text-bold" href="index.php">INTERN~ME</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
				
                <div class="navbar-nav">
                    <!-- <button type="button" class="btn btn-outline-warning mx-1" onclick=' location.href="" '> Manage Users <i class="fas fa-pen"></i></button>
                    <button type="button" class="btn btn-outline-warning mx-1" onclick=' location.href="" '> Manage Posts <i class="fas fa-pen"></i></button> -->
                    <a class="nav-item nav-link active mr-2 text-secondary" href="">profile</a>
                    <button type="button" class="btn btn-outline-warning" onclick=' location.href="../admin/logout.php" '>Log Out</button>
                </div>
                </div>
            </div>
        </nav>
      <!-- Nav Ends -->
    
<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>
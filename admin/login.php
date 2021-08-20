<?php
  session_start();
  if (isset($_SESSION['admin'])) {
    $_SESSION['already-logged-in'] = '
    <div class="alert container mt-4 mb-0 alert-warning alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>You Are Already logged in As Admin!!</strong>
  </div>
    ';
    header("location:./index.php");
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
<body>
    
<div class="login-form container w-50 py-4">
      <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Login <small>to Intern~Me</small> As Admin</h3>
      </div>
    <form class="form-horizontal" method="POST" action="">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input required type="email" name="email" class="form-control" id="" value="<?php if(isset($_POST['email'])){echo $_POST['email']; } ?>" placeholder="Email" >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input required type="password" name="password" class="form-control" id="" placeholder="Password">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name='signin' class="btn btn-info" >Sign in</button>
                  <button type="submit" name='cancel' class="btn btn-outline-warning float-right" onclick=' location.href="" '>Cancel</button>
                </div>
                <!-- /.card-footer -->
              </form>
    </div>



</body>
</html>

<?php 


  if (isset($_POST['signin'])) {
    include("../const/mysqli-connection.php");
    $email = mysqli_real_escape_string($dbConnection, trim($_POST['email']));
    $password = mysqli_real_escape_string($dbConnection, trim($_POST['password']));
    
    if(!empty($email) && !empty($password)){
        
      $query = "SELECT * FROM admin WHERE email = '$email' && password='$password' ";
      $result = mysqli_query($dbConnection, $query);
      $count = mysqli_num_rows($result);
      if ($count == 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['admin'] = $row['username'];
        $_SESSION['userId'] = $row['id'];
        $_SESSION['login-success'] = '
        <div class="alert container alert-success alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>logged in SuccessFully!</strong>
      </div>';
        setcookie("admin",$row['username'],time()+(60*60*24*3));
        header("location: ../admin/index.php");
      }
      else{
        echo '  <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>You Probably Entered an invalid credential</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
      }    
                 
    }

  }

?>

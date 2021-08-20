<?php
  session_start();
  if (isset($_POST['signin'])) {  
    # code...
    include('const/mysqli-connection.php');
    $email =  mysqli_real_escape_string($dbConnection, trim($_POST['email']));
    $password =  mysqli_real_escape_string($dbConnection, trim($_POST['password']));
    $table =  mysqli_real_escape_string($dbConnection, trim($_POST['type']));

    if(!empty($email) && !empty($password)){
    $query = "SELECT * FROM $table WHERE email='$email' AND password='$password'
    ";
    $result = mysqli_query($dbConnection, $query);
    $count  = mysqli_num_rows($result);
    if ($count==1) {
      # code...
      // creating session
      $row = mysqli_fetch_assoc($result);
        if ($table=="companies") {
          $_SESSION['companyName'] = $row['company_name'];
          $_SESSION['email'] = $row['email'];
          $_SESSION['companyId'] = $row['id'];
          $_SESSION['userType'] = $table;
          setcookie("companyName",$row['username'],time()+(60*60*24*3));
        }
        else{
        $_SESSION['username'] = $row['username'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['userId'] = $row['id'];
        $_SESSION['userType'] = $table;
        setcookie("username",$row['username'],time()+(60*60*24*3));
        }

        $_SESSION['login-success'] = '
        <div class="alert container alert-success alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>logged in SuccessFully!</strong>
      </div>';


      header("location: $table/");

    //   echo "<script type='text/javascript'>window.location.href='$table/'</script>";
      // echo "login success";
    } 
    else{
      
      $_SESSION['loginFailed'] = '
      <div class="alert container alert-danger alert-dismissible fade show">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>You Probably entered Invalid Credentials</strong>
    </div>
      ';
      header("location:login.php");
    }

  }

 



  }

?>
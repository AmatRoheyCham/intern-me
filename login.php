<?php 
    include('includes/index-header.php');   
    if (isset($_SESSION['loginFailed'])) {
      # code...
      echo $_SESSION['loginFailed'];
      unset($_SESSION['loginFailed']);

    }
    if (isset($_SESSION['userType'])) {
      $redirect = $_SESSION['userType'];
      $_SESSION['already-logged-in'] = '
      <div class="alert container mt-4 mb-0 alert-warning alert-dismissible fade show">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>You Are Already logged In !!</strong>
    </div>
      ';
      header("location: $redirect/");
    }
  
?>
<?


?>

    <div class="login-form container w-50 py-4">
      <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Login <small>to Intern~Me</small></h3>
      </div>
    <form class="form-horizontal" method="POST" action="process-login.php">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input required type="email" name="email" class="form-control" id="" value="<?php if(isset($_POST['email'])){echo $_POST['email']; } ?>" placeholder="Email" >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="type" class="col-sm-2 col-form-label">Type</label>
                    <div class="col-sm-10">
                      <select  class="form-control" name="type" id="">
                        <option value="students">Student</option>
                        <option value="companies">Company</option>
                        <option value="mentors">Mentor</option>
                      </select>
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
                  <button type="submit" name='signin' class="btn btn-info">Sign in</button>
                  <button type="button" name='cancel' class="btn btn-outline-warning float-right" onclick=' location.href="index.php" '>Cancel</button>
                </div>
                <!-- /.card-footer -->
              </form>
    </div>



    
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
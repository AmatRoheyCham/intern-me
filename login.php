<?php 
    include('includes/index-header.php')
   
?>

    <div class="login-form container w-50 py-4">
      <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Login <small>to Intern~Me</small></h3>
      </div>
    <form class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Type</label>
                    <div class="col-sm-10">
                      <select  class="form-control" name="type" id="">
                        <option value="">Student</option>
                        <option value="">Company</option>
                        <option value="">Mentor</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck2">
                        <label class="form-check-label" for="exampleCheck2">Remember me</label>
                      </div>
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
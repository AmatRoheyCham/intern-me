<?php 
    include('includes/index-header.php')
?>

<body onload = "hideForms()">
  
<div class="container w-50 py-4">
  <div class="p-2">
    <p><b>SignUp as 
    <button type="button" class="btn btn-default" onclick="displayStudentSignup()">Student</button>
    <button type="button" class="btn btn-default" onclick="displayCompanySignup()">Company</button>
    <button type="button" class="btn btn-default" onclick="displayMentorSignup()">Mentor</button>
  </b></p>
  </div>
<section class="content">
      <div class="container">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">SignUp <small>to Intern~Me</small></h3>
              </div>
              <!-- /.card-header -->
              <!--Students form start -->
              <form style="display:none;  role="form" id="studentsForm"  novalidate="novalidate">
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">First Name</label>
                    <input type="email" name="first-name" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Last Name</label>
                    <input type="email" name="last-name" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="email" name="username" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">password</label>
                    <input type="email" name="password" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Repeat password</label>
                    <input type="email" name="repeat-password" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Major</label>
                    <input type="password" name="major" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Transcript</label>
                    <input type="file" name="transcript" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">CV</label>
                    <input type="file" name="cv" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group mb-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                      <label class="custom-control-label" for="exampleCheck1">I agree to the <a href="#">terms of service</a>.</label>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name='signup' class="btn btn-primary">Submit</button>
                  <button type="button" name='cancel' class="btn btn-outline-warning float-right" onclick=' location.href="index.php" '>Cancel</button>
                </div>
              </form>
              <!-- STUDENTS FORM ENDS -->

              <!-- COMPANIES FORM BEGINS -->
              <form style="display:none;" role="form" id="companiesForm"  novalidate="novalidate">
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Company Name</label>
                    <input type="email" name="first-name" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Repeat password</label>
                    <input type="password" name="repeat-password" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Business Category</label>
                    <input type="text" name="major" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Location</label>
                    <input type="text" name="transcript" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Description / About </label>
                    <textarea name="description" id="" cols="70" rows="10"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">profile / Logo</label>
                    <input type="file" name="transcript" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group mb-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                      <label class="custom-control-label" for="exampleCheck1">I agree to the <a href="#">terms of service</a>.</label>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name='signup' class="btn btn-primary">Submit</button>
                  <button type="button" name='cancel' class="btn btn-outline-warning float-right" onclick=' location.href="index.php" '>Cancel</button>
                </div>
              </form>

              <!-- COMPANIES FORM ENDS HERE -->


              
              <!-- Mentors FORM BEGINS -->
              <form style="display:none;" role="form" id="mentorsForm"  novalidate="novalidate">
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">First Name</label>
                    <input type="email" name="first-name" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Last Name</label>
                    <input type="email" name="last-name" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="email" name="username" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">password</label>
                    <input type="email" name="password" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Repeat password</label>
                    <input type="email" name="repeat-password" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Profile Pic</label>
                    <input type="password" name="major" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  <div class="form-group mb-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                      <label class="custom-control-label" for="exampleCheck1">I agree to the <a href="#">terms of service</a>.</label>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name='signup' class="btn btn-primary">Submit</button>
                  <button type="button" name='cancel' class="btn btn-outline-warning float-right" onclick=' location.href="index.php" '>Cancel</button>
                </div>
              </form>

              <!-- MENTORS FORM ENDS HERE -->

            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
</div>






<script src="libraries\custom\script.js"></script>
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
<?php include('includes/students-header.php') ?>


<div class="container w-50 py-4">
<section class="content">
      <div class="container">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Apply to companyName</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="quickForm"  novalidate="novalidate">
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">First Name</label>
                    <input type="email" name="first-name" class="form-control" id="exampleInputEmail1" placeholder="firstname">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Last Name</label>
                    <input type="email" name="last-name" class="form-control" id="exampleInputEmail1" placeholder="lastname">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Major</label>
                    <input type="password" name="major" class="form-control" id="exampleInputPassword1" placeholder="Major">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Transcript</label>
                    <input type="file" name="transcript" class="form-control" id="exampleInputPassword1" placeholder="transcrips">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">CV</label>
                    <input type="file" name="cv" class="form-control" id="exampleInputPassword1" placeholder="Curriculum vitae">
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
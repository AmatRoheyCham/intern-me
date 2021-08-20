<?php include('includes/students-header.php') ?>


<?php
  include_once('../const/mysqli-connection.php');
  $companyName = mysqli_real_escape_string($dbConnection,trim($_GET['companyName']));
  $query = "SELECT * FROM companies WHERE company_name = '$companyName'";
  $result = mysqli_query($dbConnection, $query);
  $row = mysqli_fetch_assoc($result);
  $companyId = $row['id'];

  $userId = $_SESSION['userId'];
  $queryStudent = "SELECT * FROM students WHERE id = '$userId' ";
  $studentResult = mysqli_query($dbConnection, $queryStudent);
  $studentRow = mysqli_fetch_assoc($studentResult);
  $studentName = $studentRow['first_name']." ".$studentRow['last_name'];
  $studentMajor = $studentRow['major'];
  $studentEmail = $studentRow['email'];


?>


<div class="container w-50 py-4">
<section class="content">
      <div class="container">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Confirm Applying to <?php echo $companyName?></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="quickForm" action="./process-application.php" method="POST" novalidate="novalidate">
                <div class="card-body">
                <div class="form-group">
                    <label for="">Your Name</label>
                    <input readonly value="<?php echo $studentName; ?>" type="text" name="student-name" class="form-control" id="" placeholder="full-name">
                  </div>
                  <div class="form-group">
                    <label for="">Company Name</label>
                    <input readonly value="<?php echo $companyName; ?>" type="text" name="company-name" class="form-control" id="" placeholder="company-name">
                  </div>
                  <div class="form-group">
                    <label for="">Email address</label>
                    <input readonly value="<?php echo $studentEmail; ?>" type="" name="email" class="form-control" id="" placeholder="email">
                  </div>
                  <div class="form-group">
                    <label for="">Major</label>
                    <input readonly value="<?php echo $studentMajor; ?>" type="text" name="major" class="form-control" id="" placeholder="Major">
                  </div>
                  <div class="form-group">
                    <label for="">Why should you be considered in few sentence!!</label>
                    <input  value="" type="text" name="description" class="form-control" id="" placeholder="why considering you">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                <input type="hidden" name="userId" value="<?php echo $userId?>">
                <input type="hidden" name="companyId" value="<?php echo $companyId?>">

                  <button type="submit" name='apply' class="btn btn-primary">Submit</button>
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
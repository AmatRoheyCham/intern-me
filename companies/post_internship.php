<?php 
 include('includes/companies-header.php') ;
//  if (isset($_SESSION['companyName'])) {
//    echo $_SESSION['companyName'];
//  }
  
 ?>


<div class="container w-50 py-4">
<section class="content">
      <div class="container">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Advertise Internship Here</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="./process-post.php" >
                <div class="card-body">
                <div class="form-group">
                    <label for="">Title</label>
                    <input required type="text" name="title" class="form-control" id="" placeholder="title" value="<?php if (isset($_POST['title'])) {  echo $_POST['title'];  } ?>" >
                  </div>
                  <div class="form-group">
                    <label class="row" for="type" class="col-sm-2 col-form-label">Category</label>
                    <div class="">
                      <select  class="form-control" name="category" id="">
                      <?php
                      include_once('../const/mysqli-connection.php');
                        $selectCategories = "SELECT * FROM business_categories";
                        $selectResut = mysqli_query($dbConnection,$selectCategories);
                        while ($row = mysqli_fetch_assoc($selectResut)) {
                          ?>
                            <option value="<?php echo $row['category_name']?>"><?php echo $row['category_name']?></option>
                          <?php
                        }
                      ?>

                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="row" for="">Description</label>
                    <textarea name="description" class="form-control" id="" cols="70" rows="10">
                    <?php if (isset($_POST['description'])) {
                      # code...
                      echo $_POST['description'];
                    }?>
                     </textarea>
                  </div>
                  <div class="form-group">
                    <label class="row" for="">Requirements (Comma Separated!!)</label>
                    <textarea name="requirements" class="form-control" id="" cols="70" rows="5">
                    <?php if (isset($_POST['requirements'])) {
                      # code...
                      echo $_POST['requirements'];
                    }?>
                     </textarea>
                  </div>
                  <div class="form-group">
                    <label for="">DeadLine</label>
                    <input required type="Date" name="deadline" class="form-control" id="" placeholder="DeadLine" <?php if (isset($_POST['deadline'])) {  echo $_POST['deadline'];  } ?>>
                  </div>
                
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name='post-internship' class="btn btn-primary">Submit</button>
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
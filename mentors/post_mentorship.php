<?php  include('includes/mentors-header.php');
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
                <h3 class="card-title">Post Mentorships & career Advice</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="quickForm" method="POST" action="process-post.php"  novalidate="novalidate">
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" name="title" class="form-control" id="" placeholder="Post Title">
                  </div>
                  <div class="form-group">
                    <label class="row" for="type" class="col-sm-2 col-form-label">Category</label>
                    <div class="">
                      <select  class="form-control" name="category" id="">
                      <?php
                      include_once('../const/mysqli-connection.php');
                        $selectCategories = "SELECT * FROM mentorship_category";
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
                    <label for="exampleInputEmail1">Post</label>
                    <textarea class="form-control" name="post" id="" cols="70" rows="10"></textarea>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name='post-mentorship' class="btn btn-primary">Submit</button>
                  <button type="button" name='cancel' class="btn btn-outline-warning float-right" onclick=' location.href="mentors.php" '>Cancel</button>
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
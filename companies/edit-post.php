<?php
include('includes/companies-header.php');

?>

<?php   
    if (isset($_GET['editId'])) {
        include_once("../const/mysqli-connection.php");
        $editId = $_GET['editId'];
        $query = "SELECT * FROM intern_post Where id = $editId";
        $result = mysqli_query($dbConnection,$query);
        $row = mysqli_fetch_assoc($result);
        $title = $row['title'];
        $category = $row['category'];
        $description = $row['description'];
        $deadline = $row['deadline'];
        $requirements = $row['requirements'];
    }

?>

<section class="content m-4">
      <div class="container w-50">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit Internship </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="./process-post.php" >
                <div class="card-body">
                <div class="form-group">
                    <label for="">Title</label>
                    <input required type="text" name="title" class="form-control" id="" placeholder="title" value="<?php echo $title ?>" >
                  </div>
                  <div class="form-group">
                    <label class="row" for="type" class="col-sm-2 col-form-label">Category</label>
                    <div class="">
                      <select  class="form-control" name="category" id="">
                        <option value="it">I.T</option>
                        <option value="ecomics">Economics</option>
                        <option value="physics">Physics</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="row" for="">Description</label>
                    <textarea name="description" class="form-control" id="" cols="70" rows="10">
                    <?php echo $description?>
                     </textarea>
                  </div>
                  <div class="form-group">
                    <label class="row" for="">Requirements (Comma Separated!!)</label>
                    <textarea name="requirements" class="form-control" id="" cols="70" rows="5">
                    <?php echo $requirements?>
                     </textarea>
                  </div>
                  <div class="form-group">
                    <label for="">DeadLine</label>
                    <input required type="Date" name="deadline" class="form-control" id="" placeholder="DeadLine" <?php echo $deadline ?>>
                  </div>
                
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name='edit-internship' class="btn btn-primary">Submit</button>
                  <input type="hidden" name="editId" value="<?php echo $editId?>">
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
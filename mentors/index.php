<?php 
include('includes/mentors-header.php');

if (isset($_SESSION['mentorship-post-success'])) {
  echo $_SESSION['mentorship-post-success'];
  unset($_SESSION['mentorship-post-success']);
}
if (isset($_SESSION['mentorship-delete-success'])) {
  echo $_SESSION['mentorship-delete-success'];
  unset($_SESSION['mentorship-delete-success']);
}
?>

 <!-- MAIN section Begins -->

    <!-- Dashboard Stuffs -->
 <div class="container pt-4">
 <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>10</h3>

                <p>Recent Posts</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53</h3>

                <p>Total Likes</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>Total Ratings</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>4</h3>

                <p>Requests</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
 </div>

 <!-- Dashboard Stuffs Ends -->

    <div class="container">
    <h2 class=" pt-3 border-bottom text-center">MY RECENT MENTORSHIPS POST</h2>
    <div class="py-3 mx-5">

    <?php
    include_once("../const/mysqli-connection.php");
    $mentorId = $_SESSION['userId'];
    $query = "SELECT * FROM mentorships WHERE mentor_id = $mentorId ORDER BY post_date";
    $result = mysqli_query($dbConnection, $query);
    
    while ($row = mysqli_fetch_assoc($result)) {
      $id = $row['id'];
      $title = $row['title'];
      $category = $row['mentorship_category'];
      $post = $row['post'];
      $date = $row['post_date'];

      ?>
        <div class="pt-4 card mt-5">
        <div class="accordion-collapse collapse shadow-lg show" id="collapse1" aria-labelledby="heading1" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <div class="row justify-content-center-center">
            <div class="col-12 col-sm-2">
            <i class="fas fa-chalkboard-teacher fa-3x"></i>
            </div>
            <div class="col-12 col-sm-9 mt-4 mt-sm-0 d-sm-block d-flex flex-column">
              <ul>
                <h4 class="fw-semi-bold text-black"><strong class="text-warning"><?php echo $title?></strong></h4>
              </ul>
                <p><?php echo $post?></p>
              <div class="card-footer">
                <a class="btn btn-outline-success btn-sm"data-toggle="modal" data-target="#myEditModal"><i class="fas fa-pen">Edit</i></a>
                <a class="btn btn-outline-danger btn-sm" href="process-delete.php?id=<?php echo $id?>"><i class="fas fa-trash">Delete</i></a>
              </div>
            </div>
          </div>
        </div>
        </div>
        </div>
      <?php
    }

    ?>
  </div>    
  </div>

   <!-- Modal ADD -->
   <div class="modal fade" id="myEditModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
        <h4>Update Post</h4>
            <form method="POST" action="process-edit.php">
            <fieldset class="">
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" value="<?php echo $title?>" name="title" class="form-control" id="" placeholder="Post Title">
                  </div>
                  <div class="form-group">
                    <label class="row" for="type" class="col-sm-2 col-form-label">Category</label>
                    <div class="">
                      <select  class="form-control" name="category" value="<?php echo $category?>" id="">
                        <option value="it">I.T</option>
                        <option value="ecomics">Economics</option>
                        <option value="physics">Physics</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Post</label>
                    <textarea class="form-control" name="post" id="" cols="70" rows="10">value="<?php echo $post?>"</textarea>
                  </div>
                </div>
                <input type="hidden" name="id" value="<?php echo $id?>">            
                <button type="submit"  name="update-mentorship" class="btn btn-success"><i class="fas fa-check">Update</i></button>
            </fieldset>
            </form>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- MODAL ADD ENDS -->


  

 <footer class="footer card text-center">
 <strong>Copyright © 2021 <a href=""> Intern~Me</a>.</strong> All rights
    reserved.
  </footer>

  <!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>

 <!-- jQuery CDN - Slim version (=without AJAX) -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>


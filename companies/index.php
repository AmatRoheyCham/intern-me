<?php
include('includes/companies-header.php');

$companyName =$_SESSION['companyName'];
$companyId = $_SESSION['companyId'];

if (isset($_SESSION['post-successful'])) {
  # code...
  echo $_SESSION['post-successful'];
}

?>

<!--  -->
  <div class="container-fluid py-3 bg-dark">
      <h2 class="text-center display-6 pt-1 text-white mt-5">Search Students by Major</h2>
      <div class="row">
          <div class="col-md-8 offset-md-2">
              <form action="">
                  <div class="input-group">
                      <input type="search" class="form-control form-control-lg" name="searchText" placeholder="Type your keywords here">
                      <div class="input-group-append">
                          <button type="submit" class="btn btn-lg btn-default base1">
                              <i class="fa fa-search"></i>
                          </button>
                      </div>
                  </div>
              </form>
          </div>
      </div>
  </div>

<!-- search includes ends -->


 <div class="container pt-4">
 <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <?php
              include_once('../const/mysqli-connection.php');
              $queryPost = "SELECT * FROM intern_post WHERE company_name = '$companyName'";
              $postResult = mysqli_query($dbConnection,$queryPost);
              $countPost = mysqli_num_rows($postResult);
              ?>
                <h3><?php echo $countPost?></h3>

                <p>Recent Posts</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="recent-post.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">

              <?php
                include_once('../const/mysqli-connection.php');
                $queryApplication = "SELECT * FROM applications WHERE company_id = $companyId  AND is_accepted=0";
                $applicationResult = mysqli_query($dbConnection,$queryApplication);
                $countApplication = mysqli_num_rows($applicationResult);
              ?>
                <h3><?php echo $countApplication?></h3>

                <p>New Applications</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="new-applications.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">

              <?php
                include_once('../const/mysqli-connection.php');
                $queryInterview = "SELECT * FROM interviews WHERE company_id = $companyId";
                $interviewResult = mysqli_query($dbConnection,$queryInterview);
                $countInterview = mysqli_num_rows($interviewResult);
              ?>
                <h3><?php echo $countInterview?></h3>


                <p>Upcoming Interviews</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="interviews.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>0</h3>

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


  


 <div class="container pt-4">
 <!-- New Registered Companies  -->
 <div class="card pt-4 shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">New Internship Applications</h6>
    </div>
    <div class="card-body">
        <table class="table table-secondary">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">First</th>
              <th scope="col">Last</th>
              <th scope="col">email</th>
              <th scope="col">Major</th>
              <th scope="col">CV</th>
              <th scope="col">Transcript</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
          <?php
            include_once("../const/mysqli-connection.php");

          $query = "SELECT * FROM students INNER JOIN applications ON students.id=applications.student_id WHERE applications.is_accepted=0 
          AND company_name = '$companyName' LIMIT 7";
          $result = mysqli_query($dbConnection, $query);
          // $row1 = mysqli_fetch_assoc($result);
          // print_r($row1);
          while ($row = mysqli_fetch_assoc($result)) {
            $firstName = $row['first_name'];
            $lastName = $row['last_name'];
            $id = $row['id'];
            // $_SESSION['studentId'] = $row['student_id'];
            $studentId = $row['student_id'];
            $email = $row['email'];
            $major = $row['major'];
            $transcript = $row['student_transcript'];
            $cv = $row['student_cv'];
            
            ?>


            <tr>
              <th scope="row"><?php echo $id?></th>
              <td><?php echo $firstName?></td>
              <td><?php echo $lastName?></td>
              <td><?php echo $email?></td>
              <td><?php echo $major?></td>
              <td><a href="../students/files/<?php echo $cv?>" target="_blank">Cv</a></td>
              <td><a href="../students/files/<?php echo $transcript?>" target="_blank">Transcript</a></td>
              <td>
                <a href="add-interview.php?studentAddId=<?php echo $studentId?>" class="btn btn-success" ><i class="fa fa-check"></i></a>
                <a href="reject-application.php?studentId=<?php echo $studentId?>" class="btn btn-danger"><i class="fas fa-window-close"></i></a>
                <!-- <a href="" class="btn btn-secondary">Read More</a> -->
              </td>
            </tr>
            <?php
          }

       
          ?>
          </tbody>
        </table>
        <h6 class="m-0 font-weight-bold text-primary pt-4"><a class="btn btn-outline-success" href="new-applications.php">See More Here</a></h6>
    </div>
</div>



 <footer class="footer text-center">
 <strong>Copyright © 2021 <a href="">  Intern~Me</a>.</strong> All rights
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

  </body>
  </html>


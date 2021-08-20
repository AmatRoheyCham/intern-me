<?php
include('includes/companies-header.php');

if (isset($_SESSION['interview-update-success'])) {
  echo $_SESSION['interview-update-success'];
  unset($_SESSION['interview-update-success']);
  
}
if (isset($_SESSION['interview-delete-success'])) {
  echo $_SESSION['interview-delete-success'];
  unset($_SESSION['interview-delete-success']);
  
}
if (isset($_SESSION['interview-add-success'])) {
  echo $_SESSION['interview-add-success'];
  unset($_SESSION['interview-add-success']);
  
}
?>

    <div class="container text-center">
       <!-- New Registered Companies  -->
 <div class="card pt-4 shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">upcoming Interviews</h6>
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
              <th scope="col">Date</th>
              <th scope="col">Time</th>
              <th scope="col">Action</th>

            </tr>
          </thead>
          <tbody>

<?php
  require_once("../const/mysqli-connection.php");
  $companyName = $_SESSION['companyName'];
  $companyId = $_SESSION['companyId'];
  $query = "SELECT * FROM students INNER JOIN interviews ON students.id = interviews.student_id  WHERE company_id = $companyId AND date >= NOW()";
  $result = mysqli_query($dbConnection, $query);
  while ($row = mysqli_fetch_assoc($result)) {
    $firstName = $row['first_name'];
    $lastName = $row['last_name'];
    $id = $row['id'];
    $_SESSION['studentId'] = $row['student_id'];
    $studentId = $row['student_id'];
    $email = $row['email'];
    $major = $row['major'];
    $transcript = $row['student_transcript'];
    $cv = $row['student_cv'];
    $interviewDate = $row['date'];
    $interviewTime = $row['time'];
    ?>

<tr>
              <th scope="row"><?php echo $id?></th>
              <td><?php echo $firstName?></td>
              <td><?php echo $lastName?></td>
              <td><?php echo $email?></td>
              <td><?php echo $major?></td>
              <td><a href="../students/files/<?php echo $cv?>" target="_blank">Cv</a></td>
              <td><a href="../students/files/<?php echo $transcript?>" target="_blank">Transcript</a></td>
              <td><?php echo $interviewDate?></td>
              <td><?php echo $interviewTime?></td>
              <td>
                <a href="interview-notify.php?stdId=<?php echo $studentId?>&amp;compId=<?php echo $companyId?>" class="btn btn-success">Notify</a>
                <a href="edit-interview.php?editId=<?php echo $id?>" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                <a href="process-interview.php?deleteId=<?php echo $id?>" class="btn btn-danger"><i class="fa fa-window-close"></i></a>
              </td>
            </tr>
    <?php
    

  }


?>
          </tbody>
        </table>
    </div>
    </div>

    <!--PAST INTERVIEWS  -->

    <div class="container text-center">
       <!-- New Registered Companies  -->
 <div class="card pt-4 shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-warning">Past Interviews</h6>
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
              <th scope="col">Date</th>
              <th scope="col">Time</th>
              <th scope="col">Action</th>

            </tr>
          </thead>
          <tbody>

<?php
  require_once("../const/mysqli-connection.php");
  $companyName = $_SESSION['companyName'];
  $companyId = $_SESSION['companyId'];
  $query = "SELECT * FROM students INNER JOIN interviews ON students.id = interviews.student_id  WHERE company_id = $companyId AND date <= NOW()";
  $result = mysqli_query($dbConnection, $query);
  while ($row = mysqli_fetch_assoc($result)) {
    $firstName = $row['first_name'];
    $lastName = $row['last_name'];
    $id = $row['id'];
    $_SESSION['studentId'] = $row['student_id'];
    $studentId = $row['student_id'];
    $email = $row['email'];
    $major = $row['major'];
    $transcript = $row['student_transcript'];
    $cv = $row['student_cv'];
    $interviewDate = $row['date'];
    $interviewTime = $row['time'];
    ?>

<tr>
              <th scope="row"><?php echo $id?></th>
              <td><?php echo $firstName?></td>
              <td><?php echo $lastName?></td>
              <td><?php echo $email?></td>
              <td><?php echo $major?></td>
              <td><a href="../students/files/<?php echo $cv?>" target="_blank">Cv</a></td>
              <td><a href="../students/files/<?php echo $transcript?>" target="_blank">Transcript</a></td>
              <td><?php echo $interviewDate?></td>
              <td><?php echo $interviewTime?></td>
              <td>
                <a href="interview-notify.php?stdId=<?php echo $studentId?>&amp;compId=<?php echo $companyId?>" class="btn btn-success">Notify</a>
                <a href="edit-interview.php?editId=<?php echo $id?>" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                <a href="process-interview.php?deleteId=<?php echo $id?>" class="btn btn-danger"><i class="fa fa-window-close"></i></a>
              </td>
            </tr>
    <?php
    

  }


?>
          </tbody>
        </table>
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

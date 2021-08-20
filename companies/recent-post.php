<?php
include('includes/companies-header.php');

if (isset($_SESSION['internship-post-success'])) {
  echo $_SESSION['internship-post-success'];
  unset($_SESSION['internship-post-success']);
  
}
if (isset($_SESSION['internship-delete-success'])) {
  echo $_SESSION['internship-delete-success'];
  unset($_SESSION['internship-delete-success']);
  
}
if (isset($_SESSION['internship-update-success'])) {
  echo $_SESSION['internship-update-success'];
  unset($_SESSION['internship-update-success']);
  
}
?>

<div class="container mt-3 pt-4">
    <h3 class="mt-3">Your most Recent Internship Posts</h3>
<?php
  include_once("../const/mysqli-connection.php");
  $companyName = $_SESSION['companyName'];
  $query = "SELECT * FROM intern_post WHERE  company_name = '$companyName' ORDER BY deadline";
  $result = mysqli_query($dbConnection, $query);
  while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    $title = $row['title'];
    $category = $row['category'];
    $description = $row['description'];
    $deadline = $row['deadline'];
    $requirements = $row['requirements'];
    ?>
       <div class="card">
        <div class="card-body">
          <h4 class="card-title"><b><?php echo $title ?></b></h4>
          <p class="card-text"><?php echo $description ?></p>
          <p class="card-text"><b>Requirements: <?php echo $requirements ?></b></p>
          <p class="card-text"><b>DeadLine: <?php echo $deadline ?></b></p>
          <a href="edit-post.php?editId=<?php echo $id?> " class="btn btn-warning card-link"><i class="fas fa-pen"></i></a>
          <a href="process-post.php?deleteId=<?php echo $id?> " class=" btn btn-danger card-link"><i class="fas fa-trash"></i></a>
        </div>
      </div>
    <?php 
  } 
?>


   
</div>



  <!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>


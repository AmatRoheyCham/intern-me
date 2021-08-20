<?php
include('includes/companies-header.php')
?>


<?php
    if (isset($_GET['studentAddId'])) {
        $studentId = $_GET['studentAddId'];
        $companyId = $_SESSION['companyId'];
        // echo "std id ".$studentId. " company id ".$companyId;
        // include_once('../const/mysqli-connection.php');
        // $query = "SELECT * FROM interviews WHERE id = $interviewId";
        // $result = mysqli_query($dbConnection, $query);
        // $row = mysqli_fetch_assoc($result);
        
    }


?>


<div class="container mt-4">
    <h4>Add Interview Here !!</h4>
    <form method="POST" action="process-interview.php">
  <fieldset class="w-50">
    <div class="mb-3">
      <label for="" class="form-label">Select Date:</label>
      <input type="date" name="date" id="" class="form-control" placeholder="date">
    </div>
    <div class="mb-3">
      <label for="" class="form-label"> Select Time: </label>
      <input type="time" id="" name="time" class="form-control" placeholder="time">
      <input type="hidden" name="studentId" value="<?php echo $studentId?>">
      <input type="hidden" name="companyId" value="<?php echo $companyId?>">
    </div>
   
    <button type="submit" name="add-interview" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
</div>
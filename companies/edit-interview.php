<?php
include('includes/companies-header.php')
?>


<?php
    if (isset($_GET['editId'])) {
        $interviewId = $_GET['editId'];
        include_once('../const/mysqli-connection.php');
        $query = "SELECT * FROM interviews WHERE id = $interviewId";
        $result = mysqli_query($dbConnection, $query);
        $row = mysqli_fetch_assoc($result);
        
    }


?>


<div class="container mt-4">
    <h4>Edit Interview Here !!</h4>
    <form method="POST" action="process-interview.php">
  <fieldset class="w-50">
    <div class="mb-3">
      <label for="" class="form-label">Date:</label>
      <input type="date" name="date" id="" class="form-control" placeholder="date">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Time</label>
      <input type="time" id="" name="time" class="form-control" placeholder="date">
      <input type="hidden" name="interviewId" value="<?php echo $interviewId?>">
    </div>
   
    <button type="submit" name="update-interview" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
</div>
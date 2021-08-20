<?php include('includes/students-header.php') ?>

<?php
    if (isset($_SESSION['application-successful'])) {
        echo $_SESSION['application-successful'];
        unset($_SESSION['application-successful']);
    }
    if (isset($_SESSION['application-already-made'])) {
        echo $_SESSION['application-already-made'];
        unset($_SESSION['application-already-made']);
    }
    if (isset($_SESSION['delete-successful'])) {
       echo $_SESSION['delete-successful'];
       unset($_SESSION['delete-successful']);
    }

?>

<div class="container mt-4">
    <div class="row">
    <div class="card-header my-3 py-3">
        <h6 class="m-0 font-weight-bold text-primary">New Internship Applications</h6>
    </div>

<?php
$studentId = $_SESSION['userId'];
include_once("../const/mysqli-connection.php");
$query = "SELECT * FROM applications where student_id = $studentId ORDER BY application_date";
$result = mysqli_query($dbConnection,$query);

while ($row = mysqli_fetch_assoc($result) ) {
    $id = $row['id'];
    $isAccepted = $row['is_accepted'];
    $applicationDate = $row['application_date'];
    $companyName = $row['company_name'];
    $description = $row['description'];

    ?>
      
                <div class="col-lg-4">
                    <div class="card shawdow m-3 p-3 mb-2">
                        <div class="">
                            <div class="d-flex flex-row align-items-center">
                                <div class="icon"> <i class="bx bxl-mailchimp"></i> </div>
                                <div class="ms-2 c-details">
                                    <h6 class="mb-0"><?php echo $companyName?></span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5">
                        <p>Status:<?php   
                                if ($isAccepted ==0) {
                                    echo '<span class="text-warning">unprocessed</span>' ;
                                }
                                elseif ($isAccepted ==1) {
                                    echo '<span class="text-success">Approved</span>' ;
                                }
                                elseif ($isAccepted ==3) {
                                    echo '<span class="text-danger">Rejected</span>' ;
                                }
                                ?></p>
                        <p class="card-text"><?php echo $description?></p>
                        <p><b>Date:<?php echo $applicationDate?></b></p>
                            <div class="mt-5">
                            <a href="process-application.php?deleteId=<?php echo $id?>" class="btn btn-danger">Delete Application<i class="fas fa-window-close"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
    <?php
}
?>    
            </div>
        </div>







<!-- Modal Reject -->
<div class="modal fade" id="myRejectModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
        <h4>Cancel This Application</h4>
            <form method="POST" action="process-application.php">
            <fieldset class="w-50">
                <a href="process-application.php?" name="delete-application" class="btn btn-success">Confirm</a>
            </fieldset>
            </form>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- MODAL Reject ENDS -->
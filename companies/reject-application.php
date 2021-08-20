<?php 
session_start();

if (isset($_GET['studentId'])) {
    require_once("../const/mysqli-connection.php");
    $studentId = $_SESSION['studentId'];
    $companyId = $_SESSION['companyId'];
// SET REJECTED APPLICATION STATE TO 3
    $rejectQuery = "UPDATE applications SET is_accepted =3 WHERE applications.student_id= $studentId AND applications.company_id =$companyId";
    $rejecteResult = mysqli_query($dbConnection, $rejectQuery);
    if ($rejecteResult=true) {

        header("location: index.php");
   }
   else{
       echo "Failed to Reject";
   }
}

?>
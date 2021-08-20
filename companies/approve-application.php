
<?php 
session_start();

if (isset($_POST['approve-application'])) {
    require_once("../const/mysqli-connection.php");
    $interviewDate =  mysqli_real_escape_string($dbConnection,trim($_POST['date']));
    $interviewTime =  mysqli_real_escape_string($dbConnection,trim($_POST['time']));
    $studentId = $_SESSION['studentId'];
    $companyId = $_SESSION['companyId'];
    
    $insertQuery = "INSERT INTO interviews (student_id, company_id, date, time) VALUES($studentId,$companyId,'$interviewDate','$interviewTime')";
    $insertResult = mysqli_query($dbConnection, $insertQuery);

    if ($insertResult==true) {
        // SET APPROVED APPLICATIONS STATE TO 1
        $approvedQuery = "UPDATE applications SET is_accepted =1 WHERE applications.student_id= $studentId AND applications.company_id =$companyId";
        $approvedResult = mysqli_query($dbConnection, $approvedQuery);
        
        if ($approvedResult=true) {
             header("location: index.php");
        }  
   
      }
      else{
      header("location: index.php");
    }


}


?>
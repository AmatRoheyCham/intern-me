<?php
    session_start();

    if (isset($_GET['deleteId'])) {
        $id= $_GET['deleteId'];
        include_once("../const/mysqli-connection.php");
        $query = "DELETE FROM interviews WHERE id =$id";
        $result = mysqli_query($dbConnection, $query);
        if ($result==true) {
            $_SESSION['interview-delete-success'] = '
        <div class="alert container alert-success alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Interview Deleted SuccessFully!</strong>
      </div>
            ';

            header("location: interviews.php");
        }
    }

    if (isset($_POST['update-interview'])) {
        $updateDate = $_POST['date'];
        $updateTIme = $_POST['time'];
        echo $updateDate.$updateTIme;

        include_once("../const/mysqli-connection.php");
        $updateQuery = "UPDATE interviews SET date = '$updateDate', time= '$updateTIme'";
        $updateResult = mysqli_query($dbConnection,$updateQuery);
        if ($updateResult==true) {
            $_SESSION['interview-update-success'] = '
        <div class="alert container alert-success alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Interview Updated SuccessFully!</strong>
      </div>
            ';

            header("location: interviews.php");
        }

    }
    if (isset($_POST['add-interview'])) {
        include_once("../const/mysqli-connection.php");
        $companyId = $_POST['companyId'];
        $studentId = $_POST['studentId'];
        $interviewDate = $_POST['date'];
        $interviewTime = $_POST['time'];
        // print_r($studentId.$companyId.$interviewDate.$interviewTime);
        // die();


        $addQuery = "INSERT INTO interviews (student_id,company_id,date,time) Values($studentId,$companyId,'$interviewDate','$interviewTime')";
        $addResult = mysqli_query($dbConnection,$addQuery);
        if ($addResult==true) {
            // SET APPROVED APPLICATIONS STATE TO 1
        $approvedQuery = "UPDATE applications SET is_accepted = 1 WHERE applications.student_id = $studentId AND applications.company_id = $companyId";
        $approvedResult = mysqli_query($dbConnection, $approvedQuery);
        if ($approvedResult=true) {
          
             header("location: index.php");
        }  
          
        $_SESSION['interview-add-success'] = '
        <div class="alert container alert-success alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Interview Add SuccessFully!</strong>
      </div>
            ';
            header("location: interviews.php");
        }
    }
    
?>
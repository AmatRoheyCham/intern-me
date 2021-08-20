
<?php
    session_start();
    include_once("../const/mysqli-connection.php");
    if (isset($_POST['apply'])) {
        $userId = mysqli_real_escape_string($dbConnection,trim($_POST['userId']));
        $companyId = mysqli_real_escape_string($dbConnection,trim($_POST['companyId']));
        $studentName = mysqli_real_escape_string($dbConnection,trim($_POST['student-name']));
        $companyName = mysqli_real_escape_string($dbConnection,trim($_POST['company-name']));
        $description =  mysqli_real_escape_string($dbConnection,trim($_POST['description']));

        $checkUserApplication = "SELECT * FROM applications WHERE student_id ='$userId' AND company_id='$companyId' ";
        $checkResult = mysqli_query($dbConnection,$checkUserApplication);
        $resultRow = mysqli_num_rows($checkResult);
        if ($resultRow>=1) {
            $_SESSION['application-already-made'] = '
            <div class="alert alert-danger container alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Failed!</strong> You already Had an Application with this company
            </div>
    ';
            header("location: ./recent-applications.php");
        }

    else
    {
        $query = "INSERT INTO applications (student_id, company_id, is_accepted, application_date, student_name, company_name,description)
                 VALUES($userId, $companyId, 0, NOW(), '$studentName', '$companyName','$description')";
        $result = mysqli_query($dbConnection, $query);
        if ($result==true) {
            $_SESSION['application-successful'] = '
                    <div class="alert container alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Success!</strong> Application Made Successfully, you will recieve mail upon approval by the company.
                    </div>
            ';
            header("location: recent-applications.php");
        }
        else{
            echo "failed";
        }
    }

    }

    if (isset($_GET['deleteId'])) {
        $id = $_GET['deleteId'];
        $deleteQuery = "DELETE FROM applications WHERE id = $id";
        $result = mysqli_query($dbConnection, $deleteQuery);
        if ($result==true) {
            $_SESSION['delete-successful'] = '
                    <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Success!</strong> Deleted Application Succesfully
                    </div>
            ';
            header("location: ./recent-applications.php");
        }

    }

?>
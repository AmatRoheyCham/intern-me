<?php
    session_start();
    if (isset($_GET['id'])) {
        $id= $_GET['id'];
        include_once("../const/mysqli-connection.php");
        $query = "DELETE FROM mentorships WHERE id =$id";
        $result = mysqli_query($dbConnection, $query);
        if ($result==true) {
            $_SESSION['mentorship-delete-success'] = '
        <div class="alert container alert-success alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Mentorship Deleted SuccessFully!</strong>
      </div>
            ';

            header("location: index.php");
        }
    }
?>
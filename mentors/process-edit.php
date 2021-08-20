
<?php
session_start();

if (isset($_POST['update-mentorship'])) {
    require_once('../const/mysqli-connection.php');
    $title = $_POST['title'];
    $category  = $_POST['catregory'];
    $post = $_POST['post'];
    $id = $_POST['id'];

    $query = "UPDATE mentorships SET title='$title' , mentorship_category = '$category', post = '$post', post_date = NOW()
    WHERE id = $id";
    $result = mysqli_query($dbConnection,$query);
    if ($result==true) {
        $_SESSION['mentorship-delete-success'] = '
    <div class="alert container alert-success alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Mentorship Edited SuccessFully!</strong>
  </div>
        ';

        header("location: index.php");
    }

}

?>
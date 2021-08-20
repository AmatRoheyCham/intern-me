<?php
session_start();

if (isset($_POST['post-mentorship'])) {
    include_once("../const/mysqli-connection.php");
    $mentorId = $_SESSION['userId'];
   $post = $_POST['post'];
   $title = $_POST['title'];
   $category = $_POST['category'];
   
   $query = "INSERT INTO mentorships (mentor_id, title, mentorship_category,post,post_date) VALUES($mentorId,'$title','$category','$post',NOW())";
   $result = mysqli_query($dbConnection,$query);
   
   if ($result=true) {
       $_SESSION['mentorship-post-success'] = '
       <div class="alert container alert-success alert-dismissible fade show">
       <button type="button" class="close" data-dismiss="alert">&times;</button>
       <strong>Mentorship Posted SuccessFully!</strong>
     </div>
       ';

    header("location: index.php");
    }
   
}


?>
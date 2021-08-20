
  <?php 
  session_start();
      if (isset($_POST['post-internship'])) {
        require_once("../const/mysqli-connection.php");
        $companyName = $_SESSION['companyName'];
        $title = mysqli_real_escape_string($dbConnection,trim($_POST['title']));
        $category =mysqli_real_escape_string($dbConnection,trim($_POST['category']));
        $description  = mysqli_real_escape_string($dbConnection,trim($_POST['description']));
        $requirements = mysqli_real_escape_string($dbConnection,trim($_POST['requirements']));
        $deadline = mysqli_real_escape_string($dbConnection,trim($_POST['deadline']));
        
        $query = "INSERT INTO intern_post(title, company_name,category, description, deadline,requirements)
        VALUES('$title', '$companyName','$category', '$description', '$deadline','$requirements');
        ";
        $result = mysqli_query($dbConnection, $query);
        if ($result==true) {
          $_SESSION['internship-post-success'] = '
      <div class="alert container alert-success alert-dismissible fade show">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>Internship Posted SuccessFully!</strong>
      </div>
          ';

          header("location: recent-post.php");
      }
        else{
          echo "intern post falied";
        }
        
        }


        if (isset($_GET['deleteId'])) {
          $id= $_GET['deleteId'];
          include_once("../const/mysqli-connection.php");
          $query = "DELETE FROM intern_post WHERE id =$id";
          $result = mysqli_query($dbConnection, $query);
          if ($result==true) {
              $_SESSION['internship-delete-success'] = '
          <div class="alert container alert-success alert-dismissible fade show">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>Internship Deleted SuccessFully!</strong>
        </div>
              ';
  
              header("location: recent-post.php");
          }
      }

      if (isset($_POST['edit-internship'])) {
        include_once('../const/mysqli-connection.php');
        $editId = $_POST['editId'];
        $editTitle = $_POST['title'];
        $editDescription = $_POST['description'];
        $editDeadline =$_POST['deadline'];
        $editRequirements = $_POST['requirements'];
        $editCategory = $_POST['category'];

        $updateQuery = "UPDATE intern_post SET title='$editTitle', category='$editCategory',description='$editDescription', deadline='$editDeadline',
        requirements='$editRequirements' WHERE id=$editId";
        $updateResult = mysqli_query($dbConnection, $updateQuery);
        if ($updateResult==true) {
          $_SESSION['internship-update-success'] = '
      <div class="alert container alert-success alert-dismissible fade show">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>Internship Updated SuccessFully!</strong>
      </div>
          ';

          header("location: recent-post.php");
      }

        
      }
    ?>

<?php
session_start();
include_once('../const/mysqli-connection.php');
    if (isset($_POST['add-category'])) {
        $categoryTable = $_POST['category-type'];
        $categoryName = $_POST['category-name'];
        $addCategoryQuery = "INSERT INTO $categoryTable (category_name) VALUES ('$categoryName')";
        $addResult = mysqli_query($dbConnection, $addCategoryQuery);

        if ($addResult==true) {
            $_SESSION['category-add-success'] = '
        <div class="alert container alert-success alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Category Added SuccessFully!</strong>
      </div>
            ';

            header("location: categories.php");
        }
    }


   if (isset($_POST['edit-category'])) {
       include_once('../const/mysqli-connection.php');
       $catId = $_POST['category-id'];
       $updateCategoryName = $_POST['category-name'];
       $updateCategoryTable = $_POST['category-type'];
      
       if ($updateCategoryTable=="student_majors") {
       $updateQuery = "UPDATE student_majors SET category_name = '$updateCategoryName' WHERE id = $catId ";
           
       }else{

       $updateQuery = "UPDATE $updateCategoryTable SET category_name = '$updateCategoryName' WHERE id = $catId ";
       $updateResult = mysqli_query($dbConnection, $updateQuery);
        // print_r($updateResult.$updateCategoryTable.$updateCategoryName);
        // die();
       if ($updateResult==true) {
        $_SESSION['category-add-success'] = '
    <div class="alert container alert-success alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Category Updated SuccessFully!</strong>
  </div>
        ';

        header("location: categories.php");
    }
    }

   }

   if (isset($_GET['deleteId']) && isset($_GET['tbl'])) {

    include_once('../const/mysqli-connection.php');
       $table = $_GET['tbl'];
       $id = $_GET['deleteId'];
       $deleteQuery = "DELETE from $table WHERE id=$id";
       $deleteResult = mysqli_query($dbConnection,$deleteQuery);
       if ($deleteResult==true) {
        $_SESSION['category-delete-success'] = '
            <div class="alert container alert-success alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Category Deleted SuccessFully!</strong>
        </div>
        ';

        header("location: categories.php");
    }

   }

?>
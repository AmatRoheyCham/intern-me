<?php include('includes/admin-header.php')  ?>
<!-- Button trigger modal -->
<?php
if (isset($_SESSION['category-add-success'])) {
    echo $_SESSION['category-add-success'];
    unset($_SESSION['category-add-success']);
}
if (isset($_SESSION['category-update-success'])) {
    echo $_SESSION['category-update-success'];
    unset($_SESSION['category-update-success']);
}
if (isset($_SESSION['category-delete-success'])) {
    echo $_SESSION['category-delete-success'];
    unset($_SESSION['category-delete-success']);
}
?>
<div class="container mt-4">
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myAddModal">Add a Category</button>
  <!-- Modal ADD -->
  <div class="modal fade" id="myAddModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
        <h4>Add Category!!</h4>
            <form method="POST" action="process-category.php">
            <fieldset class="w-50">
                <div class="mb-3">
                <label for="" class="form-label">Category Name:</label>
                <input type="text" id="" name="category-name" class="form-control" placeholder="Category Name">
                </div>
                <div class="mb-3">
                <label for="" class="form-label">Category Type</label>
                <select id="" name="category-type" class="form-control">
                    <option value="major_categories">Student Major</option>
                    <option value="business_categories">Business Category</option>
                    <option value="mentorship_category">Mentor category</option>
                </select>
                </div>
            
                <button type="submit" name="add-category" class="btn btn-primary">Submit</button>
            </fieldset>
            </form>        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- MODAL ADD ENDS -->


  <!-- BUsinss Category Tables -->
    <div class="bg-dark my-4">
        <div class="alert alert-success">
            <strong>Business categories !!</strong> 
        </div>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Category Name</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>

            <?php 
            include_once('../const/mysqli-connection.php');
                $queryBusiness = "SELECT * FROM business_categories";
                $resultBusiness = mysqli_query($dbConnection, $queryBusiness);
                while ($row = mysqli_fetch_assoc($resultBusiness)) {
                    $catId = $row['id'];
                    $catName = $row['category_name'];
                    ?>
                        <tr>
                            <td><?php echo $catId?></td>
                            <td><?php echo $catName?></td>
                            <td>
                            <a  href="edit-category.php?tbl=business_categories&amp;id=<?php echo $catId?>" class="btn btn-warning"><i class="fas fa-pen "></i></a> 
                            <a href="process-category.php?tbl=business_categories&amp;deleteId=<?php echo $catId?>" class="btn btn-danger"> <i class="fa fa-trash"></i></a> 
                            </td>
                        </tr>
                    <?php


                }
            ?>

              
            </tbody>
        </table>
    </div>

    <!-- Student Majors Categories -->
    <div class="bg-dark my-4">
        <div class="alert alert-success">
            <strong>Students categories !!</strong> 
        </div>
        <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Category Name</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php 
            include_once('../const/mysqli-connection.php');
                $queryStudent = "SELECT * FROM major_categories";
                $resultStudent = mysqli_query($dbConnection, $queryStudent);
                while ($row = mysqli_fetch_assoc($resultStudent)) {
                    $majId = $row['id'];
                    $majName = $row['category_name'];
                    ?>
                        <tr>
                            <td><?php echo $majId?></td>
                            <td><?php echo $majName?></td>
                            <td>
                            <a  href="edit-category.php?tbl=major_categories&amp;id=<?php echo $majId?>"class="btn btn-warning"><i class="fas fa-pen "></i></a> 
                            <a  href="process-category.php?tbl=major_categories&amp;deleteId=<?php echo $majId?>" class="btn btn-danger"> <i class="fa fa-trash"></i></a> 
                            </td>
                        </tr>
                    <?php


                }
            ?>
            </tbody>
        </table>
    </div>

    <!-- Mentor  Categories -->
    <div class="bg-dark my-4">
        <div class="alert alert-success">
            <strong>Mentor categories !!</strong> 
        </div>
        <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Category Name</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php 
            include_once('../const/mysqli-connection.php');
                $queryMentors = "SELECT * FROM mentorship_category";
                $resultMentors = mysqli_query($dbConnection, $queryMentors);
                while ($row = mysqli_fetch_assoc($resultMentors)) {
                    $menId = $row['id'];
                    $menName = $row['category_name'];
                    ?>
                        <tr>
                            <td><?php echo $menId?></td>
                            <td><?php echo $menName?></td>
                            <td>
                            <a  href="edit-category.php?tbl=mentorship_category&amp;id=<?php echo $menId?>" class="btn btn-warning"><i class="fas fa-pen "></i></a> 
                            <a  href="process-category.php?tbl=mentorship_category&amp;deleteId=<?php echo $menId?>" class="btn btn-danger"> <i class="fa fa-trash"></i></a> 
                            </td>
                        </tr>
                    <?php


                }
            ?>
            </tbody>
        </table>
    </div>

  
</div>



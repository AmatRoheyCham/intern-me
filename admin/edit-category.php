<?php include('includes/admin-header.php')  ?>

  <?php
  include_once('../const/mysqli-connection.php');
  if (isset($_GET['tbl']) && isset($_GET['id'])) {
    $table = $_GET['tbl'];
    $id = $_GET['id'];

    
    $getCategory = "SELECT * from $table WHERE id=$id";
    $getResult = mysqli_query($dbConnection,$getCategory);
    $getRows = mysqli_fetch_assoc($getResult);
    $catName = $getRows['category_name'];

  }
  
  ?>

<div class="container mt-4">
    <h4>Edit Category!!</h4>
    <form method="POST" action="process-category.php">
  <fieldset class="w-50">
    <div class="mb-3">
      <label for="" class="form-label">Category Name:</label>
      <input type="text" id="" name="category-name" class="form-control" value="<?php echo $catName?>" placeholder="Category Name">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Category Type</label>
      <select id="" name="category-type" class="form-control">
          <option <?php if($table == "major_categories") {echo "selected"; }?> value="major_categories">Student Major</option>
          <option <?php if($table == "business_categories") {echo "selected"; }?> value="business_categories">Business Category</option>
          <option <?php if($table == "mentorship_category") {echo "selected"; }?> value="mentorship_category">Mentor category</option>
    </select>
    </div>
   <input type="hidden" name="category-id" value="<?php echo $id ?>">
    <button type="submit" name="edit-category" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
</div>
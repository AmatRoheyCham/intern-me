<?php include('includes/admin-header.php')  ?>


  <!-- BUsinss Category Tables -->
  <div class="contaianer bg-dark my-4">
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
                            <a  href="edit-category.php?tbl=business_categories&amp;id=<?php echo $catId?>"class="btn btn-warning"><i class="fas fa-pen "></i></a> 
                            <a href="process-category.php?tbl=business_categories&amp;deleteId=<?php echo $catId?>" class="btn btn-danger"> <i class="fa fa-trash"></i></a> 
                            </td>
                        </tr>
                    <?php


                }
            ?>

              
            </tbody>
        </table>
    </div>






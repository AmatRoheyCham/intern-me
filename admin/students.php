<?php include('includes/admin-header.php')  ?>


    <!-- Student Majors Categories -->
    <div class=" container bg-dark my-4">
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



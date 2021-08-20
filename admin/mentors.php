<?php include('includes/admin-header.php')  ?>
<!-- Mentor  Categories -->
<div class=" container bg-dark my-4">
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
                            <a  href="edit-category.php?tbl=mentorship_category&amp;id=<?php echo $menId?>"class="btn btn-warning"><i class="fas fa-pen "></i></a> 
                            <a  href="process-category.php?tbl=mentorship_category&amp;deleteId=<?php echo $menId?>" class="btn btn-danger"> <i class="fa fa-trash"></i></a> 
                            </td>
                        </tr>
                    <?php


                }
            ?>
            </tbody>
        </table>
    </div>





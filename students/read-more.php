
<?php
include('includes/students-header.php')
?>

<?php 
    include_once('../const/mysqli-connection.php');
    $postId = mysqli_real_escape_string($dbConnection,trim($_GET['id']));
    $query = "SELECT * FROM intern_post WHERE id = $postId";
    $result = mysqli_query($dbConnection, $query);
    $row = mysqli_fetch_assoc($result);

    $id = $row['id'];
    $companyName = $row['company_name'];
    $title = $row['title'];
    $description = $row['description'];
    $deadline = $row['deadline'];
    $description = $row['description'];
    $requirements = $row['requirements'];
    $arrayRequirements = explode(",",$requirements);
    
    ?>
    <div class="container mt-4">
    <img src="../images/logo-cloud.png" width="100px" height="100px" alt="">

    <h5><?php echo $title?></h5>
    <p>
        <h4><?php echo $companyName?></h4>
        <a href="apply.php?companyName=<?php echo $companyName; ?>" class="float-right btn btn-outline-primary">Apply now</a>
        <h6><i class="fas fa-clock pr-2"></i>full time - part time</h6>
        <p><i class="fas fa-hourglass-start pr-2"></i>Dateline: <b><?php echo $deadline?></b> </p>
    </p>
    <hr>

    <div class="card container mt-2 pt-4 shadow mb-4">
        <h3>job Description</h3>
        <p> <?php echo $description?>
             
             <h5>Requirements</h5>
             <ul>
                 <?php 
                    foreach ($arrayRequirements as $reqs) {
                        echo "<li>$reqs</li>";
                    }
                 ?>
             </ul>
        </p>
    </div>
   



</div>

    <?php

?>



<?php 
include('includes/students-footer.php')
?>
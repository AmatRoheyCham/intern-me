<?php
include('includes/students-header.php');

    include_once('../const/mysqli-connection.php');
        $searchTitle = mysqli_real_escape_string($dbConnection,trim($_GET['title']));
    $query = "SELECT * FROM intern_post WHERE title LIKE '%$searchTitle%'";
    $result = mysqli_query($dbConnection, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        $title = $row['title'];
        $id = $row['id'];
        $companyName = $row['company_name'];
        $category = $row['category'];
        $description = $row['description'];
        $deadline = $row['deadline'];
        $requirements = $row['requirements'];
        
        ?>
    
    <div class="card container mt-2 pt-4 shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Search result for <b><?php echo $searchTitle ?></b></h6>
        </div>
        <div class="card-body">
            <div class="col-lg-12">
            <div class="card shadow">
            <div class="card-body">
                <img src="../images/logo-clock.jpg" width="100px" height="100px" alt="">
                <h5 class="text-warning"><b><?php echo $title ?></b></h5>
                <h6><b><?php echo $companyName ?></B></h6>
            <p class="card-text"><?php echo $description ?> <br>
                <strong>Due Date: <?php echo $deadline ?></strong> <br>
                <a href="read-more.php?id=<?php echo $id; ?>" class="btn-sm btn-warning">Read More</a>
                <a href="apply.php?companyName=<?php echo $companyName; ?>" class="btn-sm btn-secondary">Apply Now</a>
                </p> 
            </div>
            </div>

            </div>
        </div>
    </div>

    <?php
        
    }


?>
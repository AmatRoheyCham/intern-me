<?php include('includes/students-header.php') ?>

<div class="container mt-4">
    <div class="row">
        <div class="card-header my-3 py-3">
            <h6 class="m-0 font-weight-bold text-primary">Upcoming Inrterviews</h6>
        </div>
 

<?php
$studentId = $_SESSION['userId'];
include_once("../const/mysqli-connection.php");
$query = "SELECT * FROM interviews INNER JOIN companies ON interviews.company_id = companies.id where student_id = $studentId AND date >= NOW() ORDER BY date";
$result = mysqli_query($dbConnection,$query);

    while ($row = mysqli_fetch_assoc($result)) {
        $companyName =$row['company_name'];
        $date = $row['date'];
        $time = $row['time'];
        $location = $row['location'];
        ?>
        <div class="card border-success m-2" style="max-width: 18rem;">
            <div class="card-header bg-transparent border-success"><?php echo $companyName?></div>
            <div class="card-body text-success">
                <h5 class="card-title"><?php echo $location?></h5>
                <p class="card-text"><b>Date: <?php echo $date?></b></p>
            </div>
            <div class="card-footer bg-transparent border-success"><b>Time: <?php echo $time?></b></div>
        </div>
        <?php

    }
?>

    </div>
</div>

<!-- PAST INTERVIEW -->
<div class="container mt-4">
    <div class="row">
        <div class="card-header my-3 py-3">
            <h6 class="m-0 font-weight-bold text-warning">Past Inrterviews</h6>
        </div>
 

<?php
$studentId = $_SESSION['userId'];
include_once("../const/mysqli-connection.php");
$query = "SELECT * FROM interviews INNER JOIN companies ON interviews.company_id = companies.id where student_id = $studentId AND date <= NOW() ORDER BY date";
$result = mysqli_query($dbConnection,$query);

    while ($row = mysqli_fetch_assoc($result)) {
        $companyName =$row['company_name'];
        $date = $row['date'];
        $time = $row['time'];
        $location = $row['location'];
        ?>
        <div class="card border-success m-2" style="max-width: 18rem;">
            <div class="card-header bg-transparent border-success"><?php echo $companyName?></div>
            <div class="card-body text-success">
                <h5 class="card-title"><?php echo $location?></h5>
                <p class="card-text"><b>Date: <?php echo $date?></b></p>
            </div>
            <div class="card-footer bg-transparent border-success"><b>Time: <?php echo $time?></b></div>
        </div>
        <?php

    }
?>

    </div>
</div>
    
  
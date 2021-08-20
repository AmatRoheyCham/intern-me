
<?php
include('includes/students-header.php');


?>

  <!-- Header include SEARCH start -->
  <div class=" mb-4 bg-light rounded-3">
       <div class="container-fluid padd-left py-5 bg-dark text-white">
         <h2 class="">Get in touch with your Dream Job</h2>
          <p class="text-warning">Search for you favourite Company</p>
          <form class="w-75" method="GET" action="search_result.php">
          <div class="input-group">
               <input type="" class="form-control form-control-lg" name="title" placeholder="Type your keywords here">
                <div class="input-group-append">
                   <button type="submit" name="" class="btn btn-lg btn-default">
                        <i class="fa fa-search"></i>
                    </button>
                 </div>
               </div>
           </form>                        
        </div>
    </div>
    <!-- Header include end -->


<!-- Jobs in High Demand -->
  <div class="container pt-4">
    <h5 class="text-dark">Interns In high Demand Near You</h5>
    <a href="search_result.php?title=System Admin" class="btn border m-1 btn-outline-secondary text-dark">System Admin</a>
    <a href="search_result.php?title=Software Engineer" class="btn border m-1 btn-outline-secondary text-dark">Software Engineer</a>
    <a href="search_result.php?title=Chemical Engineer" class="btn border m-1 btn-outline-secondary text-dark">Chemical Engineer</a>
    <a href="search_result.php?title=Data Scientist" class="btn border m-1 btn-outline-secondary text-dark">Data Scientist</a>
    <a href="search_result.php?title=Enterprenuer" class="btn border m-1 btn-outline-secondary text-dark">Enterprenuer</a>
    <a href="search_result.php?title=Agricultural Engineer" class="btn border m-1 btn-outline-secondary text-dark">Agricultural Engineer</a>
    <a href="search_result.php?title=Mechanical Engineer" class="btn border m-1 btn-outline-secondary text-dark">Mechanical Engineer</a>
    <a href="search_result.php?title=Statistician" class="btn border m-1 btn-outline-secondary text-dark">Statistician</a>
    <a href="search_result.php?title=Mental Psychologist" class="btn border m-1 btn-outline-secondary text-dark">Mental Psychologist</a>
  </div>
<!-- Jobs in High demand ends -->

<!-- Urgent Hiring  -->
<section class="container pt-4">
  <div class="row">
    <div class="col-sm-12 card border shadow col-md-6 col-lg-6">
      <h5 class="text-center text-danger pt-2"><b>Urgent Hirings <strong>!!!</strong></b></h5>
      
      <?php 
      require_once("../const/mysqli-connection.php");
      $query = "SELECT * FROM intern_post WHERE deadline <= NOW() + INTERVAL 14 DAY ORDER BY deadline LIMIT 8";
      $result = mysqli_query($dbConnection, $query);
      while ($row = mysqli_fetch_assoc($result)) {
        $title = $row['title'];
        $id = $row['id'];
        $companyName = $row['company_name'];
        $description =$row['description'];
        $deadline = $row['deadline'];
        $requirements =$row['requirements'];
        ?>

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

        <?php
      }

      ?>


        <!-- Recently Added Scetion -->
 
</div>
    <div class="col-sm-12 card border shadow col-md-6 col-lg-6">
    <h5 class="text-center text-dark pt-2"><b>Recently Added Jobs</b></h5>

    <?php 
      require_once("../const/mysqli-connection.php");
      $query = "SELECT * FROM intern_post WHERE deadline >= NOW() ORDER BY deadline LIMIT 10";
      $result = mysqli_query($dbConnection, $query);
      while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $title = $row['title'];
        $companyName = $row['company_name'];
        $description =$row['description'];
        $deadline = $row['deadline'];
        $requirements =$row['requirements'];
        ?>
      <div class="card">
        <h5 class="card-header">Featured</h5>
        <div class="card-body">
          <h5 class="card-title"><?php echo $title ?></h5>
          <p class="card-text"><?php echo $description ?>. <br>
             <strong>Due Date: <?php echo $deadline ?></strong> <br>
             <a href="read-more.php?id=<?php echo $id;?>" class="btn-sm btn-warning">Read More</a>
             <a href="apply.php?companyName=<?php echo $companyName; ?>" class="btn-sm btn-secondary">Apply Now</a>
            </p> 
        </div>
      </div>
        <?php
      }

      ?>

    </div>
  </div>
</section>

<!-- Urgent hiring ends -->

<!-- TOp Hiring Modified -->
<div class="container bg-dark pt-4">
  <h6 class="text-center">OVER 500 REGISTERED JOBS</h6>
  <h2 class="text-center"><b>Top Hiring Companies</b></h2>
  <div class="container text-center pt-4">
    <a href="" class="btn border m-1 btn-outline-secondary text-dark"><img class="img-fluid" width="150px" height="150px" src="../images/logo-social.png" alt=""></a>
    <a href="" class="btn border m-1 btn-outline-secondary text-dark"><img class="img-fluid" width="150px" height="150px" src="../images/logo-cloud.png" alt=""></a>
    <a href="" class="btn border m-1 btn-outline-secondary text-dark"><img class="img-fluid" width="150px" height="150px" src="../images/logo-logo.jpg" alt=""></a>
    <a href="" class="btn border m-1 btn-outline-secondary text-dark"><img class="img-fluid" width="150px" height="150px" src="../images/logo-logo.jpg" alt=""></a>
    <a href="" class="btn border m-1 btn-outline-secondary text-dark"><img class="img-fluid" width="150px" height="150px" src="../images/logo-social.png" alt=""></a>
    <a href="" class="btn border m-1 btn-outline-secondary text-dark"><img  class="img-fluid" width="150px" height="150px" src="../images/pc3 fav.png" alt=""></a>
    <a href="" class="btn border m-1 btn-outline-secondary text-dark"><img  class="img-fluid" width="150px" height="150px" src="../images/pc1.png" alt=""></a>
    <a href="" class="btn border m-1 btn-outline-secondary text-dark"><img class="img-fluid" width="150px" height="150px" src="../images/pc2.png" alt=""></a>
    <a href="" class="btn border m-1 btn-outline-secondary text-dark"><img class="img-fluid" width="150px" height="150px" src="../images/logo-cloud.png" alt=""></a>
    <a href="" class="btn border m-1 btn-outline-secondary text-dark"><img  class="img-fluid" width="150px" height="150px" src="../images/logo-cloud.png" alt=""></a>

  </div>
</div>
<!-- TOp Hiring Modified ends -->

<!-- Mentorship Modified STart -->
<div class="container pt-5 text-center">
  <h6 class="m-0 font-weight-bold text-primary">HELPFUL SECTION TO KNOW YOUR CAREER STATUS</h6>
  <h2 class="m-0 font-weight-bold text-dark mb-2"><b>Career Development & Guidances</b></h2>
  <div class="container">
    <div class="row">

<?php
  include_once("../const/mysqli-connection.php");
  $queryMentorship = "SELECT * FROM mentorships INNER JOIN mentors ON mentorships.mentor_id = mentors.id LIMIT 7";
  $mentorshipResult = mysqli_query($dbConnection,$queryMentorship);
  while ($row = mysqli_fetch_assoc($mentorshipResult)) {
    $mentorEmail = $row['email'];
    $mentorName = $row['first_name']." ".$row['last_name'];
    $mentorTitle = $row['title'];
    $mentorshipPost = $row['post'];
    $mentorDate = $row['post_date'];
    $mentorCategory = $row['mentorship_category'];

    ?>
        <div class="card border shadow mb-3">
          <div class="card-body">
            <h5 class="card-title"><b><?php echo $mentorName?></b></h5>
            <p class="card-text"><small class="text-muted"><b>category: <?php echo $mentorCategory?></b></small></p>
            <p class="card-text"><small class=""><b>Title: <?php echo $title?></b></small></p>
            <p class="card-text"><?php echo $mentorshipPost?></p>
            <p class="card-text"><small class="text-muted"><b>Date Posted: <?php echo $mentorDate?></b></small></p>
            <p class="card-text"><small class=""><b>Reach out on: <?php echo $mentorEmail?></b></small></p>
          </div>
        </div>
    <?php
  }
  


?>
 
       
    </div>
</div>
</div>
</div>

  <hr class="text-bold">
<!-- Mentorship Modified STart ends -->



    
<?php 
include('includes/students-footer.php')
?>
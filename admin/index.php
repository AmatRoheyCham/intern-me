<?php include('includes/admin-header.php')  ?>

<?php
if (isset($_SESSION['login-success'])) {
        echo $_SESSION['login-success'];
        unset($_SESSION['login-success']);
      }
      ?>

<div class="container pt-4">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>
<div class="row">

    <!-- Registered Students card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Registered Students</div>
                            <?php
                            include_once('../const/mysqli-connection.php');
                                $queryStudents = "SELECT * FROM  students";
                                $resultStudent = mysqli_query($dbConnection,$queryStudents);
                                $studentsRow = mysqli_num_rows($resultStudent);
                            ?>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $studentsRow ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Registered Companies Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Registered Companies</div>
                            <?php
                            include_once('../const/mysqli-connection.php');
                                $queryCompanies = "SELECT * FROM  companies";
                                $resultCompanies = mysqli_query($dbConnection,$queryCompanies);
                                $companiesRow = mysqli_num_rows($resultCompanies);
                            ?>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $companiesRow ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Registered Companies Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Registered Mentors</div>
                            <?php
                            include_once('../const/mysqli-connection.php');
                                $queryMentors = "SELECT * FROM  mentors";
                                $resultMentors = mysqli_query($dbConnection,$queryMentors);
                                $mentorsRow = mysqli_num_rows($resultMentors);
                            ?>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $mentorsRow ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Total Users</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $studentsRow+$companiesRow+$mentorsRow ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Table Stats -->
    <div class="row">
        <div class="col-lg-6">
        <div class="card">
                <div class="card-header border-0">
                    <h3 class="card-title">Intern~Me Overview</h3>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                    <p class="text-success text-xl">
                        <i class="ion ion-ios-briefcase-outline"></i>
                    </p>
                    <p class="d-flex flex-column text-right">
                        <span class="font-weight-bold">
                        <?php
                            include_once('../const/mysqli-connection.php');
                                $queryInternship = "SELECT * FROM  intern_post WHERE deadline <= NOW() + INTERVAL 30 DAY";
                                $resultInternship = mysqli_query($dbConnection,$queryInternship);
                                $internshipRow = mysqli_num_rows($resultInternship);
                            ?>
                        <i class="ion ion-android-arrow-up text-success"></i> <?php echo $internshipRow ?>
                        </span>
                        <span class="text-muted">INTERNSHIPS IN ONE MONTH TIME</span>
                    </p>
                    </div>
                    <!-- /.d-flex -->
                    <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                    <p class="text-warning text-xl">
                        <i class="ion ion-ios-book-outline"></i>
                    </p>
                    <p class="d-flex flex-column text-right">
                        <span class="font-weight-bold">
                        <?php
                            include_once('../const/mysqli-connection.php');
                                $queryMentorships = "SELECT * FROM  mentorships WHERE post_date BETWEEN NOW() - INTERVAL 15 DAY AND NOW() + INTERVAL 15 DAY ";
                                $resultMentorship = mysqli_query($dbConnection,$queryMentorships);
                                $mentorshipRow = mysqli_num_rows($resultMentorship);
                            ?>
                        <i class="ion ion-android-arrow-up text-success"></i> <?php echo $mentorshipRow ?>
                         </span>
                        <span class="text-muted">MENTORSHIPS THIS MONTH</span>
                    </p>
                    </div>
                    <!-- /.d-flex -->
                    <div class="d-flex justify-content-between align-items-center mb-0">
                    <p class="text-danger text-xl">
                        <i class="ion ion-ios-people-outline"></i>
                    </p>
                    <p class="d-flex flex-column text-right">
                        <span class="font-weight-bold">
                        <i class="ion ion-android-arrow-up text-danger"></i> <?php echo $studentsRow+$companiesRow+$mentorsRow ?>
                        </span>
                        <span class="text-muted">REGISTRATIONS THIS MONTH</span> 
                    </p>
                    </div>
                    <!-- /.d-flex -->
                </div>
                </div>
        </div>
        <!-- GRAPH STARTS -->
        <div class="card ml-5">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">Users Overview</h3>
                </div>
              </div>
              <div class="card-body">
                <div class="d-flex">
                  <p class="d-flex flex-column">
                    <span class="text-bold text-lg"><?php echo $studentsRow+$companiesRow+$mentorsRow ?></span>
                    <span>Total Registerd Users</span>
                  </p>
                
                </div>
                <!-- /.d-flex -->

                <div class="d-flex flex-row justify-content-end">
                  <span class="mr-2">
                  <p class="ml-5 d-flex flex-column text-right">
                    <span class="text-success">
                      <i class="fas fa-arrow-up"></i> <?php echo $mentorshipRow+$internshipRow ?>
                    </span>
                    <span class="text-muted">Post Over The  Last Month</span>
                  </p>
                  </span>
                </div>
              </div>
            </div>
        <!-- GrAPH ENDS -->
    </div>
    <!-- Table Stat ens -->

</div>

<footer class="footer text-center">
 <strong>Copyright © 2021 <a href="">  Intern~Me</a>.</strong> All rights
    reserved.
</footer>


  <script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>

 <!-- jQuery CDN - Slim version (=without AJAX) -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

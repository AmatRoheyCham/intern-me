
<?php include('includes/index-header.php')?>

<div class=" rounded-3">
<div class="container-fluid padd-left pt-2 py-4 bg-dark text-white">
   <h2 class="">Welcome To Intern~Me !!!</h2>
       <p class="">Are you a Student looking for internship ?, 
           a Company looking for Interns, ?
            or Do you want to Mentor Students ?<br>
        <button type="button" class="btn btn-outline-warning" onclick=' location.href="login.php" '>Login</button> or 
         <button type="button" class="btn btn-outline-warning" onclick=' location.href="signup.php" '>SignUp</button>
            to explore more
          </p>
           </div>
 </div>
    </div>


<!-- DELETE THIS LATER -->
<div class="container text-center">
                  <p>Click on links below to view student, company or mentors specific page, this will be removed later and accessed through authentication</p>
                  <a class="nav-item btn btn-warning nav-link active mr-2 " href="students/home.php">students homepage</a>
                  <a class="nav-item btn btn-warning nav-link active mr-2 " href="companies/companies.php">companies homepahe</a>
                  <a class="nav-item btn btn-warning nav-link active mr-2 " href="mentors/mentors.php">mentors homepage</a>
    </div>
    <!-- END DELETE -->
    <?php include('includes/index-footer.php')?>


   



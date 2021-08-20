
<?php 
  include('includes/index-header.php');
?>

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
    <div class="container pt-3 card bg-warning pb-4">
          <div class="row align-items-center min-vh-md-75">
            <div class="col-md-7 col-lg-6 py-6 text-sm-start text-center">
              <h3 class="mt-6 mb-sm-4 display-5 fw-semi-bold lh-sm fs-4 fs-lg-6 fs-xxl-7">TODAY's INTERNs, <br class="d-block d-lg-none d-xl-block" />TOMORROW's INOVATIONS</h3>
            </div>
          </div>
        </div>

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section>

      <?php
    
      ?>

        <div class="container">
          <div class="row justify-content-center">
            <div class="col-auto mb-5 mb-md-7">
              <h1 class="fw-semi-bold border-bottom border-warning text-warning">Our <span class="text-1100">Services</span></h1>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 text-center">
              <div class="px-0 px-lg-3"><img class="img-fluid mb-4" src="images/bulb3.png" width="100" alt="..." />
                <h3 class="h5 mb-4 font-base">Mentorships</h3>
                <p class="lh-lg">Register online Discover tools and manage alerts Learn about how to access</p>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 text-center">
              <div class="px-0 px-lg-3"><img class="img-fluid mb-4" src="images/pc1.png" width="100" alt="..." />
                <h3 class="h5 mb-4 font-base">Internships</h3>
                <p class="lh-lg">Manage your account View products and solutions Find resources and support</p>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 text-center">
              <div class="px-0 pt-4 px-lg-3"><img class="img-fluid mb-4" src="images/pc3 fav.png" width="100"  alt="..." />
                <h3 class="h5 mb-4 font-base">Career & Guidance</h3>
                <p class="lh-lg">Publish with Wiley Explore our resource library Learn about topics and trends</p>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 text-center">
              <div class="px-0 px-lg-3"><img class="img-fluid mb-4" src="images/pencil papper1.png" width="100" alt="..." />
                <h3 class="h5 mb-4 font-base">Others</h3>
                <p class="lh-lg">Submit a paper Track your article Learn about Open Access</p>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->

    <div class="container pt-4 card shadow mb-5">
  <div class="accordion-collapse collapse shadow-lg show" id="collapse1" aria-labelledby="heading1" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <div class="row justify-content-center-center">
                        <div class="col-12 col-sm-2"><img class="img-fluid d-block mx-auto mx-sm-0" src="images\pexels-photo-8.jpeg" width="130" alt="..."></div>
                        <div class="col-12 col-sm-9 mt-4 mt-sm-0 d-sm-block d-flex flex-column">
                          <ul>
                            <h4 class="fw-semi-bold text-black">ABOUT <strong class="text-warning">INTERN~ME</strong></h4>
                          </ul>
                           <p> Your reading list is a good place to start, but you will be expected to read more widely too. 
                                We basically provide a channel for student discovering ranges of avaliable internship opportunities as well as
                                mentorships avaliable to them by mentors around the world. <strong>SignUp or Login</strong> to learn more..

                                Your reading list is a good place to start, but you will be expected to read more widely too. 
                                We basically provide a channel for student discovering ranges of avaliable internship opportunities as well as
                                mentorships avaliable to them by mentors around the world. 
                                
                                Your reading list is a good place to start, but you will be expected to read more widely too. 
                                We basically provide a channel for student discovering ranges of avaliable internship opportunities as well as
                                mentorships avaliable to them by mentors around the world.
                                <button class="btn btn-sm btn-warning rounded-pill font-base" type="submit" onclick="location.href='about.php'">Learn More </button>

                           </p>
                        
                        </div>
                      </div>
                    </div>
  </div>
 </div>

    <!-- OUR SERVICE ENDS -->


<!-- DELETE THIS LATER -->
<!-- <div class="container text-center">
                  <p>Click on links below to view student, company or mentors specific page, this will be removed later and accessed through authentication</p>
                  <a class="nav-item btn btn-warning nav-link active mr-2 " href="students/home.php">students homepage</a>
                  <a class="nav-item btn btn-warning nav-link active mr-2 " href="companies/companies.php">companies homepahe</a>
                  <a class="nav-item btn btn-warning nav-link active mr-2 " href="mentors/mentors.php">mentors homepage</a>
    </div> -->
    <!-- END DELETE -->
    <?php include('includes/index-footer.php')?>


   



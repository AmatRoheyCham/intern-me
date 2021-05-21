
<?php
include('includes/home-header.php')
?>

  <!-- Header include SEARCH start -->
  <div class=" mb-4 bg-light rounded-3">
       <div class="container-fluid padd-left py-5 bg-dark text-white">
         <h2 class="">Get in touch with your Dream Job</h2>
          <p class="text-warning">Search for you favourite stuffs</p>
           <form class= "form" action="">
              <input type="text" class="form-group w-50 " placeholder="title">                     
               <input type="text" class="form-group w-10" placeholder="location"><i class="fas fa-map-marker-alt text-danger text-lg"></i></input>  
                  <button class="btn btn-warning px-4 mx-3"><i class="fas fa-search"></i></button>                
            </form>                        
        </div>
    </div>
    <!-- Header include end -->


    <div class="container bd-example">
        <h3 class="text-center py-2">Latest Intern Posts</h3>
        <div class="row g-3  row-cols-1 row-cols-md-2 g-4">
            <div class="col-md-4">
                <div class="card">
                <div class="card-header">
                    Featured
                </div>
                <div class="card-body">
                    <h5 class="card-title"><b>Company Name</b></h5>
                    <p class="card-text"><b>Title: </b><br>
                    Some quick example text to build on the card title and make up the bulk of the card's content. <a href="">Ream More</a></p>
                    <a href="apply.php" class="btn btn-success">Apply Now</a>
                </div>
                <div class="card-footer text-muted">
                    2 days ago
                </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                <div class="card-header">
                    Featured
                </div>
                <div class="card-body">
                <h5 class="card-title"><b>Company Name</b></h5>
                <p class="card-text"><b>Title: </b><br>
                Some quick example text to build on the card title and make up the bulk of the card's content. <a href="">Ream More</a></p>
                    <a href="apply.php" class="btn btn-success">Apply Now</a>
                </div>
                <div class="card-footer text-muted">
                    2 days ago
                </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                <div class="card-header">
                    Featured
                </div>
                <div class="card-body">
                <h5 class="card-title"><b>Company Name</b></h5>
                <p class="card-text"><b>Title: </b><br>
                Some quick example text to build on the card title and make up the bulk of the card's content. <a href="">Ream More</a></p>
                <a href="apply.php" class="btn btn-success">Apply Now</a>
                </div>
                <div class="card-footer text-muted">
                    2 days ago
                </div>
                </div>
            </div>
        </div>
        <a href="" class="btn btn-warning">See More</a>           

        </div>
   

     <!-- TOP HIRING COMPANIES STARTS -->
   
    <h3 class="text-center py-4">Top Hiring Companies</h3>
        <div class="container">
            <div id="demo" class="carousel slide" data-ride="carousel">
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Companies</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <!-- <div class="chart"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                  <canvas id="stackedBarChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 395px;" width="395" height="250" class="chartjs-render-monitor"></canvas>
                </div> -->
                <table class="table">
                    <tr>
                        <th>Logo:</th>
                        <th>id:</th>
                        <th>Name:</th>
                        <th>Category:</th>
                        <th>Number of Interns:</th>
                    </tr>
                    <tr>
                        <td><i class="fa fa-user"></i></td>
                        <td>1</td>
                        <td>Company b</td>
                        <td>Enterprenuer</td>
                        <td>15</td>
                        <td><a href="" class="btn btn-sm btn-warning">Details</a></td>
                    </tr>
                    <tr>
                       <td><i class="fa fa-clock"></i></td>
                        <td>2</td>
                        <td>Company y</td>
                        <td>Statistician</td>
                        <td>15</td>
                        <td><a href="" class="btn btn-sm btn-warning">Details</a></td>
                    </tr>
                    <tr>
                     <td><i class="fa fa-home"></i></td>
                        <td>3</td>
                        <td>Company z</td>
                        <td>Politics</td>
                        <td>15</td>
                        <td><a href="" class="btn btn-sm btn-warning">Details</a></td>
                    </tr>
                    <tr>
                     <td><i class="fa fa-mobile"></i></td>
                        <td>4</td>
                        <td>Company a</td>
                        <td>Banking</td>
                        <td>15</td>
                        <td><a href="" class="btn btn-sm btn-warning">Details</a></td>
                    </tr>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
        
        </div>


</div>   


    <!-- MENTORSHIPS STARTS -->
    <h3 class="text-center py-4">Top Rated Mentors</h3>
    <div class="container">
    <div class="col">
                <!-- USERS LIST -->
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Mentors</h3>

                    <div class="card-tools">
                      <span class="badge badge-danger">8 Top</span>
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                      </button>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0" style="display: block;">
                    <ul class="users-list clearfix">
                      <li>
                        <img src="../dist/img/user1-128x128.jpg" alt="User Image">
                        <a class="users-list-name" href="#">Alexander Pierce</a>
                        <span class="users-list-date">Today</span>
                      </li>
                      <li>
                        <img src="../dist/img/user8-128x128.jpg" alt="User Image">
                        <a class="users-list-name" href="#">Norman</a>
                        <span class="users-list-date">Yesterday</span>
                      </li>
                      <li>
                        <img src="../dist/img/user7-128x128.jpg" alt="User Image">
                        <a class="users-list-name" href="#">Jane</a>
                        <span class="users-list-date">12 Jan</span>
                      </li>
                      <li>
                        <img src="../dist/img/user6-128x128.jpg" alt="User Image">
                        <a class="users-list-name" href="#">John</a>
                        <span class="users-list-date">12 Jan</span>
                      </li>
                      <li>
                        <img src="../dist/img/user2-160x160.jpg" alt="User Image">
                        <a class="users-list-name" href="#">Alexander</a>
                        <span class="users-list-date">13 Jan</span>
                      </li>
                      <li>
                        <img src="../dist/img/user5-128x128.jpg" alt="User Image">
                        <a class="users-list-name" href="#">Sarah</a>
                        <span class="users-list-date">14 Jan</span>
                      </li>
                      <li>
                        <img src="../dist/img/user4-128x128.jpg" alt="User Image">
                        <a class="users-list-name" href="#">Nora</a>
                        <span class="users-list-date">15 Jan</span>
                      </li>
                      <li>
                        <img src="../dist/img/user3-128x128.jpg" alt="User Image">
                        <a class="users-list-name" href="#">Nadia</a>
                        <span class="users-list-date">15 Jan</span>
                      </li>
                    </ul>
                    <!-- /.users-list -->
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer text-center" style="display: block;">
                    <a href="javascript::">View All Users</a>
                  </div>
                  <!-- /.card-footer -->
                </div>
                <!--/.card -->
              </div>
    </div>

    <!-- MENTORSHIPS ENDS -->

<!-- DELETE THIS LATER -->
    <div class="container text-center">
                  <p>Click on links below to view student, company or mentors specific page, this will be removed later and accessed through authentication</p>
                  <a class="nav-item btn btn-warning nav-link active mr-2 " href="home.php">students homepage</a>
                  <a class="nav-item btn btn-warning nav-link active mr-2 " href="../companies/companies.php">companies homepahe</a>
                  <a class="nav-item btn btn-warning nav-link active mr-2 " href="../mentors/mentors.php">mentors homepage</a>
    </div>
    <!-- END DELETE -->
    
<?php 
include('includes/home-footer.php')
?>
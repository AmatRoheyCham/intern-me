<?php 
    include('includes/index-header.php')
?>

<body onload = "hideForms()">
  
<div class="container w-50 py-4">
  <div class="p-2">
    <p><b>SignUp as 
    <button type="button" class="btn btn-default" onclick="displayStudentSignup()">Student</button>
    <button type="button" class="btn btn-default" onclick="displayCompanySignup()">Company</button>
    <button type="button" class="btn btn-default" onclick="displayMentorSignup()">Mentor</button>
  </b></p>
  </div>
<section class="content">
      <div class="container">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">SignUp to<b> Intern~Me</b></h3>
              </div>
              <!-- /.card-header -->
              <!--Students form start -->
              <form style="display:none"; role="form" id="studentsForm" action="" method="POST" enctype = "multipart/form-data">
                <div class="card-body">
                <div class="form-group">
                    <label for="">First Name</label>
                    <input required type="text" name="first-name" value="<?php if(isset($_POST['first-name'])){echo $_POST['first-name'];}?>" class="form-control" id="exampleInputEmail1" placeholder="Enter first name">
                  </div>
                  <div class="form-group">
                    <label for="">Last Name</label>
                    <input required  type="text" name="last-name" value="<?php if(isset($_POST['last-name'])){echo $_POST['last-name'];}?>" class="form-control" id="exampleInputEmail1" placeholder="Enter last name">
                  </div>
                  <div class="form-group">
                    <label for="">Email address</label>
                    <input required  type="email" name="email" value="<?php if(isset($_POST['email'])){echo $_POST['email'];}?>" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="">Username</label>
                    <input  required type="text" name="username" value="<?php if(isset($_POST['username'])){echo $_POST['username'];}?>" class="form-control" id="exampleInputEmail1" placeholder="Enter username">
                  </div>
                  <div class="form-group">
                    <label for="">password</label>
                    <input required  type="password" name="password" value="<?php if(isset($_POST['password'])){echo $_POST['password'];}?>" class="form-control" id="exampleInputEmail1" placeholder="Enter password">
                  </div>
                  <div class="form-group">
                    <label for="">Repeat password</label>
                    <input required  type="password" name="repeat-password" value="<?php if(isset($_POST['repeat-password'])){echo $_POST['repeat-password'];}?>" class="form-control" id="exampleInputEmail1" placeholder="repeat password">
                  </div>
                  <div class="form-group">
                    <label for="type" class="">Major</label>
                    <div class="col-sm-10">
                      <select  class="form-control" name="major" id="">
                        <option value="computer science">Computer science</option>
                        <option value="mathematics">maths</option>
                        <option value="physics">physics</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="study year">Study Year</label>
                    <input  required type="number" name="studyYear" value="<?php if(isset($_POST['studyYear'])){echo $_POST['studyYear'];}?>" class="form-control" id="exampleInputPassword1" placeholder="Study Year">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Transcript</label>
                    <input  required type="file" name="transcript" value="<?php if(isset($_POST['transcript'])){echo $_POST['transcript'];}?>" class="form-control" id="exampleInputPassword1" placeholder="transcript">
                  </div>
                  <div class="form-group">
                    <label for="cv">CV</label>
                    <input required  type="file" name="cv" value="<?php if(isset($_POST['cv'])){echo $_POST['cv'];}?>" class="form-control" id="exampleInputPassword1" placeholder="CV">
                  </div>
                  <div class="form-group mb-0">
                    <!-- <div class="custom-control custom-checkbox">
                      <input  required type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                      <label class="custom-control-label" for="exampleCheck1">I agree to the <a href="#">terms of service</a>.</label>
                    </div> -->
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name='signupStudent' class="btn btn-primary">Submit</button>
                  <button type="button" name='cancel' class="btn btn-outline-warning float-right" onclick=' location.href="index.php" '>Cancel</button>
                </div>
              </form>
              <!-- STUDENTS FORM ENDS -->

              <!-- COMPANIES FORM BEGINS -->
              <form style="display:none;" role="form" id="companiesForm" method="POST" action="" enctype = "multipart/form-data" >
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Company Name</label>
                   <input required  type="text" value="<?php if(isset($_POST['company-name'])){echo $_POST['company-name'];}?>" name="company-name" class="form-control" id="exampleInputEmail1" placeholder="Enter Company Name">
                   </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input required  type="email" name="email" value="<?php if(isset($_POST['email'])){echo $_POST['email'];}?>" class="form-control" id="exampleInputEmail1" placeholder="Enter Email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">password</label>
                    <input  required type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="Enter password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Repeat password</label>
                    <input required  type="password" name="repeat-password" class="form-control" id="exampleInputEmail1" placeholder="Repeat Password">
                  </div>
                  <div class="form-group">
                    <label for="type" class="">Business Category</label>
                    <div class="">
                    <select name="category" class="form-control">
                    <?php
                    
                      include_once('const/mysqli-connection.php');
                        $selectCategories = "SELECT * FROM business_categories";
                        $selectResut = mysqli_query($dbConnection,$selectCategories);
                        while ($row = mysqli_fetch_assoc($selectResut)) {
                          ?>
                            <option value="<?php echo $row['category_name']?>"><?php echo $row['category_name']?></option>
                          <?php
                        }
                      ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="">Location</label>
                    <input required  type="text" value="<?php if(isset($_POST['location'])){echo $_POST['location'];}?>"name="location" class="form-control" id="exampleInputPassword1" placeholder="location">
                  </div>
                  <div class="form-group">
                    <label for="">Contact</label>
                    <input required  type="text" value="<?php if(isset($_POST['contact'])){echo $_POST['contact'];}?>"name="contact" class="form-control" id="exampleInputPassword1" placeholder="contact">
                  </div>
                  <div class="form-group">
                    <label for="">Description / About </label>
                    <textarea class="form-control" name="description" value="<?php if(isset($_POST['description'])){echo $_POST['description'];}?>" id="" cols="70" rows="10"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="">profile / Logo</label>
                    <input required  type="file" name="logo" value="<?php if(isset($_POST['logo'])){echo $_POST['logo'];}?>" class="form-control" id="exampleInputPassword1" placeholder="logo">
                  </div>
                  <div class="form-group mb-0">
                  
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name='signupCompany' class="btn btn-primary">Submit</button>
                  <button type="button" name='cancel' class="btn btn-outline-warning float-right" onclick=' location.href="index.php" '>Cancel</button>
                </div>
              </form>

              <!-- COMPANIES FORM ENDS HERE -->


              
              <!-- Mentors FORM BEGINS -->
              <form style="display:none;" role="form" id="mentorsForm" method="POST" action="" enctype = "multipart/form-data" >
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input required  type="text" name="title" value="<?php if(isset($_POST['title'])){echo $_POST['title'];}?>" class="form-control" id="exampleInputEmail1" placeholder="Enter title">
                  </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">First Name</label>
                    <input required  type="text" name="first-name" value="<?php if(isset($_POST['first-name'])){echo $_POST['first-name'];}?>" class="form-control" id="exampleInputEmail1" placeholder="Enter first name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Last Name</label>
                    <input required  type="text" name="last-name" value="<?php if(isset($_POST['last-name'])){echo $_POST['last-name'];}?>" class="form-control" id="exampleInputEmail1" placeholder="Enter last name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input  required type="email" name="email" value="<?php if(isset($_POST['email'])){echo $_POST['email'];}?>" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input required  type="text" name="username" value="<?php if(isset($_POST['username'])){echo $_POST['username'];}?>" class="form-control" id="exampleInputEmail1" placeholder="Enter username">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">password</label>
                    <input required  type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="Enter password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Repeat password</label>
                    <input required  type="password" name="repeat-password" class="form-control" id="exampleInputEmail1" placeholder="Repeat password">
                  </div>
                  <div class="form-group">
                    <label for="profile-pic">Profile Pic</label>
                    <input  required type="file" name="profile-pic" value="<?php if(isset($_POST['profile-pic'])){echo $_POST['profile-pic'];}?>" class="form-control" id="profile-pic" placeholder="profile pic">
                  <div class="form-group mb-0">
                    
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name='signupMentor' class="btn btn-primary">Submit</button>
                  <button type="button" name='cancel' class="btn btn-outline-warning float-right" onclick=' location.href="index.php" '>Cancel</button>
                </div>
              </form>

              <!-- MENTORS FORM ENDS HERE -->

            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
</div>





<?php 


// STUDENT SIGNUP
if (isset($_POST['signupStudent'])) {
$error = array();
  //   echo "student signup";
  $firstName = htmlspecialchars(trim($_POST['first-name']));
  $lastName = htmlspecialchars(trim($_POST['last-name']));
  $email = htmlspecialchars(trim($_POST['email']));

  include_once('./const/mysqli-connection.php');
  $checkEmail = "SELECT * FROM students WHERE email = '$email'";
  $checkResult = mysqli_query($dbConnection,$checkEmail);
  $emailRow = mysqli_num_rows($checkResult);
  if ($emailRow >0) {
    # code...
    echo '
    <div class="alert container alert-danger alert-dismissible fade show">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>Email Already Taken!</strong>
    </div>
    ';
    // die();
  }

  $username = htmlspecialchars(trim($_POST['username']));
  include_once('./const/mysqli-connection.php');
  $checkUsername = "SELECT * FROM students WHERE username = '$username'";
  $usernameResult = mysqli_query($dbConnection,$checkUsername);
  $usernameRow = mysqli_num_rows($usernameResult);
  if ($usernameRow >0) {
    # code...
    echo '<div class="alert container alert-danger alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Username Already Taken!!</strong>
  </div>';
    // die();
  }

  $password = htmlspecialchars(trim($_POST['password']));
  $repeatPassword = htmlspecialchars(trim($_POST['repeat-password']));
  if ($password != $repeatPassword) {
    # code...
    $error[] = "Password mismatch occured";
  }
  $major = htmlspecialchars(trim($_POST['major']));
  $studyYear = htmlspecialchars(trim($_POST['studyYear']));

  if (isset($_FILES['transcript']['name'])) {
  # code...
  $transcript = $_FILES['transcript']['name'];
  if ($transcript !="") {
      # code...
      $explode = explode(".", $transcript);
      $ext = end($explode);
      $transcript = $username."-transcript.".$ext;
      
  } 

    # code...
    $source = $_FILES['transcript']['tmp_name'];
    $destination = "students/files/".$transcript;
    $upload = move_uploaded_file($source, $destination);
  }

  if (isset($_FILES['cv']['name'])) {
  # code...
  $cv = $_FILES['cv']['name'];
  if ($cv !="") {
      # code...
      $explode = explode(".", $cv);
      $ext = end($explode);
      $cv = $username."-cv.".$ext;
  }
    # code...
    $source = $_FILES['cv']['tmp_name'];
    $destination = "students/files/".$cv;
    $upload = move_uploaded_file($source, $destination);

  }

  if ($error) {
    # code...
    echo "<div class='container'>";
    foreach($error as $mgs){
        echo "<p class='text-danger text-sm'>".$mgs."</p></br>";
    }
    echo "</div>";
    }
    else{
    include_once('const/mysqli-connection.php');
    $query = " INSERT INTO students(first_name,last_name,email,password,username,registered_date,major,study_year,student_transcript,student_cv)
    VALUES('$firstName','$lastName','$email','$password','$username',NOW(),'$major','$studyYear','$transcript','$cv')
    ";
    $result = mysqli_query($dbConnection, $query);
    if ($result=true) {
      $_SESSION['registration-success'] = '
      <div class="alert container alert-success alert-dismissible fade show">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>Registration SuccessFul!</strong>
    </div>
      ';
      echo '  <div class="alert container alert-success alert-dismissible fade show">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>Registration SuccessFul! login to continue</strong>
    </div>';
  // header("location: login.php");
  }
    else{
      echo '<div class="alert container alert-danger alert-dismissible fade show">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>Registration Un-SuccessFul!</strong>
    </div>';
    }
  // login success save and save to Database redirect to index
  }
}


// COMPANY SIGNUP 
elseif (isset($_POST['signupCompany'])) {
  $error = array();
# code...
$companyName = htmlspecialchars(trim($_POST['company-name']));
include_once('./const/mysqli-connection.php');
  $companyNameQuery = "SELECT * FROM companies WHERE company_name = '$companyName'";
  $companyResult = mysqli_query($dbConnection,$companyNameQuery);
  $companyNameRow = mysqli_num_rows($companyResult);
  if ($companyNameRow >0) {
    # code...
    echo '
    <div class="alert container alert-danger alert-dismissible fade show">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>Company With This Name Already Exist!</strong>
    </div>
    ';
    die();
  }

$email = htmlspecialchars(trim($_POST['email']));
include_once('./const/mysqli-connection.php');
  $companyEmail = "SELECT * FROM companies WHERE email = '$email'";
  $companyEmailResult = mysqli_query($dbConnection,$companyEmail);
  $companyEmailRow = mysqli_num_rows($companyEmailResult);
  if ($companyEmailRow >0) {
    # code...
    echo '
    <div class="alert container alert-danger alert-dismissible fade show">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>Email Already Taken!</strong>
    </div>
    ';
    die();
  }

$password = htmlspecialchars(trim($_POST['password']));
$repeatPassword = htmlspecialchars(trim($_POST['repeat-password']));
if ($password != $repeatPassword) {
  # code...
  $error[] = "Password mismatch occured";
}
$category = htmlspecialchars(trim($_POST['category']));
$location = htmlspecialchars(trim($_POST['location']));
$contact = htmlspecialchars(trim($_POST['contact']));
$description = htmlspecialchars(trim($_POST['description']));

if (isset($_FILES['logo']['name'])) {
# code...
$logo = $_FILES['logo']['name'];
if ($logo !="") {
    # code...
    $explode = explode(".", $logo);
    $ext = end($explode);
    $logo = $companyName."-logo.".$ext;
}
  # code...
  $source = $_FILES['logo']['tmp_name'];
  $destination = "companies/files/".$logo;
  $upload = move_uploaded_file($source, $destination);

// if ($upload==false) {
//     # code...
//     echo "failed to upload file";
// }
// else{
//     echo "logo moved";
// }
}
if ($error) {
  # code...
  echo "<div class='container'>";
  foreach($error as $mgs){
      echo "<p class='text-danger text-sm'>".$mgs."</p></br>";
  }
  echo "</div>";
  }
  else{
    // print_r($companyName.$email.$password.$category.$description.$location.$contact.$repeatPassword.$logo);
    // die();
  include_once('./const/mysqli-connection.php');
  $insertStudent = "INSERT INTO companies(email, password,company_name,business_category,location, contact,about, registered_date, profile_picture)
  VALUES('$email','$password','$companyName','$category','$location','$contact','$description',NOW(),'$logo')
  ";
   $result = mysqli_query($dbConnection, $insertStudent);

   if ($result=true) {
    $_SESSION['registration-success'] = '
    <div class="alert container alert-success alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Registration SuccessFul!</strong>
  </div>
    ';
    echo '  <div class="alert container alert-success alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Registration SuccessFul! login to continue</strong>
  </div>';
//  header("location: login.php");
 }
  else{
       echo '<div class="alert container alert-danger alert-dismissible fade show">
       <button type="button" class="close" data-dismiss="alert">&times;</button>
       <strong>Registration Un-SuccessFul!</strong>
     </div>';
     }
  }

// login success save and save to Database redirect to index

}


// MENTOR SIGNUP
elseif (isset($_POST['signupMentor'])) {
  $error = array();
# code...
$title = htmlspecialchars(trim($_POST['title']));
$firstName = htmlspecialchars(trim($_POST['first-name']));
$lastName = htmlspecialchars(trim($_POST['last-name']));
$email = htmlspecialchars(trim($_POST['email']));
$email = htmlspecialchars(trim($_POST['email']));
include_once('./const/mysqli-connection.php');
  $mentorEmail = "SELECT * FROM mentors WHERE email = '$email'";
  $mentorEmailResult = mysqli_query($dbConnection,$mentorEmail);
  $mentorEmailRow = mysqli_num_rows($mentorEmailResult);
  if ($mentorEmailRow >0) {
    # code...
    echo '
    <div class="alert container alert-danger alert-dismissible fade show">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>Email Already Exist !</strong>
    </div>
    ';
    die();
  }

$username = htmlspecialchars(trim($_POST['username']));
include_once('./const/mysqli-connection.php');
  $mentorUsername = "SELECT * FROM mentors WHERE username = '$username'";
  $mentorUserNameResult = mysqli_query($dbConnection,$mentorUsername);
  $mentorUsernameRow = mysqli_num_rows($mentorUserNameResult);
  if ($mentorUsernameRow >0) {
    # code...
    echo '
    <div class="alert container alert-danger alert-dismissible fade show">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>User Name Already Taken Try Another!</strong>
    </div>
    ';
    die();
  }

$password = htmlspecialchars(trim($_POST['password']));
$repeatPassword = htmlspecialchars(trim($_POST['repeat-password']));

if ($password != $repeatPassword) {
  # code...
  $error[] = "Password mismatch occured";
}
if (isset($_FILES['profile-pic']['name'])) {
# code...
$profilePic = $_FILES['profile-pic']['name'];
if ($profilePic !="") {
    # code...
    $explode = explode(".", $profilePic);
    $ext = end($explode);
    $profilePic = $username."-profile-pic.".$ext;
}
if (empty($error)) {
  # code...
  $source = $_FILES['profile-pic']['tmp_name'];
  $destination = "mentors/files/".$profilePic;
  $upload = move_uploaded_file($source, $destination);
}

// if ($upload==false) {
//     # code...
//     echo "failed to upload file";
// }
// else{
//     echo "logo moved";
// }
}
if ($error) {
# code...
echo "<div class='container'>";
foreach($error as $mgs){
    echo "<p class='text-danger text-sm'>".$mgs."</p></br>";
}
echo "</div>";
}
else{
  include_once('const/mysqli-connection.php');
  $query = " INSERT INTO mentors(title,first_name,last_name,email,password,username,registered_date,profile_picture)
  VALUES('$title','$firstName', '$lastName','$email','$password', '$username', NOW(), '$profilePic')
  ";
     $result = mysqli_query($dbConnection, $query);
     
   if ($result=true) {
       $_SESSION['registration-success'] = '
       <div class="alert container alert-success alert-dismissible fade show">
       <button type="button" class="close" data-dismiss="alert">&times;</button>
       <strong>Registration SuccessFul!</strong>
     </div>
       ';
       echo '  <div class="alert container alert-success alert-dismissible fade show">
       <button type="button" class="close" data-dismiss="alert">&times;</button>
       <strong>Registration SuccessFul! login to continue</strong>
     </div>';
    // header("location: login.php");
    }
     else{
       echo '<div class="alert container alert-danger alert-dismissible fade show">
       <button type="button" class="close" data-dismiss="alert">&times;</button>
       <strong>Registration Un-SuccessFul!</strong>
     </div>';
     }

// login success save and save to Database redirect to index
}


}

?>







<script src="libraries\custom\script.js"></script>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
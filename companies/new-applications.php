<?php
    include('includes/companies-header.php');
    require_once("../const/mysqli-connection.php");


?>


  <div class="container mt-4">
      <div class="header_wrap">
        <div class="num_rows">
		
				<div class="form-group w-50"> 	<!--		Show Numbers Of Rows 		-->
			 		<select class  ="form-control" name="state" id="maxRows">
						 
						 
						 <option value="10">10</option>
						 <option value="15">15</option>
						 <option value="20">20</option>
						 <option value="50">50</option>
						 <option value="70">70</option>
						 <option value="100">100</option>
            <option value="5000">Show ALL Rows</option>
						</select>
			 		
			  	</div>
        </div>
        <div class="tb_search">
<input type="text" id="search_input_all" onkeyup="FilterkeyWord_all_table()" placeholder="Search.." class="form-control">
        </div>
      </div>
      <table class="table ">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">First</th>
              <th scope="col">Last</th>
              <th scope="col">email</th>
              <th scope="col">Major</th>
              <th scope="col">CV</th>
              <th scope="col">Transcript</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
          <?php
            include_once("../const/mysqli-connection.php");

          $query = "SELECT * FROM students INNER JOIN applications ON students.id=applications.student_id LIMIT 15";
          $result = mysqli_query($dbConnection, $query);
          while ($row = mysqli_fetch_assoc($result)) {
            $firstName = $row['first_name'];
            $id = $row['id'];
            $studentId = $row['student_id']; 
            $lastName = $row['last_name'];
            $email = $row['email'];
            $major = $row['major'];
            $transcript = $row['student_transcript'];
            $cv = $row['student_cv'];
            ?>
            <tr>
              <th scope="row"><?php echo $id?></th>
              <td><?php echo $firstName?></td>
              <td><?php echo $lastName?></td>
              <td><?php echo $email?></td>
              <td><?php echo $major?></td>
              <td><a href="../students/files/<?php echo $cv?>" target="_blank">Cv</a></td>
              <td><a href="../students/files/<?php echo $transcript?>" target="_blank">Transcript</a></td>
              <td>
                <a href="add-interview.php?studentAddId=<?php echo $studentId?>" class="btn btn-success" ><i class="fa fa-check"></i></a>
                <a href="reject-application.php?studentId=<?php echo $studentId?>" class="btn btn-danger"><i class="fas fa-window-close"></i></a>
                <!-- <a href="" class="btn btn-secondary">Read More</a> -->
              </td>
            </tr>
            <?php
          }

          ?>
          </tbody>
        </table>

<!--		Start Pagination -->
			<div class='pagination-container'>
				<nav>
				  <ul class="pagination">
				   <!--	Here the JS Function Will Add the Rows -->
				  </ul>
				</nav>
			</div>
      <div class="rows_count">Showing 11 to 20 of 91 entries</div>

</div> <!-- 		End of Container -->



<!--  Developed By Yasser Mas -->
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-8216c69d01441f36c0ea791ae2d4469f0f8ff5326f00ae2d00e4bb7d20e24edb.js"></script>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>

      <script id="rendered-js" src="../libraries/custom/table.js" >

     </script>

  


<script src="../libraries/custom/table.js"></script>
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
<?php
session_start();
if(isset($_SESSION['faculty'])==false) {
$_SESSION['Login.Error']= "Faculty login required";
header('Location: faculty_log.php');  
}
$con=mysqli_connect("localhost", "root", "","Elogbook")or die("cannot connect");

if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
} ?>
<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properities -->
  <title> Reports </title>

  <link href='font.css' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="../packaged/css/semantic.css">

  <script src="jquery.js"></script>
  <script src="jquery_address.js"></script>
  <script src="../packaged/javascript/semantic.js"></script>
  <script src="homepage.js"></script>

  <link rel="stylesheet" type="text/css" href="feed.css">
  <link rel="stylesheet" type="text/css" href="homepage.css">
  <script src="feed.js"></script>
  <script src="report.js"></script>
</head>
<body >
  <div class="ui inverted page grid masthead segment" style="padding-top:30px;background-image:url(images/2.jpg)">
    <div class="column">
      <div class="inverted secondary pointing ui menu">
        <div class="header item">Department of Information Science and Engineering, RVCE</div>
        <div class="right menu">
         <a class="item" href="faculty_menu.php">Home</a>
		  <div class="ui dropdown link item">
            Menu
            <i class="dropdown icon"></i>
            <div class="menu">
              <a class="item">Messages </a>
              <a class="item">Timetable</a>
              <a class="item">Profile</a>
			 
            </div>
          </div>
          <a class="item" href="instruct.php">Information</a>
          <a class="item" href="faculty_report.php">Stats</a>
		  
		  <a class="item" href="faculty_logout.php">Logout</a>
        </div>
      </div>
      <img src="images/RV_logo.png" class="ui medium image"  style="margin-bottom:6em; width:250px;font-size:1rem" >
      <div class="ui hidden transition information">
        <h1 class="ui inverted header">
          Faculty
        </h1>
        <p>View attendance and other sta.</p>s
		<div class="large basic inverted animated fade ui button">
          <div class="visible content"> Lab session </div>
          <div class="hidden content">
		  <a href=#>View Now</a>
		  </div>
        </div>
        
      </div>
    </div>
  </div>

<div class="ui basic modal" id="each_student">
    <div class="header">
		SESSION
    </div>
	
    <div class=" content">
	<div class="left">
        <i class="tasks icon"></i>
      </div>
	  <div class="right">
        
	 
	
     
		
		

  
    
	

	<?php

					
							
							
							$qry= "SELECT * FROM session where activity='0'";
							$result=mysqli_query($con,$qry);

							if($result) {
							if(mysqli_num_rows($result) <= 0) {
								echo "<p> No session details found. Please contact your admin.</p>"; 
							}
							else {	
							
								echo " <table class='ui left aligned inverted five column celled table segment'><thead><tr><th>Sid</th><th>Semester</th><th>Subject</th><th>Log_in</th><th>Batch</th><th>Lab</th><th>Year</th></tr></thead><tbody>";
								while ($row=mysqli_fetch_array($result))
								{	echo "<tr><td>";
									echo $row['sid'];
									echo "</td><td>";
									echo $row['sem'];
									echo "</td><td>";
									echo $row['sub'];
									echo "</td><td>";
									echo $row['log_in'];
									echo "</td><td>";
									echo $row['batch'];
									echo "</td><td>";
									echo $row['lab_no'];
									echo "</td><td>";
									echo $row['Year'];
									echo "</td></tr>";
								
									
								}
								echo "</tbody></table>";
							}
							
							$q="SELECT count(*) as total from session where activity='0'";
							$result=mysqli_query($con,$q);
							$data=mysqli_fetch_assoc($result);
							echo "Total number of ended sessions:  ";
							echo $data['total'];
						}
				?>
				<div class="actions">
      <div class="two circular ui buttons">
        <a href="faculty_report.php">
        <div class="ui positive right  blue labeled icon button" id="gotoeach">
          Close
          <i class="checkmark icon"></i>
        </div>
		</a>
      </div>

</div> 

    </div>
	</div>
	</div>
	
	<center><h5 class="ui header" style="align:center">Developed by Akshatha A N and Chandana G Upadhyaya under the guidance of Prof.Nagaraj G Cholli</h5></center>					
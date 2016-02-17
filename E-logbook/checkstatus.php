<?php
session_start();
if(isset($_SESSION['admin'])==false) {
$_SESSION['Login.Error']= "Admin login required";
header('Location: adminlogin.php'); 
}
?>

<!DOCTYPE html>
<html>
<head profile="C:\Users\KARTHIK\Desktop\template1\index.html">
<link rel="png" 
      type="image/png" 
      href="file:///C:/Users/KARTHIK/Desktop/template1/images/phone.png" />
<meta charset="UTF-8">
<title>E-Log Book</title>
<meta name="description" content="A description of your website">
<meta name="keywords" content="keyword1, keyword2, keyword3">
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>

<div id="wrapper"> 
<div id="header"> 
<div class="top_banner">
      <h1>E-Log Book</h1>
<!--<p align="right"><img src="C:\Users\KARTHIK\Desktop\template1\images\rv logo.jpg" size="20"/>-->
      <b><h2>Information Science and Engineering</h2></b>
 </div>
  </div>

  <div id="page_content">
<div class="navigation">
      <ul>
      	  <li><a href="signup.php">Student-sign up</a></li>
       	 <li><a href="fsignup.php">Faculty-sign up</a></li>
	<li><a href="adminlogin.php">adminlogin</a></li>
	<li><a href="updates.php">Lab updates</a></li>
    	 <li><a href="rvce.html">RVCE</a></li>
   	<li><a href="department.html">About Department</a></li>
	
        </ul>
    </div>
   <div class="left_side_bar"> 
     <div class="col_1">
        <h1>Main Menu</h1>
        <div class="box">
          <ul>
            <li><a href="hostsession.php">Host session</a></li>
            <li><a href="sendstudentmessage.php">Message to Students</a></li>
            <li><a href="sendfacultymessage.php">Message to Faculty</a></li>
            <li><a href="calendar.html ">calendar</a></li>
            <li><a href="checkstatus.php">Check Lab status</a></li>
            <li><a href="delete.php">End Session</a></li>
            <li><a href="viewdetails.php">Check student details</a></li>
            <li><a href="detailsdownload.php">Attendance</a></li>
            <li><a href="studentdetails.php">Studentdetailsdownload</a></li>
            <li><a href="dashboard.php"> Marks Statistics</a></li>
            <li><a href="upload.php"> Details upload </a></li>
            <li><a href="adminlogout.php">Log out</a></li>
           
          </ul>
        </div>
      </div>
      
 <div class="col_1">
        
      </div>

    </div>

   <div class="right_section">
      <div class="navigation" id="sssignup">
        <h2>Status of Labs</h2>
        <hr>
        <p>
<?php
$username ="root";
$password ="";
$hostname ="localhost"; 
$database="project";
$temp=0;
$con_db=mysql_connect($hostname,$username,$password);
$find_db=mysql_select_db($database);
$query="SELECT * from hostsession";
      $result2=mysql_query($query);
      echo "<H3><table border=8 cellpadding=8>";
      echo "<tr><th> LAB <th> SUBJECT <th> SEMESTER <th> BATCH </th> </tr>";
        while($field_db=mysql_fetch_assoc($result2))
            {
              if($field_db==0)
              {
                //$temp=1;
                echo "no sessions active right now";
              }
              else
              {
              $temp=1;
              $value2=$field_db['lab'];
              $value3=$field_db['sub'];
              $value4=$field_db['sem'];
              $value5=$field_db['batch'];
              echo"<tr> <td> $value2 <td> $value3<td> $value4<td>$value5</h3>";
            }
            }
           echo"</table>";
           
 
?>
        </p>
        <br>
        <p><a href="#"></a></p>
        <hr>
        <p></p><br>
       
        </div>
      
    </div>
<!--<div class="right_section">
      <div class="navigation" id="fsignup">
        <h2>facultysignup</h2>
        <hr>
        <p></p>
        <br>
        <p><a href="#">Read more</a></p>
        <hr>
        <p></p><br>
        
        </div>
      
    </div>
<div class="right_section">
      <div class="navigation" id="lupdates">
        <h2>lupdates</h2>
        <hr>
        <p></p>
        <br>
        <p><a href="#">Read more</a></p>
        <hr>
        <p></p><br>
        
        </div>
      
    </div>-->


    <div class="clear"></div>
    
    <!--start footer from here-->
    <div id="footer">E-LogBook of Info.Science & Engineerine <a href="http://www.RVCE.edu" target="_blank">RVCE</a><br>
    
    <!--DO NOT remove footer link-->
    <!--Template designed by--><a href="http://www.casino.biz"><img src="images/footer.gif" class="copyright" alt="http://www.casino.biz"></a></div>
	
    <!--/. end footer from here-->
  </div>

</div>

</body></html>
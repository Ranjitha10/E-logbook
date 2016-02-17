<html>
<head profile="C:\Users\KARTHIK\Desktop\template1\index.html">
<link rel="icon" type="image/x-icon" href="images/rvce.ico">
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
      	  <li><a href="signup.html">Student-sign up</a></li>
       	 <li><a href="fsignup.html">Faculty-sign up</a></li>
	<li><a href="adminlogin.html">adminlogin</a></li>
	<li><a href="updates.html">Lab updates</a></li>
    	 <li><a href="rvce.html">RVCE</a></li>
   	<li><a href="department.html">About Department</a></li>
	
        </ul>
    </div>
   <div class="left_side_bar"> 
     <div class="col_1">
        <h1>Main Menu</h1>
        <div class="box">
          <ul>
           <!-- <li><a href="studentlogin.html">Student Login</a></li>
            <li><a href="facultylogin.html">Faculty Login</a></li>-->
           <li><a href="index.html">Home</a></li>
            <!--<li><a href="marks.php">Enter Marks</a></li>-->
            <!--<li><a href="upload.php">Time Table upload</a></li>-->
            <li><a href="adminlogout.php">Logout</a></li>
            <li><a href="sendstudentmessage.php"> Message to Student</a></li>
            <li><a href="sendfacultymessage.php">Message to faculty</a></li>
         <!--   <li><a href="#">Menu Item 9</a></li>
            <li><a href="#">Menu Item 10</a></li>
            <li><a href="#">Menu Item 11</a></li>
            <li><a href="#">Menu Item 12</a></li>-->
          </ul>
        </div>
      </div>
      
 <div class="col_1">
        <h1>Block</h1>
       <!-- <div class="box">
          <p>Enter Block content here...</p>
          <br>
          <p></p>
        </div>-->
      </div>

    </div>

   <div class="right_section">
      <div class="navigation" id="sssignup">
        <h2>View Details</h2>

        <hr>
        <?php
$value1=$_POST['detail'];
$username ="root";
$password ="";
$hostname ="localhost"; 
$database="project";
$con_db=mysql_connect($hostname,$username,$password);
$find_db=mysql_select_db($database);
$temp=0;
/*if($find_db)
{
  echo "database found";
}
else 
{
  echo "database not found";
}*/

//$result="INSERT INTO admin(username,password)VALUES('$value1','$value2')";

if(empty($value1))
{
  echo "<i><h3>USN is compulsary</h3></i>";
}
else
{
  $result="SELECT * FROM ssignup WHERE usn='$value1'";
$result1=mysql_query($result);
     
      if($result1)
      {
        while($field_db=mysql_fetch_assoc($result1))
            {
              echo "<H3><table border=8 cellpadding=8>";
      echo "<tr><th> FIRST NAME <th> LAST NAME <th> USN <th> SEM <th> BATCH <th> EMAIL-ID<th> PHONE NUMBER</th> </tr>";
              $value2=$field_db['fname'];
              $value3=$field_db['lname'];
              $value4=$field_db['usn'];
              $value5=$field_db['sem'];
              $value6=$field_db['batch'];
              $value7=$field_db['emailid'];
              $value8=$field_db['contactno'];
              echo"<tr> <td> $value2 <td> $value3<td> $value4<td>$value5<td>$value6<td>$value7<td>$value8</h3>";
              echo"</table>";
            $temp=1;                 
              }
              if($temp==0)
              {
                echo "<h3>No details found</h3>";
              }
            }
           
}
  mysql_close($con_db);
?>


        
        </p>
        <br>
        <p></p>
        <hr>
        <p></p><br>
       
        </div>
      
    </div>
<!--<div class="right_section">
      <div class="navigation" id="fsignup">
        <h2>facultysignup</h2>
        <hr>
        <p><i class="dropdown icon"></i>
							
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
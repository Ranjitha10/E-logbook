<!DOCTYPE html>
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
	       <li><a href="adminlogin.php">Adminlogin</a></li>
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
            <li><a href="index.html">Home</a></li>
            <li><a href="studentlogin.php">Student Login</a></li>
            <li><a href="facultylogin.php">Faculty Login</a></li>
           
           <li><a href="RR.html ">Rules and Regulations</a></li>
           <li><a href="about-us.html ">About-us</a></li>

            <!--<li><a href="#">Menu Item 3</a></li>
            <li><a href="#">Menu Item 4</a></li>
            <li><a href="#">Menu Item 5</a></li>
            <li><a href="#">Menu Item 6</a></li>
            <li><a href="#">Menu Item 7</a></li>
            <li><a href="#">Menu Item 8</a></li>
            <li><a href="#">Menu Item 9</a></li>
            <li><a href="#">Menu Item 10</a></li>
            <li><a href="#">Menu Item 11</a></li>
            <li><a href="#">Menu Item 12</a></li>-->
          </ul>
        </div>
      </div>
      
 <div class="col_1">
        <!--<h1>Block</h1>
        <div class="box">
          <p>Enter Block content here...</p>
          <br>
          <p></p>
        </div>-->
      </div>

    </div>

    <div class="right_section">
      <div class="navigation" >
        <h2><i>Lab updates</i></h2>
        <hr>
        <p> <?php
//$value1=$_POST['fname'];
//$value2=$_POST['password'];
$username ="root";
$password ="";
$hostname ="localhost"; 
$database="project";
$con_db=mysql_connect($hostname,$username,$password);
$find_db=mysql_select_db($database);
if($find_db)
{
  //echo "database found";
  $result="SELECT * FROM adminupdates";
$result1=mysql_query($result);

if($result1) 
{
  echo "<i><h3>MESSAGE FROM ADMIN:</h3></i>";
     //$row=mysql_fetch_array($result1);
     while($field_db = mysql_fetch_assoc($result1))
     {
      echo "<h3>".$field_db['message']."<br/>";
     }
}      
mysql_close($con_db);
  
}
else 
{
  echo "database not found";
}

?>
</p>
        <br>
        <p></p>
        <hr>
        <p>
          <?php
//$value1=$_POST['fname'];
//$value2=$_POST['password'];
$username ="root";
$password ="";
$hostname ="localhost"; 
$database="project";
$con_db=mysql_connect($hostname,$username,$password);
$find_db=mysql_select_db($database);
if($find_db)
{
  //echo "database found";
  $result="SELECT * FROM facultyupdates";
$result1=mysql_query($result);

if($result1) 
{
  
  echo "<i><h3> MESSAGE FROM FACULTY:</h3></i>";
     //$row=mysql_fetch_array($result1);
     while($field_db = mysql_fetch_assoc($result1))
     {
      
      echo "<h3>". $field_db['message']."<br/>";
     }
}      
mysql_close($con_db);
  
}
else 
{
  echo "database not found";
}

?></p><br>
        
        </div>
      
    </div>
 <div class="clear"></div>
    
    <!--start footer from here-->
    <div id="footer">E-LogBook of Info.Science & Engineering <a href="http://www.RVCE.edu" target="_blank">RVCE</a><br>
    
    <!--DO NOT remove footer link-->
    <!--Template designed by--><a href="http://www.casino.biz"><img src="images/footer.gif" class="copyright" alt="http://www.casino.biz"></a></div>
	
    <!--/. end footer from here-->
  </div>

</div>

</body>
</html>
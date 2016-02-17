<!DOCTYPE html>
<html>
<head profile="C:\Users\KARTHIK\Desktop\template1\index.html">
<link rel="png" 
      type="image/png" 
      href="file:///C:/Users/KARTHIK/Desktop/template1/images/phone.png" />
<meta charset="UTF-8">
<title>Admin Login</title>
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

            <li><a href="hostsession">Menu Item 1</a></li>
            <li><a href="viewreports">Menu Item 2</a></li>
            <li><a href="viewattendance">Menu Item 3</a></li>
            <li><a href="viewmarks">Menu Item 4</a></li>
            </ul>
        </div>
      </div>
      
 <div class="col_1">
        <h1>Block</h1>
        <!--<div class="box">
          <p>Enter Block content here...</p>
          <br>
          <p></p>
        </div>-->
      </div>

    </div>

    <div class="right_section">
      <div class="navigation" id="sssignup">
        <h2>Admin Login</h2>
        <hr>
        <p>
<?php
$value1=$_POST['name'];
$value2=$_POST['password'];
$username ="root";
$password ="";
$hostname ="localhost"; 
$database="project";
$con_db=mysql_connect($hostname,$username,$password);
$find_db=mysql_select_db($database);
/*if($find_db)
{
  echo "database found";
}
else 
{
  echo "database not found";
}*/

//$result="INSERT INTO admin(username,password)VALUES('$value1','$value2')";
$result="SELECT * FROM facultysignup WHERE username='$value1'";
//echo"done";
$result1=mysql_query($result);
$_SESSION['faculty']=false;
//echo"done";
if($result1) 
{
  
     $row=mysql_fetch_array($result1);
      $username1=$row['username'];
      $password1=$row['password1'];
      //$_SESSION['username']=$_POST["username"];
      if(($value1==$username1) && ($value2==$password1))
        {
            $_SESSION['faculty']=true;
            echo"login successful";
            header('Location: facultyloginsuccess.php');
       
        }
    else 
      {
        echo "Login failed please re-enter your username and password ";
      }
}

/*if($result1)
{
  echo "successfull updated database";
}
else
{
  echo "insertion failed";
}*/
mysql_close($con_db);
?>

</p>
        <br>
        <p></p>
        <hr>
        <p></p><br>
        
        </div>
      
    </div>
 <div class="clear"></div>
    
    <!--start footer from here-->
    <div id="footer">E-LogBook of Info.Science & Engineerine <a href="http://www.RVCE.edu" target="_blank">RVCE</a><br>
    
    <!--DO NOT remove footer link-->
    <!--Template designed by--><a href="http://www.casino.biz"><img src="images/footer.gif" class="copyright" alt="http://www.casino.biz"></a></div>
	
    <!--/. end footer from here-->
  </div>

</div>

</body></html>

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
            <li><a href="hostsession.php">Student Login</a></li>
           <!-- <li><a href="sendstudentmessage.php">Message to Students</a></li>-->
           <li><a href="sendfacultymessage.php">Message to Faculty</a></li>
          <li><a href="checkstatus.php">Check Lab status</a></li>
            <li><a href="adminlogout.php">Log out</a></li>
           <!-- <li><a href="#">Menu Item 6</a></li>
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
        <h1>Block</h1>
        <div class="box">
          <p>Enter Block content here...</p>
          <br>
          <p></p>
        </div>
      </div>

    </div>

    <div class="right_section">
      <div class="navigation" id="sssignup">
        <h2>Student Updates</h2>
        <hr>
        <p></p>
        <br>
        <p><?php

$value1=$_POST['message'];
//$value2=$_POST['date'];
$username ="root";
$password ="";
$hostname ="localhost"; 
$database="project";
$con_db=mysql_connect($hostname,$username,$password);
$find_db=mysql_select_db($database);
if($find_db)
{
  //echo "database found";
}
else 
{
  echo "database not found";
}

$result="INSERT INTO atofmsgs(message)VALUES('$value1')";
//echo"done";
$result1=mysql_query($result);
//echo"done";

if($result1)
{
  echo "message sent "; 
}
else
{
  echo "message sending failed";
}
mysql_close($con_db);
?>
</p>
        <hr>
        <p></p><br>
       
        </div>
      
    </div>
<!--<div class="right_section">
      <div class="navigation" id="fsignup">
        <h2>Student Updates</h2>
        <hr>
        <p>
          <form action="studentmessage.php" method="POST">
            <input type="text" name="message" class="textfield" size="150" >
            <input type="submit" value="submit">
            
          
          </p>
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
      
    </div> -->


    <div class="clear"></div>
    
    <!--start footer from here-->
    <div id="footer">E-LogBook of Info.Science & Engineerine <a href="http://www.RVCE.edu" target="_blank">RVCE</a><br>
    
    <!--DO NOT remove footer link-->
    <!--Template designed by--><a href="http://www.casino.biz"><img src="images/footer.gif" class="copyright" alt="http://www.casino.biz"></a></div>
  
    <!--/. end footer from here-->
  </div>

</div>

</body></html>
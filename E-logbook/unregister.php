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
            <!--<li><a href="viewmarks.php">Host session</a></li>-->
            <!--<li><a href="viewattendance.php">Message to Students</a></li>-->
            <!--<li><a href="register.php">Register to a session</a></li>-->
           <li><a href="studentlogout.php">Logout from lab</a></li>
          <li><a href="index.html">Home</a></li>
            <!--<li><a href="logout.php">Log out</a></li>
           <li><a href="#">Menu Item 6</a></li>-->
            <!--<li><a href="#">Menu Item 7</a></li>
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
        <h2>Logout from lab</h2>
        
        <hr>
        <p>
        <!--<form  action="unregister.php"method="POST">
        <input type="text" name="usn"></p>
      </form>-->
      <?php
      $value1=$_POST['usn'];
      $username ="root";
$password ="";
$hostname ="localhost"; 
$database="project";
$con_db=mysql_connect($hostname,$username,$password);
$find_db=mysql_select_db($database);
$temp=0;
/*if($find_db)
{
  echo "database found <br/>";
}
else 
{
  echo "database not found";
}*/

if(empty($value1))
{
  echo "<h3>Please enter USN</h3>";
}
else
{
  $query="SELECT usn from register";
              $result2=mysql_query($query);
              
        while($field_db=mysql_fetch_assoc($result2))
            {
                if($field_db['usn']==$value1)
                    {
                      $temp = 1;
                      $query="DELETE FROM register WHERE usn='".$value1."'";
                      $retval =mysql_query($query);
                      //echo "<h3>you are not registere </h3>";
                      echo"<h3>YOU ARE SUCCESSFULLY LOGGED OUT </h3>";
                    }
             }
             if($temp == 0)
             {
              echo "<h3>Logout Failed</h3>";
             }
                    
                    
                      /*$query="DELETE FROM register WHERE usn='".$value1."'";
                      $retval =mysql_query($query);
                      if(!$retval)
                        {
                            echo"<h3> LOG OUT FAILED PLEASE CONTACT ADMIN </H3>";
                        }
                      else
                        {
                            echo"<h3>YOU ARE SUCCESSFULLY LOGGED OUT </h3>";
                        }
                    */
            
  /*$query="DELETE FROM register WHERE usn='".$value1."'";
  $retval =mysql_query($query);
  if(!$retval)
  {
      echo"<h3> LOG OUT FAILED PLEASE CONTACT ADMIN </H3>";
  }
  else
  {
    echo"<h3>YOU ARE SUCCESSFULLY LOGGED OUT </h3>";
}*/
}
mysql_close();
 ?>
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
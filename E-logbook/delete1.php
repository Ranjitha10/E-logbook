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
         <!-- <li><a href="delete.php">End Session</a></li>-->
          

            <li><a href="adminlogout.php">Log out</a></li>
           
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
        <h2>End session</h2>
        <hr>
        <p>
          <?php
         

$value1=$_POST['lab'];

$username ="root";
$password ="";
$hostname ="localhost"; 
$database="project";
$temp=0;
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
if(empty($value1))
{
  echo "all fields are compulsary";
}
else
{
      $query="SELECT * from hostsession";
      $result2=mysql_query($query);
      
        while($field_db=mysql_fetch_assoc($result2))
            {
              if($field_db['lab']==$value1)
                    {
                     $query="DELETE FROM hostsession WHERE lab='".$value1."'";
                      $retval =mysql_query($query);
                      if($retval)
                      {
                        echo "<h3>Session Ended successfully<h3>";
                      }
                      else
                      {
                        echo "<h3>Session not ended please try once again<h3>"; 
                      }
                      $temp=1;
                    }
                    else
                    {
                     $temp=0;
                    }
            }
            if($temp==0)
            {
              echo "<h3>No session active right now<h3>";
            }
  }
      
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
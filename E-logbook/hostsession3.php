<?php
/*session_start();
if(isset($_SESSION['admin'])==false) {
$_SESSION['Login.Error']= "Admin login required";
header('Location: adminlogin.php'); 
}
$con=mysqli_connect("localhost", "root","","project")or die("cannot connect");

if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
if(isset($_SESSION['sem1']))
	unset($_SESSION['sem1']);
if(isset($_SESSION['subject']))
	unset($_SESSION['subject']);
if(isset($_POST['batch']))
{	
	$_SESSION['batch']=$_POST['batch'];
	
}
if(isset($_POST['lab']) && ((isset($_SESSION['lab']))))
{
	$_SESSION['lab']=$_POST['lab'];
}*/
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
      	  <li><a href="signup.html">Student-sign up</a></li>
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
         
          </ul>
        </div>
      </div>
      
 <div class="col_1">
        
        <!--<div class="box">
          <p>Enter Block content here...</p>
          <br>
          <p></p>
        </div>-->
      </div>

    </div>
    

   <div class="right_section">
      <div class="navigation" id="sssignup">
        <h2>Host session</h2>
        <hr>
        <p>
         <?php
         $value1=$_POST['sem'];
$value2=$_POST['subject'];
$value3=$_POST['batch'];
$value4=$_POST['lab'];
//echo $value2;
//echo $value3;
/*$value6=$_POST['batch'];
$value7=$_POST['mailid'];
$value8=$_POST['contactno'];
$value9=$_POST['password1'];
$value10=$_POST['verify'];*/
 $date=date("Y-m-d");
 $my_date = date('Y-m-d',strtotime($date));

 //echo "date is ".$date;
$username ="root";
$password ="";
$hostname ="localhost"; 
$database="project";
$con_db=mysql_connect($hostname,$username,$password);
$find_db=mysql_select_db($database);
/*if($find_db)
{
  echo "database found <br/>";
}
else 
{
  echo "database not found";
}*/
if(empty($my_date))
{
  echo "variable date is empty";
}
if(empty($value1)||empty($value2)||empty($value3)||empty($value4))
{
  echo "all fields are compulsary";
}
else
{
  $query="SELECT lab from hostsession";
      $result2=mysql_query($query);
      while($field_db=mysql_fetch_assoc($result2))
            {
                if($field_db['lab']==$value4)
                    {
                      echo "Lab is already assigned to another batch ";
                      echo "please select other lab";
                      mysql_close($con_db);
                    }
            }
              $result="INSERT INTO hostsession(sem,sub,batch,lab) VALUES ('$value1','$value2','$value3','$value4')";
              $result1=mysql_query($result);
            if($result1)
             {
                echo "<h3>Session hosted</h3>";
             }
            else
            {
              echo "<h3> Session not hosted please try once again </h3>";
            }
          
}
        

?>
         
        </p><br>
        <!--<p><a href="#">Read more</a></p>-->
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
 
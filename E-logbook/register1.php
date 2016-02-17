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
          <li><a href="index.html">Home</a></li>
           <li><a href="RR.html ">Rules and Regulations</a></li>
           <li><a href="about-us.html ">About-us</a></li>
           <!--<li><a href="logout.php">LOG OUT</a></li>-->
          </ul>
        </div>
      </div>
      
 <div class="col_1">
        
      </div>

    </div>

   <div class="right_section">
      <div class="navigation" id="sssignup">
        <h2>Register</h2>
        <hr>
        <p><?php
         $value1=$_POST['usn'];
$value2=$_POST['sem'];
$value3=$_POST['batch'];
$value4=$_POST['lab'];
$date=date("Y/m/d");
 $my_date = date('Y-m-d', strtotime($date));
 //echo "date is ".$my_date;
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
if(empty($value1)||empty($value2)||empty($value3)||empty($value4))
{
  echo "all fields are compulsary";
}
else
{
      $query="SELECT * from hostsession";
      $result2=mysql_query($query);
      $query2="SELECT * from register";
      $result=mysql_query($query2);
        while($field_db=mysql_fetch_assoc($result))
            {
                if($field_db['usn']==$value1)
                    {
                      echo "<h3>You are already registered</h3>";
                    }
            }
      while($field_db=mysql_fetch_assoc($result2))
            {
              $value5=$field_db['sem'];
              $value6=$field_db['batch'];
              $value7=$field_db['lab'];
              if(($value2==$value5) && ($value3==$value6) && ($value4==$value7))
              {
                $temp=1;
                $result="INSERT INTO register(usn,sem,batch,lab) VALUES ('$value1','$value2','$value3','$value4')";
               $result1=mysql_query($result);
                 if($result1)
                 {
                      echo "<h3>Registration successful</h3>";
                      $result3="INSERT INTO logbookfinal(usn,sem,batch,lab) VALUES ('$value1','$value2','$value3','$value4')";
                      $result4=mysql_query($result3);
                      if($result4)
                      {
                          echo "<h3>your attendance marked as present</h3>";
                      }
                      else
                      {
                         echo "<h3>Attendance not marked please contact admin </h3>";
                      }

                }
                else
                {
                  echo "<h3>Registration failed</h3>";
                }
             }
           }
             if($temp==0)
             {
              echo" <h3> No session active right now for this lab<h3>";
             }
          }
mysql_close($con_db);
?></p>
        <br>
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
    <div id="footer">E-LogBook of Info.Science & Engineering <a href="http://www.RVCE.edu" target="_blank">RVCE</a><br>
    
    <!--DO NOT remove footer link-->
    <!--Template designed by--><a href="http://www.casino.biz"><img src="images/footer.gif" class="copyright" alt="http://www.casino.biz"></a></div>
	
    <!--/. end footer from here-->
  </div>

</div>

</body></html>
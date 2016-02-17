
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
            <li><a href="studentlogin.php">Student Login</a></li>
            <li><a href="facultylogin.php">Faculty Login</a></li>
           <li><a href="index.html">Home</a></li>
           <li><a href="RR.html ">Rules and Regulations</a></li>
          <!--  <li><a href="#">Menu Item 5</a></li>
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
        <h2>Student sign-up</h2>
        <hr>
        <p>
<?php
$value1=$_POST['fname'];
$value2=$_POST['lname'];
$value3=$_POST['usn'];
$value4=$_POST['sem'];
$value6=$_POST['batch'];
$value7=$_POST['mailid'];
$value8=$_POST['contactno'];
$value9=$_POST['password1'];
$value10=$_POST['verify'];
$username ="root";
$password ="";
$hostname ="localhost"; 
$database="project";
$con_db=mysql_connect($hostname,$username,$password);
$find_db=mysql_select_db($database);

if(empty($value1)||empty($value2)||empty($value3)||empty($value4)||empty($value6)||empty($value7)||empty($value8)||empty($value9))
{
  echo "all fields are compulsary";
}
else 
{ 
  if((!(preg_match("/^[a-zA-Z]+$/i",$value1))||(!(preg_match("/^[a-zA-Z]+$/i",$value2)))))
          {
            echo "<h3>Please Enter characters for names,Integers are not allowed !</h3>";
            //mysql_close($con_db);
          }

      else{ 
       $reg='/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
      if(preg_match($reg,$value7))
        {
          if((preg_match("/^[0-9]+$/i",$value8)))
          {
          if(strlen($value8)==10)
           {
              $query="SELECT usn from ssignup";
              $result2=mysql_query($query);
              
        while($field_db=mysql_fetch_assoc($result2))
            {
                if($field_db['usn']==$value3)
                    {
                      echo "<h3>USN already exists please enter correct USN number</h3>";
                      //mysql_close($con_db);
                    }
            }
          if($value9==$value10)
            {
                  $result ="INSERT INTO ssignup(fname,lname,usn,sem,batch,emailid,contactno,password1,verify) VALUES ('$value1','$value2','$value3','$value4','$value6','$value7','$value8','$value9','$value10')";
                  $result1 = mysql_query($result);
                   if($result1)
                    {
                      echo "<h3>Sign up successful you are  successfull registered</h3>";
                    }
                   else
                   {
                      echo "Sign up failed please try once again";
                    }
           } 
         else
          {
            echo "<h3>  please re confirm your password  </h3>";
          } 
        }
        
        else
        {
          echo "<h3>Mobile number should not be more then or less then 10 digits please verify your mobile number</h3>";
        }
      }
      else
      {
        echo "plese enter numbers for phone number characters are not allowed";
      }

       }
         else 
          {  
        echo"<h3>email id you have entered is not in a correct format<br/>";
        echo "enter emailid in a correct format.............</h3>";
         }
       }
    
}
mysql_close($con_db);
?>
        </p>
        <br>
        <!--<p><a href="#">Read more</a></p>-->
        <hr>
        <p></p><br>
       
      </div>
      
    </div>
<!--<div class="right_section">
      <div class="navigation" id="fsignup">
        <h2>studentsignup</h2>
        <hr>
        <p>
</p>
        <br>
        <p><a href="#">Read more</a></p>
        <hr>
        <p></p><br>
        
        </div>
      
    </div>-->
<!--<div class="right_section">
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
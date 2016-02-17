<?php
$value1=$_POST['fname'];
$value2=$_POST['password'];
$username ="root";
$password ="";
$hostname ="localhost"; 
$database="test";
$con_db=mysql_connect($hostname,$username,$password);
$find_db=mysql_select_db($database);
if($find_db)
{
  echo "database found";
}
else 
{
  echo "database not found";
}

$result="INSERT INTO test1(name,password)VALUES('$value1','$value2')";
//echo"done";
$result1=mysql_query($result);
//echo"done";

if($result1)
{
  echo "successfull updated database";
}
else
{
  echo "insertion failed";
}
mysql_close($con_db);
?>
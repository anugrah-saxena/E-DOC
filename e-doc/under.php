<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 $mail= $_POST["mail"];
 $ssn=$_POST["ssn"];
if($_POST["fname"] && $_POST["mail"] && $_POST["lname"] && $_POST["ssn"] && $_POST["age"])
{
if((strlen($mail)<11)||!(strstr($mail,"@"))||!(strstr($mail,".")))
{echo"<h3>"."not a valid mail id"."</h3>";
exit(1);
}
mysql_select_db("homeopathy", $con);
$sql="INSERT INTO case1 (fname,lname,age,sex,date,month,year,nationality,profession,phone,mail,ssn)
VALUES
('$_POST[fname]','$_POST[lname]','$_POST[age]','$_POST[sex]','$_POST[date]','$_POST[month]','$_POST[year]','$_POST[nationality]','$_POST[profession]','$_POST[phone]','$_POST[mail]','$_POST[ssn]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  
echo "1 record added";
mysql_close($con);
}
else
{
echo"<h2>"."Go back and Enter full correct details"."</h2>"; 
}
?> 
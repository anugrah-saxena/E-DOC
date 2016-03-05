<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("homeopathy", $con);

$sql="INSERT INTO case3(a,tendency,addiction,temp,activity,bp,apetite,thirst,toungue,urine,ssn)
VALUES
('$_POST[a]','$_POST[tendency]','$_POST[addiction]','$_POST[temp]','$_POST[activity]','$_POST[bp]','$_POST[apetite]','$_POST[thirst]','$_POST[toungue]','$_POST[urine]','$_POST[ssn]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

mysql_close($con)
?> 
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("homeopathy", $con);

$sql="INSERT INTO case2(problem1,problem2,problem3,start,progress,pain,related,attach,history,ssn)
VALUES
('$_POST[problem1]','$_POST[problem2]','$_POST[problem3]','$_POST[start]','$_POST[progress]','$_POST[pain]','$_POST[related]','$_POST[attach]','$_POST[history]','$_POST[ssn]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

mysql_close($con)
?> 
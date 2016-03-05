<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("doctor", $con);

$sql="INSERT INTO appointment(doctor,day,time)
VALUES
('$_POST[doctor]','$_POST[day]','$_POST[time]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

mysql_close($con)
?> 
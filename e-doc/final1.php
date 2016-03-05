<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("homeopathy", $con);
$result = mysql_query("SELECT * FROM case1 WHERE ssn='$_POST[ssn]'");

while($row = mysql_fetch_array($result))
  {
 
 echo "FIRST NAME      : " . $row['fname'] . "<br/><br/>";
echo "  LAST NAME      : " . $row['lname'] . "<br/><br/>";
echo "  AGE            : " . $row['age'] . "<br/><br/>";
echo "  SEX            : " . $row['sex'] . "<br/><br/>";
echo "  NATIONALITY     : " . $row['nationality'] . "<br/><br/>";
echo "  PROFESSION  : " . $row['profession'] . "<br/>";
echo "  PHONE NO.   : " . $row['phone'] . "<br/><br/>";
echo "  E-MAIL      : " . $row['mail'] . "<br/><br/>";
echo "  SSN         : " . $row['ssn'] . "<br/><br/>";

  }



mysql_select_db("homeopathy", $con);
$result = mysql_query("SELECT * FROM case2 WHERE ssn='$_POST[ssn]'");


while($row = mysql_fetch_array($result))
  {
  echo " MAIN PROBLEMS" ;
echo "             (1) : " . $row['problem1'] . "<br/><br/>";
echo "             (2) : " . $row['problem2'] . "<br/><br/>";
echo "             (3) : " . $row['problem3'] . "<br/><br/>";
echo "WHEN IT STARTED : " . $row['start'] . "<br/><br/>";
echo "  HOW IT PROGRESSED : " . $row['progress'] . "<br/><br/>";  
echo "  ANY OTHER PROBLEM : " . $row['related'] . "<br/><br/>";
echo "  RECENT INVESTIGATION OR ANY REPORT : " . $row['attach'] . "<br/><br/>";
echo "  FAMILY HISTORY         : " . $row['history'] . "<br/><br/>";
  
  }

mysql_select_db("homeopathy", $con);
$result = mysql_query("SELECT * FROM case3 WHERE ssn='$_POST[ssn]'");

while($row = mysql_fetch_array($result))
  {
  echo "  ANY TYPE OF ALLERGY : " . $row['a'] . "<br/><br/>";
echo "    ANY TYPE OF TENDENCIES : " . $row['tendency'] . "<br/><br/>";  
echo "    ANY ADDICTION : " . $row['addiction'] . "<br/>";
echo "    BODY TEMPRATURE : " . $row['temp'] . "<br/>"; 
echo "  PHYSICAL ACTIVITIES : " . $row['activity'] . "<br/>";
echo "  BLOOD PRESSURE : " . $row['bp'] . "<br/><br/>"; 
echo "  APETITE (proper or not) : " . $row['apetite'] . "<br/>";
echo "  THIRST : " . $row['thirst'] . "<br/>";
echo "  TOUNGUE COLOUR : " . $row['toungue'] . "<br/>";
echo "  URINE COLOUR  : " . $row['urine'] . "<br/>";

echo "please copy these tables";
mysql_close($con);
?>


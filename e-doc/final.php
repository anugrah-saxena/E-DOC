
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
  echo " --------------------------------PATIENT CASE RECORD----------------------------------------" . "<br/><br/>";
echo "  FIRST NAME            --- " . $row['fname'] . "<br/><br/>";
echo "  LAST NAME             --- " . $row['lname'] . "<br/><br/>";
echo "  AGE                   --- " . $row['age'] . "<br/><br/>";
echo "  SEX                   --- " . $row['sex'] . "<br/><br/>";
echo "  DATE                  --- " . $row['date'];
echo "   /" . $row['month'];
echo "   /" . $row['year'] . "<br/><br/>";
echo "  NATIONALITY           --- " . $row['nationality'] . "<br/><br/>";
echo "  PROFESSION            --- " . $row['profession'] . "<br/><br/>";
echo "  PHONE NO.             --- " . $row['phone'] . "<br/><br/>";
echo "  E-MAIL                --- " . $row['mail'] . "<br/><br/>";
echo "  SSN                   --- " . $row['ssn'] . "<br/><br/>";
}

mysql_select_db("homeopathy", $con);
$result = mysql_query("SELECT * FROM case2 WHERE ssn='$_POST[ssn]'");


while($row = mysql_fetch_array($result))
  {
   echo "MAIN PROBLEMS" . "<br/>";
echo "                    (1)    --- " . $row['problem1'] . "<br/><br/>";
echo "                    (2)    --- " . $row['problem2'] . "<br/><br/>";
echo "                    (3)    --- " . $row['problem3'] . "<br/><br/>";
echo "  WHEN IT STARTED          --- " . $row['start'] . "<br/><br/>";
echo "  HOW IT PROGRESSED        --- " . $row['progress'] . "<br/><br/>";  
echo "  ANY OTHER PROBLEM        --- " . $row['related'] . "<br/><br/>";
echo "  RECENT INVESTIGATION OR ANY REPORT    --- " . $row['attach'] . "<br/><br/>";
echo "  FAMILY HISTORY           --- " . $row['history'] . "<br/><br/>";
  }

mysql_select_db("homeopathy", $con);
$result = mysql_query("SELECT * FROM case3 WHERE ssn='$_POST[ssn]'");



while($row = mysql_fetch_array($result))
  {
echo "    ANY TYPE OF ALLERGY      --- " . $row['a'] . "<br/><br/>";
echo "    ANY TYPE OF TENDENCIES   --- " . $row['tendency'] . "<br/><br/>";  
echo "    ANY ADDICTION            --- " . $row['addiction'] . "<br/><br/>";
echo "    BODY TEMPRATURE          --- " . $row['temp'] . "<br/><br/>"; 
echo "    PHYSICAL ACTIVITIES      --- " . $row['activity'] . "<br/><br/>";
echo "    BLOOD PRESSURE           --- " . $row['bp'] . "<br/><br/>"; 
echo "    APETITE (proper or not)  --- " . $row['apetite'] . "<br/><br/>";
echo "    THIRST                   --- " . $row['thirst'] . "<br/><br/>";
echo "    TOUNGUE COLOUR           --- " . $row['toungue'] . "<br/><br/>";
echo "    URINE COLOUR             --- " . $row['urine'] . "<br/><br/>";
  }


mysql_close($con);
?>
<html>
<body>

<h2 align="center">Please copy  this case record  formand click on the &quot; CONSULT DOCTOR&quot; button for consulting the Doctor.</h2>
<p align="center">&nbsp; </p>
<form name="form1" method="post" action="consultdoctor.php">
  <label>
  <div align="center">
    <input type="submit" name="button" id="button" value="CONSULT DOCTOR">
  </div>
  </label>
</form>
<p align="center">&nbsp;</p>
</body>
</html>

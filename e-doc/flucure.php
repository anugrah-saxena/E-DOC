<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("e_doc", $con);

$result = mysql_query("SELECT * FROM allopathy WHERE disease='swine_flu'");

echo "<table border='2'>
<tr>
<th>DISEASE</th>
<th>MEDICINE1</th>

<th>MEDICINE2</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['disease'] . "</td>";
  echo "<td>" . $row['medicine1'] . "</td>";
  echo "<td>" . $row['medicine2'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysql_close($con);
?>
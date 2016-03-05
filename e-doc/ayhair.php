<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("ayurvedic", $con);

$result = mysql_query("SELECT * FROM cure WHERE disease='hair'");

echo "<table border='2'>
<tr>
<th>DISEASE</th>
<th>cause</th>
<th>SOLUTION</th>
<th>DIET</th>
<th>AVOID</th>
<th>USE IT</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['disease'] . "</td>";
  echo "<td>" . $row['cause'] . "</td>";
  echo "<td>" . $row['solution'] . "</td>";
echo "<td>" . $row['diet'] . "</td>";
  echo "<td>" . $row['avoid'] . "</td>";
  echo "<td>" . $row['use_it'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysql_close($con);
?>
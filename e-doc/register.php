<?php
 session_start();session_destroy();
 session_start();
 $mail= $_POST["regemail"];
if($_POST["regname"] && $_POST["regemail"] && $_POST["regpass1"] && $_POST["regpass2"] )

{
if((strlen($mail)<11)||!(strstr($mail,"@"))||!(strstr($mail,".")))
{echo"<h3>"."not a valid mail id"."</h3>";
exit(1);
}

	if($_POST["regpass1"]==$_POST["regpass2"])
	{
	$servername="localhost";
    $username="root";
    $conn=  mysql_connect($servername,$username)or die(mysql_error());
    mysql_select_db("test",$conn);
    $sql="insert into users (name,email,password)values('$_GET[regname]','$_GET[regemail]','$_GET[regpass1]')";
    $result=mysql_query($sql,$conn) or die(mysql_error());		
    print "<h1>you have registered sucessfully</h1>";
   
    print "<a href='index.php'>go to login page</a>";
	}
	else print "passwords doesnt match";
}
else print"invaild input data";

?>
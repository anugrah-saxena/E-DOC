<?php
session_start();
?>
<html>
<head>
<title>login page</title>
<style type="text/css">
<!--
.style1 {color: #FF8000}
.style2 {color: #00FF40}
-->
</style>
</head>
<body bgcolor="black" style="color:gray">
<form action="index.php" method=get>
<h1 align="center" style="color:#FFFF80" >Welcome to E_DOC</h1>
  
<div align="center">
  <h2>
    <?php
  

session_start(); 
if( $_SESSION["logging"]&& $_SESSION["logged"])
{
     print_secure_content();
}
else {
    if(!$_SESSION["logging"])
    {  
    $_SESSION["logging"]=true;
    loginform();
    }
       else if($_SESSION["logging"])
       {
         $number_of_rows=checkpass();
         if($number_of_rows==1)
            {	
	         $_SESSION[user]=$_GET[userlogin];
	         $_SESSION[logged]=true;
	         print"<h1>you have loged in successfully</h1>";
	         print_secure_content();
            }
            else{
               	print "wrong pawssword or username, please try again";	
                loginform();
            }
        }
     }
     
function loginform()
{
print "please enter your login information to proceed with our site";
print ("<table border='2'><tr><td>username</td><td><input type='text' name='userlogin' size'20'></td></tr><tr><td>password</td><td><input type='password' name='password' size'20'></td></tr></table>");
print "<input type='submit' >";	
print "<h3><a href='registerform.php'>register now!</a></h3>";	
}

function checkpass()
{
$servername="localhost";
$username="root";
$conn=  mysql_connect($servername,$username)or die(mysql_error());
mysql_select_db("test",$conn);
$sql="select * from users where name='$_GET[userlogin]' and password='$_GET[password]'";
$result=mysql_query($sql,$conn) or die(mysql_error());
return  mysql_num_rows($result);
}

function print_secure_content()
{
	print("<b><h1>hi mr.$_SESSION[user]</h1>");
    print "<br><h2>only a logged user can see this</h2><br>
<a href='logout.php'>Logout</a><br><br>
<a href='main.html'>ENTER</a><br>";	
	
}
?>
    <span class="style1">your health our responsibility    </span> </h2>
  <h3 class="style2">please login to get instant acess!</h3>
</div>
</form>
</body>
</html>
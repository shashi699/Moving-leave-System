<html>
<head>
<script>
</script>
</head>
<body>
<form action=login.php method=post>
<h3 align=center>Login</h3>
<table align=center>
<tr><td>Username</td><td><input type=text name=uname id=uname></td></tr>
<tr><td>Password</td><td><input type=password name=pass id=pass></td></tr>
<tr><td colspan=2 align=center><input type=submit name=login value=Login></td></tr>
<tr><td align><a href=password.html>Forgot Password</a></td>
<td align=right><a href=registration.html>Register</a></td></tr>
<tr><td></td><td align=right>(for new user)</td></tr> 
</table>
</form>
</html>


<?php

if(isset($_POST['login']))
{
$uname=$_POST["uname"];
$pass=$_POST["pass"];

$con = pg_connect("host = '172.16.1.4 -U t1931990' password ='' user='t1931990' dbname = 't1931990'");

$qry = "select * from registerp where email='$uname';";

$rs = pg_query($con,$qry);

if(!$rs)
{
	echo"<script>	
			alert(Invalid Username);
		</script>";
}

$dbuname=$rs["email"];
$dbpass=$rs["pass"];

if(($uname!=$dbuname) && ($pass!=$dbpass))
{
		echo"<script>	
			alert(Invalid Username or password);
		</script>";
}	

}
?>



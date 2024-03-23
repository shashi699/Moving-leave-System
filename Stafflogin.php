<html>
<head>
<script>
</script>
</head>
<body>
<form action=Stafflogin.php method=post>
<h1 align=center>LOGIN</h1>
<center><img src=kissclipart-icones-login-clipart-login-computer-icons-user-ff10ae341a89a106.png><center>
<table align=center cellspacing=5 cellpadding=5>
<tr><td>Username</td><td><input type=text name=uname id=uname placeholder="Enter email"></td></tr>
<tr><td>Password</td><td><input type=password name=pass id=pass></td></tr>
<tr><td colspan=2 align=center><input type=submit name=login value=Login></td></tr>
<tr><td align><a href=password.html>Forgot Password</a></td>
<td align=right><a href=StaffRegistration.html>Register</a></td></tr>

</table>
</form>
</html>


<?php

if(isset($_POST['login']))
{
$uname=$_POST["uname"];
$pass=$_POST["pass"];

$con = pg_connect("host = '172.16.1.4 -U t1932007' password ='' user='t1932007' dbname = 't1932007'");

$qry = "select * from StaffRegis;";

$rs = pg_query($con,$qry);

$n=0;
while($row=pg_fetch_array($rs))
{
	if($row["email"]==$uname && $row["pass"]==$pass)
	{
		$n=1;
	}
}

if($n==1)
{
	header("Location: AddStaff.html");
}	
else
{
	echo"<script>alert('Invalid Username or Password');</script>";
}
}
?>


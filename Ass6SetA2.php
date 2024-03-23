<html>
<body>
<body bgcolor=gray>

<?php
session_start();
$_SESSION['start']=time()+60;
$un=$_POST["uname"];
$pass=$_POST["pass"];
if($un=="riya" && $pass=="1234")
{
	$_SESSION['name']=$un;
?>
<html>
<body>
<form method="post" action="welcome.php">
</h3>WELCOME ADMIN</h3>
<input type="submit" value="DONE" name="submit">
</form>
</body>
</html>
<?php
}
else
{echo"Invalid Username or password";}
?>


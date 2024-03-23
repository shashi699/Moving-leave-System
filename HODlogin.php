<html>
<body>
<body bgcolor=gray>
<img src="/home/T1932007/TYProject/ap/resume.jpeg">

<?php
session_start();
$_SESSION['start']=time()+60;	
$un=$_POST["uname"];
$pass=$_POST["pass"];
if($un=="hod" && $pass=="1234")
{
	$_SESSION['name']=$un;
?>

<html><body>
<form method="post" action="HOD.php">

Welcome...Do you want to continue....:<input type="text" name="name"><br>
<input type="submit" name="submit" value="Done">

</form>
</body>
</html>
<?php
}
else
{
	echo"wrong information....";

}
?>
</html>
   </li><a href=HODlogin.html>LoginAgain</a></li><br>
</html>


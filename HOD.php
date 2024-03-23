<html>
<body>
<body bgcolor=gray>
<img src="/home/T1932007/TYProject/ap/resume.jpeg">
<tr align=center><td>Task Of HOD</td></tr>
<tr align=center></tr>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php
session_start();
$_SESSION['current']=time();	
$name=$_POST["name"];
if($_SESSION['current']<($_SESSION['start']))
{
	
	echo"DASHBOARD".$name;
	
}
else
{
	echo"Time Out";
}
?>
<h3>DASHBOARD</h3>
<font color=black size=6><li><a href=ViewStatus.html>View Leave Staff</a></li></font><br>
<font color=black size=6><li><a href=homepage.html>Log Out</a></li></font><br>
</body>
</html>

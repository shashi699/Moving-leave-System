<html>
<body>
<body bgcolor=gray>
<img src="/home/T1932007/TYProject/ap/resume.jpeg">
<tr align=center><td>Task Of Admin</td></tr>
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
<li><a href=AddStaff.html><font color=black size=6>Add Staff</font></a></li><br>
<li><a href=homepage.html><font color=black size=6>Log Out</font></a></li><br>
</body>
</html>

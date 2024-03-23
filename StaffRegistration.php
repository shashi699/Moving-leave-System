
<?php

if(isset($_POST['register']))
{
$email=$_POST["email"];
$name=$_POST["fname"];
$mobno=$_POST["mobileno"];
$pass=$_POST["pass"];

$con = pg_connect("host = '172.16.1.4 -U t1932007' password ='' user='t1932007' dbname = 't1932007'");

$qry = "insert into StaffRegis values('$email','$name','$mobno','$pass');";

$rs = pg_query($con,$qry);

if($rs!=false)
{
	echo"<script>
		{
			alert('registration successfull');
			
		}
	     </script>";
	echo"<center><a href=Stafflogin.html>You can login now....</a><center>";
}

}
?>


<?php

if(isset($_POST['save']))
{
$sno=$_POST["sid"];
$name=$_POST["sname"];
$addr=$_POST["address"];
$mobile=$_POST["mobile"];
$gender=$_POST["gender"];
$email=$_POST["email"];
$designation=$_POST["design"];

if(($sno=='') && ($name=='') &&  ($addr=='') && ($mobile=='') &&  ($gender=='') &&  ($email=='') &&  ($designation==''))
{
	echo"<script>
		{
			alert('Please Fill All Information');
			
		}
	     </script>";
}
else
{
$con = pg_connect("host = '172.16.1.4 -U t1932007' password ='' user='t1932007' dbname = 't1932007'");

$qry = "insert into AddStaff values('$sno','$name','$addr','$mobile','$gender','$email','$designation');";

$rs = pg_query($con,$qry);

if($rs!=false)
{
	
	echo"<script>
		{
			alert('Saved');
			
		}
	     </script>";

}
else
{
	echo"<script>
		{
			alert('Information Not Saved!! Fill Again');
			
		}
	     </script>";
		
}
}
}
?>







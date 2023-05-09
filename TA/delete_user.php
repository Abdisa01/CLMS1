<?php
include 'dbcon.php';
	$email_id = $_GET['pn'];
	
	$result1 = mysql_query("delete FROM account where email_id='$email_id'") or die(mysql_error());
	echo"<script>alert(' User Account is deleted successfully')</script>";
	echo "<script>windows: location='deleteuser.php'</script>";	
?>
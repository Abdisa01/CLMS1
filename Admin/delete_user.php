<?php
include 'dbcon.php';
	$id=$_GET['id '];
	
	$result1 = mysql_query("delete FROM user where user_id='$id'") or die(mysql_error());
	echo"<script>alert('User Account is deleted successfully')</script>";
	echo "<script>windows: location='deleteuser.php'</script>";	
?>
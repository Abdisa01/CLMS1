<?php
include 'dbcon.php';
	$id=$_GET['vid'];
	
	$result1 = mysql_query("delete FROM victims_information where vid='$id'") or die(mysql_error());
	echo "<script>window.location='deletevictims.php';</script>";	
?>
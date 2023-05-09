<?php
include 'dbcon.php';
$id=$_GET['id'];
	$result1 = mysql_query("delete FROM feedback where id='$id'") or die(mysql_error());
	echo "<script>alert('Feedback  is deleted succssfully')</script>";
	echo  "<script>window.location='view_feedback.php';</script>";	
		
?>
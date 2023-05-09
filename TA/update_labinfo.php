<?php 
include('dbcon.php');
$ln=$_GET['ln'];
$lno= $_GET['lno'];
$lt= $_GET['lt'];
$ll= $_GET['ll'];								
$tu= $_GET['tu'];
$ls= $_GET['ls'];
$acco= $_GET['acco'];
mysql_query("update laboratory set lab_name='$ln', lab_number='$lno', lab_type= '$lt', lab_location= '$ll' , target_user = '$tu' , lab_status= '$ls',accomendation = '$acco' ")or die(mysql_error());
	echo "<script>alert('Laboratory information updated successfully')</script>";							
		echo "<script>window.location='updateLabinfo.php';</script>";							

?>	
<?php 
include('dbcon.php');

$id=$_GET['user_id'];
$fn= $_GET['fn'];
$ln=$_GET['ln'];
$user_type= $_GET['user_type'];
$bn= $_GET['bn'];
$email_id= $_GET['email_id'];
$pn=$_GET['pn'];
	mysql_query("update account set fn='$fn',ln='$ln',bn='$bn',email_id = '$email_id',pn = '$pn'  where user_id='$id'")or die(mysql_error());
	echo "<script>alert('User Account Updated Successfully!')</script>";							
		echo "<script>window.location='updateuser.php';</script>";								
							
?>	
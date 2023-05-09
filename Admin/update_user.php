<?php 
include('dbcon.php');

$id=$_POST['user_id'];
$fn= $_POST['f_name'];
$ln=$_POST['l_name'];
$user_type= $_POST['usertype'];
$bn= $_POST['organization'];
$email_id= $_POST['email'];
$pn=$_POST['phone'];
	mysql_query("update user set f_name='$fn',l_name='$ln',organization='$bn',email = '$email_id',usertype = '$user_type',phone = '$pn'  where user_id='$id'")or die(mysql_error());
	echo "<script>alert('User Account Updated Successfully!')</script>";							
		echo "<script>window.location='updateuser.php';</script>";								
							
?>	
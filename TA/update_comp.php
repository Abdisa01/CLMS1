<?php 
include('dbcon.php');
$cn= $_GET['cn'];
$ct= $_GET['ct'];
$cm= $_GET['cm'];								
$cs= $_GET['cs'];
$ln= $_GET['ln'];
$lno= $_GET['lno'];
$ac= $_GET['ac'];
$status= $_GET['status'];

mysql_query("update computer set comp_name='$cn', comp_type='$ct', comp_model= '$cm',lab_name = '$ln' , lab_number = '$lno',AMU_code = '$ac',status = '$status'")or die(mysql_error());
	echo "<script>alert('computer record updated successfully')</script>";							
		echo "<script>window.location='update_computer.php';</script>";							

?>	
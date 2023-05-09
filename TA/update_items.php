<?php 
include('dbcon.php');
$in=$_GET['in'];
$it= $_GET['it'];
$im= $_GET['im'];
$serial= $_GET['serial'];								
$ln= $_GET['ln'];
$lno= $_GET['lno'];
$ac= $_GET['ac'];
$status= $_GET['status'];
mysql_query("update item set item_name='$in', item_type='$it', item_model= '$im', item_serial= '$serial' , lab_name = '$ln' , lab_number = '$lno',AMU_code = '$ac',status = '$status'")or die(mysql_error());
	echo "<script>alert('Item information updated successfully')</script>";							
		echo "<script>window.location='updateItems.php';</script>";							

?>	
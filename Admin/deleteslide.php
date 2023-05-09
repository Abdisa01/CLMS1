<?php 
include('../dbcon.php');
 $id=$_GET['ID'];
	mysql_query("delete from Slide where id='$id'")or die(mysql_error());
	echo "<script>windows: location='manage_slide.php'</script>";
								
							?>	
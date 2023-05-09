<?php 
include('../dbcon.php');
 $id=$_REQUEST['ID'];
 $status="On";
 $stat="Off";
 $querys = mysql_query("SELECT * FROM Slide where status='$status' ");
 $rows = mysql_fetch_array($querys);
 $idnum= $rows['id'];
 mysql_query("Update Slide set status='$stat' where id='$idnum'")or die(mysql_error());
 mysql_query("Update Slide set status='$status' where id='$id'")or die(mysql_error());
 echo "<script>windows: location='manage_slide.php'</script>";
?>	
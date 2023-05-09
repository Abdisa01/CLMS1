<?php
				include('dbcon.php'); 
				  if(isset($_POST['reset'])){
			
$email=$_POST['email'];
$query=mysql_query("select * from user where email_id='$email'")or die (mysql_error());
$row=mysql_fetch_array($query);
if($row > 0){
	$user_id=$row['username'];
$pass=$row['password'];
$jo= base64_decode($pass);
$fn=$row['f_name'];
$ln=$row['l_name'];



echo '<div class="alert alert-dismissable alert-success">';
									$error = "Successfully Recovered Check Your Email!";
								echo '<div style="font-size:17px; color:Green;">';  echo '<strong>'.'<center>'.$error.'</center>'.'</strong>'; echo'</div>';
								echo '<br>';
								echo '</div>';	

$subject="Computer Laboratory Management System";	
$message = "Dear $fn $ln 

Your User Name: $user_id
     Password : $jo




DON'T REPLY to this email";

											 // Send mail by PHP Mail Function
											mail($email, $subject, $message, "From: "."From: "."Clms_ddps@Gov.et");



}
else{
								header('location:access_denied1.php');			
				  }
				  }
?>
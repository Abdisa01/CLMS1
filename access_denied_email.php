<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">
					<?php include('head.php'); ?>
				<div class="span2">
					<?php include('sidebar.php'); ?>
				</div>
				<div class="span10" style="margin-left:30px;">
				<div style="margin-left:100px;" class="alert alert-danger">The email address you requested is not registered in our database !</div>
					
					
                   <form class="form-horizontal" method="post" action=" ">
				
				<div class="control-group">
				<div style="">
								 <?php
				include('dbcon.php'); 
				  if(isset($_POST['submit'])){
			
$email=$_POST['email'];
$query=mysql_query("select * from user where email='$email'")or die (mysql_error());
$row=mysql_fetch_array($query);
if($row > 0){
$user_id=$row['username'];
$pass=$row['password'];
$jo= base64_decode($pass);
$fn=$row['f_name'];
$ln=$row['l_name'];


								echo"<script>alert('Successfully Recovered Check Your Email Now!')</script>";
	                            echo "<script>window.location='index.php';</script>";
								

$subject="AMiT computer laboratory Management System";	
$message = "Dear $fn $ln 

Your User Name: $user_id
     Password : $jo




DON'T REPLY to this email";

											 // Send mail by PHP Mail Function
											mail($email, $subject, $message, "From: "."From: "."Clms_ddps@Gov.et");



}
else{
								header('location:access_denied_email.php');			
				  }
				  }
?></div>
				<center>	<label class="control-label" style="margin-left:150px;" for="inputEmail">E-mail address</label>
					<div class="controls">
					<input type="email" style="height:20px; width:250px; margin-left:-170px;" id="inputEmail" name="email" placeholder="E-mail Address" required>
					<button type="submit" name="submit" class="btn btn-success"><i class="icon-signin icon-large"></i>&nbsp;Submit</button></center>
					</div>
				</div>
			</form>
					
				</div>
			</div>
		</div>
    </div>
<?php include('footer.php') ?>

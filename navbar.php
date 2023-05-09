  		
	<?php include('tooltip.php'); ?>			
	<div class="navbar navbar-fixed-top navbar-inverse">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="nav-collapse collapse">
					<ul class="nav">		
						  <li class="divider-vertical"></li>
								<li class="">
								<a  rel="tooltip"  data-placement="bottom" title="Home" id="home"   href="index.php"><i class="icon-home icon-large"></i>&nbsp;Home</a> 
								</li>
						 
					     <li class="divider-vertical"></li>
							<li class="">
							<a rel="tooltip"  data-placement="bottom" title="Click Here to know About Us" id="aboutus" href="aboutus.php"><i class="icon-gears icon-large"></i>&nbsp;About Us</strong></a> 
							</li>
							
							<li class="divider-vertical"></li>
							<li class="">
							<a rel="tooltip"  data-placement="bottom" title="Click Here to see Latest Updates" id="news" href="latestupdate.php"><i class="icon-briefcase icon-large"></i>&nbsp;Latest News</strong></a> 
							</li>
							
							<li class="divider-vertical"></li>
							<li class="">
							<a rel="tooltip"  data-placement="bottom" title="Click Here to register" id="services" href="createuser.php"><i  class="icon-gift icon-large"></i>&nbsp;Register</a></li>
							
							
							
						    <li class="divider-vertical"></li>
							<li class="">
							<a rel="tooltip"  data-placement="bottom" title="Click Here to feadback" id="Feedback" href="contactus.php"><i class="icon-envelope icon-large"></i>&nbsp;Feadback</strong></a>							</li>
							<li class="divider-vertical"></li>
								<li class="">
								<a rel="tooltip"  data-placement="bottom" title="Click Here to Login" id="login" href="#student"  data-toggle="modal"><i class="icon-signin icon-large"></i>&nbsp;Login</a> 
								</li>
						<li class="divider-vertical"></li>
						<li class="signup"><span class="sg"></span></li>
	
                    </div>
					  <!-- Search data -->
			<form class="navbar-search pull-right">
			<input style="height:20px; width:100px; margin-left:10px;" type="text" class="search-query" placeholder="Search CRMS...">
			<button type="submit" name="search" style="height:28px;" class="btn btn-success"><i class="icon-search icon-large"></i>&nbsp;Search</button>
			</form>
                </div>
            </div>
        </div>
    <!-- Modal student login -->
	<div id="student" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-header">
		  <div class="alert alert-info">Welcome to AMiT Computer Laboratory Management System!</div>
		</div>
		<div class="modal-body">
			<form class="form-horizontal" method="post" action="login.php">
				<div class="control-group">
					<label class="control-label" for="inputEmail">Username</label>
					<div class="controls">
					<input type="text" id="inputEmail" name="username" placeholder="Username" required>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="inputPassword">Password</label>
					<div class="controls">
					<input type="password" id="inputPassword" name="password" placeholder="Password" required>
				</div>
				</div>
				<div class="control-group">
					<div class="controls">
					<p style="margin-left:-85px;"><a href="#students" data-toggle="modal">Forget Username or Password ?</a>
					<button type="submit"  name="login" style="margin-left:20px;" class="btn btn-success"><i class="icon-signin icon-large"></i>&nbsp;Login</button></p>
				</div>
				</div>
				
				
				
				
			</form>
		</div>
		<div class="modal-footer" style=" margin-top:-20px;">
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
		</div>
    </div>
	
	
	<div id="students" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-header"><div class="alert alert-info">Please Enter your recovery email.</div></div>
		<div class="modal-body" style="margin-left:-40px;">
			<form class="form-horizontal" method="post" action=" ">
				
				<div class="control-group">
				<div style="margin-left:40px;">
				 <?php
				include('dbcon.php'); 
				  if(isset($_POST['reset'])){
			
$email=$_POST['email'];
$query=mysql_query("select * from user where email='$email'")or die (mysql_error());
$row=mysql_fetch_array($query);
if($row > 0){
	$user_id=$row['username'];
$pass=$row['password'];
$jo= base64_decode($pass);
$fn=$row['f_name'];
$ln=$row['l_name'];

                                echo '<div class="alert alert-dismissable alert-success">';
                                echo"<script>alert('Your username or password recovered successfully Check Your Email Now!')</script>";
	                            echo "<script>window.location='index.php';</script>";		
								echo '</div>';	

$subject="AMiT computer laboratory Management System";	
$message = "Dear $fn $ln 

Your User Name: $user_id
     Password : $jo




DON'T REPLY to this email";

											 // Send mail by PHP Mail Function
											mail($email, $subject, $message, "From: "."From: "."Clms_ddps@Gov.et");



}
else{
								echo "<script>window.location='access_denied_email.php';</script>";

				  }
				  }
?></div>
					<label class="control-label" for="inputEmail">E-mail address</label>
					<div class="controls">
					<input type="email" style="height:20px; width:250px; margin-left:-10px;" id="inputEmail" name="email" placeholder="e-mail address" required>
					<button type="submit" name="reset" class="btn btn-success"><i class="icon-signin icon-large"></i>&nbsp;Submit</button>
					</div>
				</div>
			</form>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
		</div>
    </div>	
	
	
	

	
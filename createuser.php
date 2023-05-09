<head>
  <link rel="stylesheet" type="text/css" media="all" href="css/contactstyle.css">
  <link href="css/timeline.css" rel="stylesheet">
</head>

<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">
					<?php include('head.php'); ?>
				<div class="span2">
					<?php include('sidebar.php'); ?>
				</div>
				<div class="span10" style="margin-top:-15px">
				
						<div class="panel panel-default" style="margin-left:85px; ">
                        <!-- /.panel-heading -->
                        <div class="panel-body" style="margin-top:-15px">
                            <ul class="timeline">
                                <li>
                                    <div class="timeline-badge"><i class="fa fa-check"></i>
                                    </div>
                                    <div class="timeline-panel">
                                      
									  	 <form   method="post" enctype="multipart/form-data" role="form" class="form-validation-1">
										 <h4> <i style="margin-left:170px;;" class="fa fa-clock-o fa-fw"></i>Registration form Area </h4>
	                                     
	<?php
$error=0;
	if(isset($_POST['Create'])){
								include('dbcon.php');
								if (isset($_POST['Create'])){
									
									
									$image = $_FILES['image']['tmp_name'];
										$image = $_FILES['image']['tmp_name'];
										$image_name = $_FILES['image']['name'];
										$image_size = getimagesize($_FILES['image']['tmp_name']);
										$image_type = $_FILES['image']['type'];
										$image_error = $_FILES['image']['error'];
										if($image_size==FALSE && $error ==0 ){
											echo '<div class="alert alert-dismissable alert-danger error" >';
												echo '<strong>'.'<center>'."That is not an image!".'</center>'.'<strong>';
											echo '</div>';
										
											$error = 1;
												}
											else if($image_error > 0 && $error == 0){
											echo '<div class="alert alert-dismissable alert-danger">';
												echo '<strong>'.'<center>'."There is error in uploading an image".'</center>'.'<strong>';
											echo '</div>';
											$error = 1;
										}
										else if($error == 0){
											include("dbcon.php");
											move_uploaded_file($image,"../images/".$image_name);
											
									}	
									
								
								$fn = $_POST['fn'];
								$ln = $_POST['ln'];
								$gender = $_POST['gender'];
								$user_type = $_POST['user_type'];
								$email_id = $_POST['email_id'];
								$pn = $_POST['pn'];
								$password=$_POST['pw'];
								$username=$_POST['un'];
								$organization=$_POST['org'];
                                $query = "insert into user(f_name,l_name,gender,usertype,email,phone,password,username,organization,p_picture) values('$fn','$ln','$gender','$user_type','$email_id','$pn','$password','$username','$organization','$image_name')";
								$result = mysql_query($query)or die(mysql_error());   								
								
								if( $result==1){
								echo '<div class="alert alert-dismissable alert-success">';
								echo '<strong>'.'<center>'."User Account Created successfully !" .'</center>'.'</strong>';
								echo '</div>';
								
							
								$subject="AMit computer laboratory management system";	
								$message = "Dear $fn $ln 


DON'T REPLY to this email";

											 // Send mail by PHP Mail Function
											mail($email_id, $subject, $message, "From: "."Clms.ami@edu.et");
								
								}
								else{
								echo '<div class="alert alert-dismissable alert-danger">';
								echo '<strong>'."User Account Not Created!.".'</strong>';
								echo '</div>';}
                                }}
								?>
		 <div class="form-group">
                            <label>First Name</label>
							 <input name="fn"  class="form-control input-sm validate[required,custom[onlyLetterSp],minSize[3],maxSize[20]]" type="text" placeholder="Enter First Name">
                        </div>
						<div class="form-group">
                            <label>Last Name</label>
							<input name="ln" class="form-control input-sm validate[required,custom[onlyLetterSp],minSize[3],maxSize[20]]" type="text" placeholder="Enter Last Name">
                        </div>
						<div class="form-group">
                            <label>Gender</label>
                            <select name="gender" class="form-control input-sm validate[required]">
                                <option value="">Gender</option>
                                <option value="Female">Female</option>
                                <option value="Male">Male</option>
                            </select>
                        </div>
						
						<div class="form-group">
                            <label>Account Type</label>
                            <select name="user_type" class="form-control input-sm validate[required]">
                                <option value=""> Select Account Type</option>
                                <option>Admin</option>
								<option>Labmanger</option>
								<option>Technical Assistant</option>
								<option>Instructor</option>
								<option>external user</option>
								<option>student</option>
                            </select>
                        </div>
						<div class="form-group">
                            <label>Organization</label>
                           <input name="org" class="form-control input-sm validate[required,custom[email]]" type="text" placeholder="Enter your organization">
                        </div>
						<div class="form-group">
                            <label>Username</label>
                           <input name="un" class="form-control input-sm validate[required,custom[email]]" type="text" placeholder="Enter your username">
                        </div>
						<div class="form-group">
                            <label>password</label>
                           <input name="pw" class="form-control input-sm validate[required,custom[email]]" type="password" placeholder="Enter your password">
                        </div>
						<div class="form-group">
                            <label>confirm password</label>
                           <input name="cpw" class="form-control input-sm validate[required,custom[email]]" type="password" placeholder="Enter your same password">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input name="email_id" class="form-control input-sm validate[required,custom[email]]" type="text" placeholder="Enter Email">
                        </div>
						
						
                        <div class="form-group">
                            <label>Phone No</label>
                            <input name="pn" type="number" class="input-sm validate[required,custom[onlyNumberSp],maxSize[10],minSize[10],custom[phone]]] form-control" placeholder="Enter Phone Number">
                        </div>
						 <div class="form-group">
                           
							 <input name="username"  class="form-control input-sm validate[required,custom[onlyLetterSp]]" type="hidden" placeholder=".....">
                        </div>
						
						
						  <div class="form-group">
                            <label for="exampleInputFile">Profile Pictures</label>
                            <input name="image"class="form-control input-sm validate[required]" type="file" id="exampleInputFile">
                        </div>
                        
                       
                      
						<button class="ladda-button ladda-button-demo btn btn-primary" type="submit" name="Create">Register</button>
                        <button class="btn btn-default " type="reset">Cancel</button>
                    </form>
                </div>
            </section>
        </section>    
		
	</form>
	 <!-- Javascipt -->
        <script src="js/jquery-1.10.2.min.js"></script>
        <script src='js/jquery-ui-1.10.3.min.js'></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/feeds.js"></script>
        <script src="js/chosen.js"></script>
        <script src="js/shadowbox.js"></script>
        <script src="js/sparkline.min.js"></script>
        <script src="js/masonry.min.js"></script>
        <script src="js/enscroll.min.js"></script>
        <script src='js/calendar.min.js'></script>
        <script src='js/datatables.min.js'></script>
        <script src='js/autosize.min.js'></script>
        <script src='js/select.min.js'></script>
        <script src="js/toggler.min.js"></script>
        <script src="js/datetimepicker.min.js"></script>
        <script src="js/colorpicker.min.js"></script>
        <script src="js/fileupload.min.js"></script>
        <script src="js/media-player.js"></script>
        <script src="js/validation/validate.min.js"></script>
        <script src="js/validation/validationEngine.min.js"></script>
        <script src='js/slider.min.js'></script>
        <script src="js/functions.js"></script>
									  
                                    </div>
                                </li>
								</ul>
								</div>
				
				
			</div>
				
				
				


				</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>

<!DOCTYPE html>
<?php include('dbcon.php');?>
<html>
    
<head>
       <title>Clms.amu.edu.et</title>
		 <link rel="shortcut icon" HREF="../images/log.jpg" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Black Pearl Responsive Admin Template">
        <meta name="keywords" content="Black Pearl, Admin, Template, Bootstrap">
        <meta charset="UTF-8">
       
        <!-- CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/calendar.min.css" rel="stylesheet">
        <link href="css/icomoon.min.css" rel="stylesheet">
        <link href="css/media-player.min.css" rel="stylesheet">
        <link href="css/file-manager.min.css" rel="stylesheet">
        <link href="css/form.min.css" rel="stylesheet">
        <link href="css/style.min.css" rel="stylesheet">
            
        <!--
            Following CSS codes are used only in this page in order to demonstrate the
            Sidebar widget properly. You can remove these codes anytime and this will
            not make any changes in your template's style and design other than this page. 
        -->
        <style type="text/css">
            .c-block { display: inline-block; width: 100%; }
            .validation-clear { margin-left: 2px; }
        </style>
    </head>
   
    <body>
        <!-- Header -->
    <?php include("header.php");?>
        
        
        <section id="main" role="main">
            <!-- Left Sidebar -->
             <?php include("leftside.php");?>
               
            <!-- Right Sidebar -->
            <?php include("rightside.php");?>
        
            <!-- Content -->
            <section id="content" class="container">
                <header class="p-header">
                    <h2 class="p-title">User Account Registeration Area!</h2>
                    
                </header>
                
                <!-- Required Feilds -->
                <div class="c-block" id="required">
                    <form   method="post" enctype="multipart/form-data" role="form" class="form-validation-1">
					
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
								$password = rand();
								$jos=base64_encode($password);
								$jo= base64_decode($jos);
							    $organization=$_POST['org'];
								
								if($user_type=="Admin"){
								$username = "Adm".rand();
                                $query = "insert into user (f_name,l_name,gender,usertype,email,phone,password,organization,username,p_picture) values('$fn','$ln','$gender','$user_type','$email_id','$pn','$jos','$organization','$username','$image_name')";
								$result = mysql_query($query)or die(mysql_error());   								
									
								}
								else if($user_type=="Technical Assistant"){
								$username = "TA".rand();
									 $query = "insert into user (f_name,l_name,gender,usertype,email,phone,password,organization,username,p_picture) values('$fn','$ln','$gender','$user_type','$email_id','$pn','$jos','$organization','$username','$image_name')";
								$result = mysql_query($query)or die(mysql_error());
								}
								else if($user_type=="Labmanger"){
								$username = "LM".rand();
                               $query = "insert into user (f_name,l_name,gender,usertype,email,phone,password,organization,username,p_picture) values('$fn','$ln','$gender','$user_type','$email_id','$pn','$jos','$organization','$username','$image_name')";
								$result = mysql_query($query)or die(mysql_error()); 								
								}
								else if ($user_type=="Instructor"){
								$username = "Ins".rand();
								 $query = "insert into user (f_name,l_name,gender,usertype,email,phone,password,organization,username,p_picture) values('$fn','$ln','$gender','$user_type','$email_id','$pn','$jos','$organization','$username','$image_name')";
								$result = mysql_query($query)or die(mysql_error());
								}
								else if ($user_type=="external user"){
								$username = "EU".rand();
								 $query = "insert into user (f_name,l_name,gender,usertype,email,phone,password,organization,username,p_picture) values('$fn','$ln','$gender','$user_type','$email_id','$pn','$jos','$organization','$username','$image_name')";
								$result = mysql_query($query)or die(mysql_error());
								}
								else if ($user_type=="student"){
								$username = "stud".rand();
								 $query = "insert into user (f_name,l_name,gender,usertype,email,phone,password,organization,username,p_picture) values('$fn','$ln','$gender','$user_type','$email_id','$pn','$jos','$organization','$username','$image_name')";
								$result = mysql_query($query)or die(mysql_error());
								}
								
								if( $result==1){
								echo '<div class="alert alert-dismissable alert-success">';
								echo '<strong>'.'<center>'."User Account Created successfully !" .'</center>'.'</strong>';
								echo '</div>';
								
							
								$subject="AMIT computer laboratory coordination office";	
								$message = "Dear $fn $ln 

Your New Account has been created.
       User Name: $username
	   Password: $jo

DON'T REPLY to this email";

											 // Send mail by PHP Mail Function
											mail($email_id, $subject, $message, "From: "."Clms_amu@edu.et");
								
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
                           <input name="org" class="form-control input-sm validate[required,custom[onlyLetterSp],minSize[3],maxSize[20]]" type="text" placeholder="Enter your organization">
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
       
       <?php include("footer.php");?>
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
    </body>

<!-- Mirrored from byrushan.com/projects/black-pearl/Template/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 May 2016 08:31:00 GMT -->
</html>
        
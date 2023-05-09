<!DOCTYPE html>
<?php include('dbcon.php');?>
<html>
    
<head>
        <title>Crime Record & Management System</title>
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
            <aside id="rightbar" class="pull-right">
                <div class="sidebar-container">
                    
                    <!-- Collapse -->
                    <div class="shadowed accordion side-collapse">
                         <h3 class="title">Collapse</h3>
                         <div class="panel-group" id="accordion">
                              <div class="panel">
                                   <div class="panel-heading">
                                        <h3 class="panel-title">
                                             <a class="accordion-toggle active" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Quote of the day</a>
                                        </h3>
                                   </div>
                                   <div id="collapseOne" class="panel-collapse collapse">
                                        <div class="panel-body">
                                             Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. 
                                        </div>
                                   </div>
                              </div>
                              <div class="panel">
                                   <div class="panel-heading">
                                        <h3 class="panel-title">
                                             <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Most popular Quote</a>
                                        </h3>
                                   </div>
                                   <div id="collapseTwo" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                             Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute.
                                        </div>
                                   </div>
                              </div>
                              <div class="panel">
                                   <div class="panel-heading">
                                        <h3 class="panel-title">
                                             <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Quote the most viewed</a>
                                        </h3>
                                   </div>
                                   <div id="collapseThree" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                             Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <!-- Progress bar -->
                    <div class="shadowed side-progress">
                         <h3 class="title">Progress Bar</h3>
                         <div class="side-border">
                              Joomla Website Development
                              <div class="progress">
                                   <a href="#" data-toggle="tooltip" title="60%" class="yellow progress-bar ttips" style="width: 60%;">
                                        <span class="sr-only">60% Complete</span>
                                   </a>
                              </div>
                         </div>
                         <div class="side-border">
                              Opencart E-Commerce Website
                              <div class="progress">
                                   <a href="#" data-toggle="tooltip" title="43%" class="green ttips progress-bar" style="width: 43%;">
                                        <span class="sr-only">43% Complete</span>
                                   </a>
                              </div>
                         </div>
                         <div class="side-border">
                              Social Media API
                              <div class="progress">
                                   <a href="#" data-toggle="tooltip" title="81%" class="blue ttips progress-bar" style="width: 81%;">
                                        <span class="sr-only">81% Complete</span>
                                   </a>
                              </div>
                         </div>
                         <div class="side-border">
                              VB.Net Software Package
                              <div class="progress">
                                   <a href="#" data-toggle="tooltip" title="10%" class="yellow ttips progress-bar" style="width: 10%;">
                                        <span class="sr-only">10% Complete</span>
                                   </a>
                              </div>
                         </div>
                         <div class="side-border">
                              Chrome Extension
                              <div class="progress">
                                   <a href="#" data-toggle="tooltip" title="95%" class="ttips progress-bar red" style="width: 95%;">
                                        <span class="sr-only">95% Complete</span>
                                   </a>
                              </div>
                         </div>
                    </div>
                    
                    <!-- Information -->
                    <div class="shadowed information">
                         <h3 class="title">Information</h3>
                         <p class="info-body overflow"><i class="icon-info"></i>Nulla tempor dolor dolor, eu lacinia tellus ultricies vel. Mauris arcu lorem, tincidunt id eros at, interdum tempor lorem. Vestibulum nec lectus vehicula, pellentesque risus ac, facilisis dolor. Duis elementum nisi ipsum, at consectetur sapien ultricies vitae. Mauris non cursus risus. Donec adipiscing, nibh quis mollis vulputate, arcu nisi scelerisque diam, nec pellentesque nunc magna sed risus. Quisque a magna porttitor justo sagittis vehicula. Duis vitae adipiscing nunc, a ullamcorper neque.
                         </p>
                    </div>
                    
                </div>

                <span id="rightbar-toggle" class="hidden-lg sidebar-toggle">
                     <i class="icon-angle-left"></i>
                </span>
            </aside>
        
            <!-- Content -->
            <section id="content" class="container">
                <header class="p-header">
                    <h2 class="p-title">User Account Registeration Area!</h2>
                    <div class="config dropdown">
                        <a class="dropdown-toggle btn btn-gr-gray btn-sm" data-toggle="dropdown" href="#">Jump to&nbsp; <span class="icon-angle-down"></span></a>
                        <ul class="dropdown-menu pull-right text-right" role="menu">
                            <li><a href="#required">Required Feilds</a></li>
                            <li><a href="#invalid">Invalid Input</a></li>
                            <li><a href="#equals">Equals</a></li>
                            <li><a href="#conditional">Conditional Required</a></li>
                            <li><a href="#group-required">Group Required</a></li>
                            <li><a href="#minmax">Min/Max (Size)</a></li>
                            <li><a href="#datetime">Date/Time</a></li>
                            <li><a href="#checkboxradio">Checkbox/Radio</a></li>
                            <li><a href="#checkboxradio">Ajax</a></li>
                        </ul>
                    </div>
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
											move_uploaded_file($image,"image/".$image_name);
											
									}	
									
								
								$fn = $_POST['fn'];
								$ln = $_POST['ln'];
								$gender = $_POST['gender'];
								$user_type = $_POST['user_type'];
								$bn = $_POST['bn'];
								$email_id = $_POST['email_id'];
								$pn = $_POST['pn'];
								$password = rand();
							    
								if($user_type=="Admin"){
								$username = "Adm".rand();
                                $query = "insert into account (fn,ln,gender,user_type,bn,email_id,pn,username,password,image) values('$fn','$ln','$gender','$user_type','$bn','$email_id','$pn','$username','$password','$image_name')";
								$result = mysql_query($query)or die(mysql_error());   								
									
								}
								else if($user_type=="Inspector"){
								$username = "Ins".rand();	
								$query = "insert into account (fn,ln,gender,user_type,bn,email_id,pn,username,password,image) values('$fn','$ln','$gender','$user_type','$bn','$email_id','$pn','$username','$password','$image_name')";
								$result = mysql_query($query)or die(mysql_error());
								}
								else if($user_type=="Investigator"){
								$username = "Inv".rand();
                                $query = "insert into account (fn,ln,gender,user_type,bn,email_id,pn,username,password,image) values('$fn','$ln','$gender','$user_type','$bn','$email_id','$pn','$username','$password','$image_name')";
								$result = mysql_query($query)or die(mysql_error()); 								
								}
								else if ($user_type=="Commander"){
								$username = "Com".rand();
								$query = "insert into account (fn,ln,gender,user_type,bn,email_id,pn,username,password,image) values('$fn','$ln','$gender','$user_type','$bn','$email_id','$pn','$username','$password','$image_name')";
								$result = mysql_query($query)or die(mysql_error());
								}
								
								if( $result==1){
								echo '<div class="alert alert-dismissable alert-success">';
								echo '<strong>'."User Account Created successfully !".'</strong>';
								echo '</div>';
								
							
								$subject="Dire Dawa Police Administration Department of Crime Record Management";	
								$message = "Dear $fn $ln 

Your New Account has been created.
       User Name: $username
	   Password: $password

DON'T REPLY to this email";

											 // Send mail by PHP Mail Function
											mail($email_id, $subject, $message, "From: "."Crms_ddps@Gov.et");
								
								}
								else{
								echo '<div class="alert alert-dismissable alert-success">';
								echo '<strong>'."User Account Not Created!.".'</strong>';
								echo '</div>';}
                                }}
								?>
		  
					
                        <div class="form-group">
                            <label>First Name</label>
							 <input name="fn"  class="form-control input-sm validate[required,custom[onlyLetterSp]]" type="text" placeholder="Enter Branch Name">
                        </div>
						<div class="form-group">
                            <label>Last Name</label>
							<input name="ln" class="form-control input-sm validate[required,custom[onlyLetterSp]]" type="text" placeholder="Enter Branch Location">
                             
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
                                <option value="">Account Type</option>
                                <option>Admin</option>
								<option>Inspector</option>
								<option>Investigator</option>
								<option>Commander</option>
                               
                            </select>
							
                        </div>
						<div class="form-group">
                            <label>Branch Name</label>
                            <select name="bn" class="form-control input-sm validate[required]">
                                <option value="">Select Branch Name</option>
                                <?php 
									$branch_query = mysql_query("select * from branch") or die(mysql_error());
									while($branch_row = mysql_fetch_array($branch_query)){
									?>
									<option value="<?php echo $branch_row['bn']; ?>"><?php echo $branch_row['bn']; ?></option>
									<?php  } ?>
                               
                            </select>
							
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input name="email_id" class="form-control input-sm validate[required,custom[email]]" type="text" placeholder="Enter Email">
                        </div>
						
						 <!-- Only Letter -->
                        <div class="form-group">
                            <label>Phone No</label>
                            <input name="pn" type="text" class="input-sm validate[required,custom[phone]] form-control" placeholder="Enter Phone Number">
                        </div>
						 <div class="form-group">
                           
							 <input name="username"  class="form-control input-sm validate[required,custom[onlyLetterSp]]" type="hidden" placeholder=".....">
                        </div>
						
						
						  <div class="form-group">
                            <label for="exampleInputFile">Profile Pictures</label>
                            <input name="image"class="form-control input-sm validate[required]" type="file" id="exampleInputFile">
                          
                        </div>
                        
                       
                      
						<button class="ladda-button ladda-button-demo btn btn-primary" type="submit" name="Create">Register</button>
                        <button class="btn btn-default validation-clear">Cancel</button>
                    </form>
                </div>
                
              
				
				
                
               
                
                
                
                
               
        
            </section>
        </section>    
       
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
        
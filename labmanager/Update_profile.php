<!DOCTYPE html>
<?php include("dbcon.php");?>
<?php include("session.php"); ?>
<html>
<head>
        <title> CLMS.AMU.EDU.ET</title>
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
	 <header id="header" class="clearfix">
            <!-- Logo -->
            <a href="index.php" class="logo shadowed">
                   Welcome to Commander Panel
            </a>
               
            <div class="dropdown profile-menu shadowed">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
				
				
                    				<?php 
				$query=mysql_query("Select p_picture from user where username='$session_id'") or die(mysql_error());
				while( $rows = mysql_fetch_assoc($query)){
				if($rows['p_picture']=="")
				{
					echo "<img width='20' height='20' src='image/0.13.jpg'alt='defualt profile pic'>";
					
				}
				else{ echo "<img width='40' height='40' ' class='img-rectangle profile_img' src='../images/".$rows['p_picture']." ' alt='profile pic'>";
					
				}
				}
                  
				 ?>
                </a>
                <ul class="dropdown-menu pull-right text-right">
                    <li><a href="change_profile.php" class="icon-profile" aria-hidden="true">&nbsp;Update Profile Picture</a></li>
					 <li><a    href="update_profile.php"  class="icon-wrench" >&nbsp;Change Password</a></li>
                    
					
					
					
					 
					
					
                    <li class="divider"></li>
                    <li><a href="logout.php" class="icon-exit" aria-hidden="true">&nbsp;Log Out ( <?php  echo $rows['f_name']." ".$rows['l_name'];?>)</a></li>
                </ul>
            </div>
            
            <ul class="nav nav-pills pull-right shadowed" id="top-menu">
                <li><a href="index.php" class="icon-home">&nbsp;&nbsp;Home</a></li>
               
				<?php
			 
			  $query=mysql_query("Select * from user where username='$session_id'") or die(mysql_error());
			  $rows = mysql_fetch_assoc($query);
			  
			  ?>
                <li><a href="#" class="icon-user"><?php echo $rows['f_name']." ".$rows['l_name'];?></a></li>
            </ul>
            
            <form class="form-inline top-search shadowed">
                <input type="text" class="form-control" placeholder="Search for anything...">
                <button type="submit"><i class="icon-search"></i></button>
            </form>
        </header>
		   <aside id="leftbar" class="pull-left">
                    <?php include("leftside.php");?>
                    <span id="leftbar-toggle" class="visible-xs sidebar-toggle">
                         <i class="icon-angle-right"></i>
                    </span>
               </aside>
			   <!-- Right Sidebar -->
               <aside id="rightbar" class="pull-right">
                    <div class="sidebar-container">
                         <!-- Date + Clock -->
                         <div class="clock shadowed">
                              <div id="date"></div>
                              <div id="time">
                                   <span id="hours"></span>
                                   :
                                   <span id="min"></span>
                                   :
                                   <span id="sec"></span>
                              </div>
                         </div>
                         
                         <!-- Calendar -->
                         <div class="shadowed side-calendar">
                              <div id="sidebar-calendar"></div>
                         </div>
                    </div>
                    
                    <span id="rightbar-toggle" class="hidden-lg sidebar-toggle">
                         <i class="icon-angle-left"></i>
                    </span>
               </aside>
  <section id="main" role="main">
         <section id="content" class="container">
    
	                <div class="modal-header" style="color:red;">
                                     <button type="button"  class="close" ><a href="index.php">&times;</a></button>
                                    <h4 class="modal-title"style="color:blue;font-family:times new roman;"><strong><center>Change Password</center></strong></h4>
                                </div>
            <div class="modal-body">
                           	
                <!-- Required Feilds -->
						<div class="c-block" id="required">
						
                    <form  class="form-validation-1 form-horizontal"  role="form"   method="Post" enctype="multipart/form-data"  ">
					 <?php
				if (isset($_POST['Change_password'])){		
						$run = mysql_query("select * from user where username = '$session_id'");
						$row = mysql_fetch_array($run);	
						$opwd=$_POST['opwd'];
						$code=base64_encode($opwd);
						$npwd=$_POST['npwd'];
						$ecode=base64_encode($npwd);
						$cpwd=$_POST['cpwd'];
						
						if($code != $row['password']){
							echo '<div class="alert alert-dismissable alert-danger">';
								echo '<strong>'.'<center>'."You have inserted incorrect old password!".'</center>'.'<strong>';
							echo '</div>';
						}
						else{
							mysql_query("update user set password = '$ecode' where username = '$session_id'");
							
							echo '<div class="alert alert-dismissable alert-success">';
								echo '<strong>'.'<center>'."You have changed your password successfully!!!".'</center>'.'<strong>';
							echo '</div>';
						}	
					}						
		?>
                       
					  <div class= "form-group">
                            <label>Old Password</label>
							 <input name="opwd"   class="form-control input-sm validate[required]" type="password" placeholder="Old Password">
                        </div>
						<div class="form-group">
                            <label>New Password</label>
                            <input type="password"  class="input-sm validate[required],minSize[8],maxSize[20]] form-control" name="npwd" id="password" placeholder="New Password">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" name="cpwd" class="input-sm validate[required,equals[password]] form-control" placeholder="Retype Password">
                        </div>
						
						
                       
						
						 <!-- Only Letter -->
                       
						
						
						  <div class="modal-footer">
                                    <input type="Submit" name="Change_password" value="Change Password "class="btn btn-success ">
                                    <button type="button" class="btn btn-default" ><a href="index.php">Close</a></button>
                                </div>
                        </form>
                       
                </div>
                
                  </div>
				  
                </section>  
                </section>
				
        
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
        
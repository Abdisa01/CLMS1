<!DOCTYPE html>
<?php include("dbcon.php");?>

<html>
<head>
        <title>clms.amu.edu.et</title>
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
   <?php include("header.php");?>
		   <?php include("leftside.php");?>
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
                                    <h4 class="modal-title"style="color:blue;font-family:times new roman;"><strong><center>Update Profile Picture</center></strong></h4>
                                </div>
            <div class="modal-body">
                           	
                <!-- Required Feilds -->
						<div class="c-block" id="required">
						
                    <form class="form-validation-1"  role="form"   method="Post" enctype="multipart/form-data">
					 	<?php
													$error=0;
						if (isset($_POST['change_profile'])){
						
						                $image = $_FILES['image']['tmp_name'];
										$image_name = $_FILES['image']['name'];
										$image_size = getimagesize($_FILES['image']['tmp_name']);
										$image_type = $_FILES['image']['type'];
										$image_error = $_FILES['image']['error'];
			
										if($image_size==FALSE && $error ==0 ){
											echo '<div class="alert alert-dismissable alert-danger error" style="margin-top:-20px;">';
												echo '<strong>'.'<center>'."That is not an image!".'</center>'.'<strong>';
											echo '</div>';
											$error = 1;
										}
										else if($image_error > 0 && $error == 0){
											echo '<div class="alert alert-dismissable alert-danger" style="margin-top:-20px;">';
												echo '<strong>'.'<center>'."There is error in uploading an image".'</center>'.'<strong>';
											echo '</div>';
											$error = 1;
										}
						else if($error == 0){
						                    mysql_query("update user set P_picture='"."$image_name"."' where username = '$session_id'")or die(mysql_error());
											move_uploaded_file($image,"../images/".$image_name);
											echo '<div class="alert alert-dismissable alert-success" style="margin-top:-20px;">';
												echo '<strong>'.'<center>'."Your Profile Picture Updated successfully! ".'</center>'.'<strong>';
												echo'</div>';
						                   }}?>
										   
						  <div  type="file" name="image" class="fileupload fileupload-new" data-provides="fileupload" >
						  <?php
						  $query=mysql_query("select * from user where username='$session_id'")or die(mysql_error());
																 $row=mysql_fetch_array($query);
																  $pic=$row["p_picture"];
																?>
                        <div  type="file" name="image" style="width:30%;height:25%;margin-top:20px;margin-left:120px;" class="fileupload-preview thumbnail"> <img src="../images/<?php echo $pic;?>" alt="" /> </div>                                             
                        <div>
                            <span class="btn btn-file btn-sm btn-primary">
                                <span type="file" name="image" class="fileupload-new icon-plus" class="form-control input-sm validate[required] "> Upload Photo</span>
                                <span type="file" name="image"class="fileupload-exists">Change</span>
                                <input type="file" name="image" / class="form-control input-sm validate[required]">
                            </span>
                            <a href="#" type="file" name="image" class="btn fileupload-exists btn-sm btn-gr-gray" data-dismiss="fileupload">Remove</a>
                        </div>
                    </div>
						
						  <div class="modal-footer" >
                                    <input type="Submit" name="change_profile" value="Change Picture"class="btn btn-success ">
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
        
<!DOCTYPE html>
<?php include("dbcon.php");?>
<?php include("session.php"); ?>
<html>
<head>
        <title>Computer laboratory management system</title>
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
  <section id="main" role="main">
         <section id="content" class="container">
     <?php 
	  $get_id = $_GET['user_id']; ?>
<?php 
		$query=mysql_query("select * from user where user_id='$get_id'")or die(mysql_error());
		$row=mysql_fetch_array($query);
		$id=$row['user_id'];
		?>
	                <div class="modal-header" style="color:red;">
                                     <button type="button"  class="close" ><a href="updateuser.php">&times;</a></button>
                                    <h4 class="modal-title"style="color:blue;font-family:times new roman;font-size:14px;"><strong><center>Edit User Account Details</center></strong></h4>
                                </div>
            <div class="modal-body">
                           	
                <!-- Required Feilds -->
						<div class="c-block" id="required">
						
                    <form  class="form-validation-1 form-horizontal"  role="form" action="update_user.php"  method="GET" enctype="multipart/form-data"  onsubmit="return check_info();">
					  <input type="hidden" name="user_id"  value="<?php echo $get_id ?>"   />
                       
					  <div class="form-group">
                            <label>First Name</label>
							 <input name="fn"  value="<?php echo $row['f_name']; ?>" class="form-control input-sm validate[required,custom[onlyLetterSp],minSize[3],maxSize[20]]" type="text" placeholder="Enter First Name">
                        </div>
						<div class="form-group">
                            <label>Last Name</label>
							<input name="ln"  value="<?php echo $row['l_name']; ?>" class="form-control input-sm validate[required,custom[onlyLetterSp],minSize[3],maxSize[20]]" type="text" placeholder="Enter Last Name">
                             
                        </div>
						
						
						<div class="form-group">
                            <label>Account Type</label>
                            <select name="user_type" class="form-control input-sm ">
                                <option value=""><?php echo $row['usertype']; ?></option></option>
                                 <option>Admin</option>
								<option>labmanager</option>
								<option>technical Assistant</option>
								<option>instructor</option> 
								<option>student</option> 
								<option>external user</option>            
                            </select>
							
                        </div>
						
						<div class="form-group">
                            <label>organization</label>
                             <input name="email_id" value="<?php echo $row['organization']; ?>" class="form-control input-sm validate[required,custom[organization]]" type="text" placeholder="Enter organization">
							
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input name="email_id" value="<?php echo $row['email']; ?>" class="form-control input-sm validate[required,custom[email]]" type="text" placeholder="Enter email address">
                        </div>
						
						 <!-- Only Letter -->
                        <div class="form-group">
                            <label>Phone No</label>
                            <input  name="pn"  value="<?php echo $row['phone']; ?>"type="number" class="input-sm validate[required,custom[onlyNumberSp],maxSize[10],minSize[10],custom[phone]]] form-control" placeholder="Enter phone number">
                        </div>
						
						
						  <div class="modal-footer">
                                    <input type="Submit" name="save" value="Save Changes "class="btn btn-success ">
                                    <button type="button" class="btn btn-default" ><a href="updateuser.php">Close</a></button>
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
        
<!DOCTYPE html>
<?php include("dbcon.php");?>
<?php include("session.php"); ?>
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
  <section id="main" role="main">
  <section id="content" class="container">
                	   <?php 
	  $get_id = $_GET['item_id']; ?>
<?php 
		$query=mysql_query("select * from laboratory where lab_id='$get_id'")or die(mysql_error());
		$row=mysql_fetch_array($query);
		$id=$row['lab_id'];
		?>
	                <div class="modal-header">
					                <button type="button" style="color:red;" class="close" ><a href="updateLabinfo.php">&times;</a></button>
                                    <!--<button class="close" type="button" data-dismiss="modal" aria-hidden="true"></button>-->
                                    <h4 class="modal-title"style="color:blue;font-family:times new roman;"><strong><center>Edit Laboratory Information Details</center></strong></h4>
                                </div>
            <div class="modal-body">
                           	
                <!-- Required Feilds -->
						<div class="c-block" id="required">
						
                    <form  class="form-validation-1"  role="form" action="update_labinfo.php"  method="GET" enctype="multipart/form-data"  onsubmit="return check_info();">
					  <input type="hidden" name="criminal_id"  value="<?php echo $get_id ?>"   />
                       
					  <div class="form-group">
                            <label> Laboratory Name</label>
							 <input name="ln"  value="<?php echo $row['lab_name']; ?>" class="form-control input-sm validate[required,custom[onlyLetterSp],minSize[3],maxSize[18]]]" type="text" placeholder="Enter lab name">
                        </div>
						<div class="form-group">
                            <label>Laboratory Number </label>
							 <input name="lno"  value="<?php echo $row['lab_number']; ?>" class="form-control input-sm validate[required,custom[onlyLetterSp],minSize[3],maxSize[18]]]" type="text" placeholder="Enter lab nimber">
                        </div>
						<div class="form-group">
                            <label> Laboratory_Type</label>
							 <input name="lt"  value="<?php echo $row['lab_type']; ?>" class="form-control input-sm validate[required,custom[onlyLetterSp],minSize[3],maxSize[18]]]" type="text" placeholder="Enter lab type">
                        </div>
						
							<div class="form-group">
                            <label>Laboratory Location</label>
                            <input name="ll"  value="<?php echo $row['lab_location']; ?>" class="form-control input-sm validate[required,custom[onlyLetterSp],minSize[3],maxSize[18]]]" type="text" placeholder="Enter lab location">
							
                        </div>
						
						<div class="form-group">
                            <label>Target User</label>
							<input name="tu"  value="<?php echo $row['target_user']; ?>" class="form-control input-sm validate[required,custom[onlyNumberSp],min[18],max[80]]" type="text" placeholder="Enter target user">
                             
                        </div>
                        <div class="form-group">
                            <label>Laboratory Status</label>
                            <input name="ls" value="<?php echo $row['Lab_status']; ?>" class="form-control input-sm validate[required,custom[onlyLetterSp],minSize[3],maxSize[30]]]" type="text" placeholder="Enter lab status">
                        </div>
						
						 <!-- Only Letter -->
                        <div class="form-group">
                            <label>Accomendation</label>
                            <input  name="acco"  value="<?php echo $row['accomendation']; ?>"type="text" class="form-control input-sm validate[required,custom[onlyLetterSp],minSize[3],maxSize[30]]]" placeholder="Enter lab accomendation">
                        </div>
						
						  <div class="modal-footer">
                                    <input type="Submit" name="save" value="Save Changes "class="btn btn-success">
                                    <button type="button" class="btn btn-default" ><a href="updateLabinfo.php">Close</a></button>
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


</html>
        
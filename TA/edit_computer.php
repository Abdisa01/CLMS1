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
	  $get_id = $_GET['comp_id']; ?>
<?php 
		$query=mysql_query("select * from computer where comp_id='$get_id'")or die(mysql_error());
		$row=mysql_fetch_array($query);
		$id=$row['comp_id'];
		$comp_name=base64_decode($row['comp_name']);
		?>
	                <div class="modal-header">
					                <button type="button" style="color:red;" class="close" ><a href="update_computer.php">&times;</a></button>
                                    <!--<button class="close" type="button" data-dismiss="modal" aria-hidden="true"></button>-->
                                    <h4 class="modal-title"style="color:blue;"><strong><center>
                                      Edit COMPUTER RECORD Details
                                    </center></strong></h4>
                                </div>
            <div class="modal-body">
                           	
                <!-- Required Feilds -->
						<div class="c-block" id="required">
						
                    <form  class="form-validation-1"  role="form" action="update_comp.php"  method="GET" enctype="multipart/form-data"  onsubmit="return check_info();">
					  <input type="hidden" name="aid"  value="<?php echo $get_id ?>"   />
					  <?php $comp_name=base64_decode($row['comp_name']);?>
                       
					  <div class="form-group">
                            <label> Computer name</label>
							 <input name="cn"  value="<?php echo $row['comp_name']; ?>" class="form-control input-sm validate[required,custom[onlyLetterSp],minSize[3],maxSize[20]]]" type="text" placeholder="Enter computer Name">
                        </div>
						<div class="form-group">
                            <label> Computer type</label>
							 <input name="ct"  value="<?php echo $row['comp_type']; ?>" class="form-control input-sm validate[required,custom[onlyLetterSp],minSize[3],maxSize[20]]]" type="text" placeholder="Enter computer type">
                        </div>
						<div class="form-group">
                            <label> Computer model</label>
							 <input name="cm"  value="<?php echo $row['comp_model']; ?>" class="form-control input-sm validate[required,custom[onlyLetterSp],minSize[3],maxSize[20]]]" type="text" placeholder="Enter Computer model">
                        </div>
						
						
						<div class="form-group">
                            <label>computer serial</label>
                           
						 <input name="cs"  value="<?php echo $row['comp_serial']; ?>" class="form-control input-sm validate[required,custom[onlyLetterSp],minSize[3],maxSize[20]]]" type="text" placeholder="Enter Computer serial">	
                        </div>
						
						
						<div class="form-group">
                            <label>laboratory name</label>
							<input name="ln"  value="<?php echo $row['lab_name']; ?>" class="form-control input-sm validate[required,custom[onlyLetterSp],min[3],max[30]]" type="text" placeholder="Enter lab name">
                             
                        </div>
                        <div class="form-group">
                            <label>Laboratory number</label>
                            <input name="lno" value="<?php echo $row['lab_number']; ?>" class="form-control input-sm validate[required,custom[onlyNumberSp],minSize[3]" type="number" placeholder="Enter lab number">
                        </div>
						
						 <!-- Only Letter -->
                        <div class="form-group">
                            <label>AMU code</label>
                            <input  name="ac"  value="<?php echo $row['AMU_code']; ?>"type="text" class="form-control input-sm validate[required,custom[onlyLetterSp],minSize[3],maxSize[30]]" placeholder="Enter AMU_code">
                        </div>
						 <div class="form-group">
                            <label>Status</label>
                            <input  name="status"  value="<?php echo $row['status']; ?>"type="text" class="form-control input-sm validate[required,custom[onlyLetterSp],minSize[3],maxSize[30]]" placeholder="Enter computer status">
                        </div>
				
						  <div class="modal-footer">
                                    <input type="Submit" name="save" value="Save Changes "class="btn btn-success">
                                    <button type="button" class="btn btn-default" ><a href="update_computer.php">Close</a></button>
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
        
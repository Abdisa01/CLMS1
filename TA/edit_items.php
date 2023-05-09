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
		$query=mysql_query("select * from item where item_id='$get_id'")or die(mysql_error());
		$row=mysql_fetch_array($query);
		$id=$row['item_id'];
		?>
	                <div class="modal-header">
					                <button type="button" style="color:red;" class="close" ><a href="updateItems.php">&times;</a></button>
                                    <!--<button class="close" type="button" data-dismiss="modal" aria-hidden="true"></button>-->
                                    <h4 class="modal-title"style="color:blue;"><strong><center>Edit Item Information Details</center></strong></h4>
                                </div>
            <div class="modal-body">
                           	
                <!-- Required Feilds -->
						<div class="c-block" id="required">
						
                    <form  class="form-validation-1"  role="form" action="update_items.php"  method="GET" enctype="multipart/form-data"  onsubmit="return check_info();">
					  <input type="hidden" name="vid"  value="<?php echo $get_id ?>"   />
                       
					  <div class="form-group">
                            <label> Item Name</label>
							 <input name="in"  value="<?php echo $row['item_name']; ?>" class="form-control input-sm validate[required,custom[onlyLetterSp],minSize[3],maxSize[18]]]" type="text" placeholder="Enter Item Name">
                        </div>
						<div class="form-group">
                            <label> Item Type</label>
							 <input name="it"  value="<?php echo $row['item_type']; ?>" class="form-control input-sm validate[required,custom[onlyLetterSp],minSize[3],maxSize[18]]]" type="text" placeholder="Enter Item Type">
                        </div>
						<div class="form-group">
                            <label> Item Model</label>
							 <input name="im"  value="<?php echo $row['item_model']; ?>" class="form-control input-sm validate[required,custom[onlyLetterSp],minSize[3],maxSize[18]]]" type="text" placeholder="Enter Item Model ">
                        </div>
						
						<div class="form-group">
                            <label>Serial</label>
                            <input name="serial"  value="<?php echo $row['serial']; ?>" class="form-control input-sm validate[required,custom[onlyLetterSp],minSize[3],maxSize[18]]]" type="text" placeholder="Enter Item serial ">
							
                        </div>
						<div class="form-group">
                            <label>Laboratory Name</label>
							<input name="ln"  value="<?php echo $row['lab_name']; ?>" class="form-control input-sm validate[required,custom[onlyNumberSp],min[18],max[80]]" type="text" placeholder="Enter Lab Name">
                             
                        </div>
                        <div class="form-group">
                            <label>Laboratory Number</label>
                            <input name="lno" value="<?php echo $row['Lab_number']; ?>" class="form-control input-sm validate[required,custom[onlyLetterSp],minSize[3],maxSize[30]]]" type="number" placeholder="Enter Lab Number">
                        </div>
						
						 <!-- Only Letter -->
                        <div class="form-group">
                            <label>AMU code</label>
                            <input  name="ac"  value="<?php echo $row['AMU_code']; ?>"type="text" class="form-control input-sm validate[required,custom[onlyLetterSp],minSize[3],maxSize[30]]]" placeholder="Enter AMU code">
                        </div>
						 <div class="form-group">
                            <label>Status</label>
                            <input  name="status"  value="<?php echo $row['status']; ?>"type="text" class="form-control input-sm validate[required,custom[onlyLetterSp],minSize[3],maxSize[30]]]" placeholder="Enter Item status">
                        </div>
							
						  <div class="modal-footer">
                                    <input type="Submit" name="save" value="Save Changes "class="btn btn-success">
                                    <button type="button" class="btn btn-default" ><a href="updateitems.php">Close</a></button>
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
        
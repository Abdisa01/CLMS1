<!DOCTYPE html>
<?php include("dbcon.php");?>
<?php include("session.php"); ?>
<html>
<head>
        <title>www.Crms-ddps.gov.et</title>
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
  <section id="main" role="main" style="width:80%;margin-left:150px;">
  <section id="content" class="container">
                	   <?php 
	  $get_id = $_GET['id']; ?>
<?php 
		$query=mysql_query("select * from victims_information where vid='$get_id'")or die(mysql_error());
		$row=mysql_fetch_array($query);
		$id=$row['vid'];
		?>
	                <div class="modal-header" style="width:100%;">
					                <button type="button" style="color:red;" class="close" ><a STYLE="COLOR:RED;margin-left:150px;" class="icon-close"   aria-hidden="true" href="deletevictims.php">   </a></button>
                                    <!--<button class="close" type="button" data-dismiss="modal" aria-hidden="true"></button>-->
                                    <h4 class="modal-title"style="color:red;margin-left:75px;"><center  >Are you sure you want to delete Selected Victim? </center></h4>
                                </div>
            <div class="modal-body" style="width:100%;">
                           	
                <!-- Required Feilds -->
						<div class="c-block" id="required">
						
                    <form    role="form" action="delete_victims.php"  method="GET" enctype="multipart/form-data"  onsubmit="return check_info();">
					  <input type="hidden" name="vid"  value="<?php echo $get_id ?>"   />
                       
					  <div class="form-group">
                            <label>Full Name</label>
							 <input name="bn" readonly value="<?php echo $row['fn']; ?> <?php echo $row['mn']; ?> <?php echo $row['ln']; ?>" class="form-control input-sm validate[required,custom[onlyLetterSp]]" type="text" >
                        </div>
						
                        <div class="form-group">
                            <label>Gender</label>
                            <input name="email_id"  readonly value="<?php echo $row['gender']; ?>" class="form-control input-sm validate[required,custom[email]]" type="text" >
                        </div>
						<div class="form-group">
                            <label>Kebele ID</label>
                            <input name="email_id"  readonly value="<?php echo $row['ki']; ?>" class="form-control input-sm validate[required,custom[email]]" type="text" >
                        </div>
						  <div class="modal-footer" >
                                    <input type="Submit" style="margin-left:-100px;"name="delete" value="Yes "class="btn btn-lg btn-danger">
                                    <button type="button" class="btn btn-lg btn-success"><a style="color:white;"href="deletevictims.php">No</a></button>
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
        
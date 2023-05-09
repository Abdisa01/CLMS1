<!DOCTYPE html>
<?php include('dbcon.php');?>
<html>
    
<head>
        <title>clms.amu.et</title>
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

                <span id="rightbar-toggle" class="hidden-lg sidebar-toggle">
                     <i class="icon-angle-left"></i>
                </span>
            </aside>    <!-- Content -->
            <section id="content" class="container">
                <header class="p-header">
                    <h2 class="p-title">Add Laboratory Information Area!</h2>    
                    </div>
                </header>    
                <!-- Required Feilds -->
                <div class="c-block" id="required">
                    <form   method="post" enctype="multipart/form-data" role="form" class="form-validation-1">			
<?php
$error=0;
	if(isset($_POST['add'])){
								include('dbcon.php');
								        $ln=$_POST['ln'];
										$lno=$_POST['lno'];
										$lt=$_POST['lt'];
										$ll=$_POST['ll'];
										$tu=$_POST['tu'];
										$ls=$_POST['ls'];
										$acco=$_POST['acco'];
							    
								$query = "insert into laboratory (lab_name,lab_number,lab_type,lab_location,target_user,lab_status,accomendation) values('$ln','$lno','$lt','$ll','$tu','$ls','$acco')";
								$result = mysql_query($query)or die(mysql_error());
								if( $result==1){
								echo '<div class="alert alert-dismissable alert-success">';
								echo '<strong>'.'<center>'."Laboratory Information Added successfully !".'</center>'.'</strong>';
								echo '</div>';
								}
								else{
								echo '<div class="alert alert-dismissable alert-danger error">';
								echo '<strong>'."Laboratory Information Not Added Successfully!.".'</strong>';
								echo '</div>';}
                                }
								?>
					
                       
                        <div class="form-group">
                            <label>Laboratory Name</label>
							 <input name="ln" class="form-control input-sm validate[required,custom[onlyLetterSp],minSize[3],maxSize[18]]]" type="text" placeholder="Enter Lab Name">
                        </div>
						<div class="form-group">
                            <label>Laboratory Number</label>
							<input name="lno" class="form-control input-sm validate[required,custom[onlyLetterSp],minSize[3],maxSize[18]]]" type="text" placeholder="Enter Lab Number ">
                             
                        </div>
						<div class="form-group">
                            <label>Laboratory Type</label>
							<input name="lt" class="form-control input-sm validate[required,custom[onlyLetterSp],minSize[3]]" type="text" placeholder="Enter Lab Type">
                             
                        </div>
                        <div class="form-group">
                            <label>Laboratory Location</label>
							<input name="ll" class="form-control input-sm validate[required,custom[onlyNumberSp],min[3]]" type="text" placeholder="Enter Lab Location">
                        </div>
						
					<div class="form-group">
                            <label>Target User</label>
                            <input name="tu" class="form-control input-sm validate[required,custom[onlyNumberSp],min[18]]" type="text" placeholder="Enter Target User">
                        </div>
						 <div class="form-group">
                            <label>Laboratory Status</label>
							<input name="ls" class="form-control input-sm validate[required,custom[onlyLetterSp],minSize[3],maxSize[30]]]" type="text" placeholder="Enter Lab Status">
                        </div>
						 <div class="form-group">
                            <label>Accomendation</label>
							<input name="acco" class="form-control input-sm validate[required,custom[onlyLetterSp],minSize[3],maxSize[30]]]" type="text" placeholder="Enter Lab Accomendation ">
                        </div>
                        
                      
						<button  class="ladda-button ladda-button-demo btn btn-primary" type="submit" name="add">Add LabInfo</button>
                        <button type="reset"class="btn btn-default ">Cancel</button>
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
</html>
        
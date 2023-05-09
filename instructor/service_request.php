<!DOCTYPE html>
<?php include('dbcon.php');?>
<html>
    

<head>
        <title>www.amu.edu.et</title>
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
                    <h2 class="p-title" style="color:#e60e18;">Service Request Panel</h2>
                   
                </header>
                
                <!-- Required Feilds -->
				
					
					
                <div class="c-block" id="required">
				 
				
                    <form   method="post" enctype="multipart/form-data" role="form" class="form-validation-1">
							<?php
$error=0;
	if(isset($_POST['request'])){
								include('dbcon.php');
								        $dep=$_POST['dep'];
										$batch=$_POST['batch'];
										$course=$_POST['course'];
										$user=$_POST['user'];
										$sw=$_POST['sw'];
										$org=$_POST['org'];
										$pp=$_POST['pp'];
										$dur=$_POST['dur'];
									
								$query = "insert into service (department,batch,course,user_number,software,campany,purpuse,duration) values('$dep','$batch','$course','$user','$sw','$org','$pp','$dur')";
								$result = mysql_query($query)or die(mysql_error());
								if( $result==1){
								echo '<div class="alert alert-dismissable alert-success">';
								echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
								echo '<strong>'.'<center>'."Service Request successfully !".'</center>'.'</strong>';
								echo "<script>windows: location='service_request.php'</script>";
								echo '</div>';
								}
								else{
								echo '<div class="alert alert-dismissable alert-danger error">';
								echo '<strong>'."Service Request is Failed!.".'</strong>';
								echo '</div>';}
                                }
								?>
	
                        <div class="form-group">
                            <label>Department</label>
							 <input name="dep" class="form-control input-sm validate[required,custom[onlyLetterSp],minSize[3],maxSize[18]]]" type="text" placeholder="Enter Department">
                        </div>
						<div class="form-group">
                            <label>Batch</label>
                            <input name="batch" class="form-control input-sm validate[required,custom[onlyLetterSp],minSize[3],maxSize[18]]]" type="text" placeholder="Enter batch ">
                             
                        </div>
						<div class="form-group">
                            <label>Course</label>
							<input name="course" class="form-control input-sm validate[required,custom[onlyLetterSp],minSize[3],maxSize[18]]]" type="text" placeholder="Enter Course">
                             
                        </div>
                        <div class="form-group">
                            <label>Number of user</label>
	                         <input name="user" class="form-control input-sm validate[required,custom[onlyNumberSp],minSize[3],maxSize[18]]]" type="number" placeholder="Enter Number of user">
                        </div>
						
					<div class="form-group">
                            <label>Software</label>
                            <input name="sw" class="form-control input-sm validate[required,custom[onlyLetterSp],minSize[3],maxSize[18]]]" type="text" placeholder="Enter requerd software">
                        </div>
						 <div class="form-group">
                            <label>Organization</label>
							<input name="org" class="form-control input-sm validate[required,custom[onlyLetterSp],minSize[3],maxSize[30]]]" type="text" placeholder="Enter organization">
                        </div>
						 <div class="form-group">
                            <label>Purpose</label>
							<input name="pp" class="form-control input-sm validate[required,custom[onlyLetterSp]minSize[3],maxSize[30]]]" type="text" placeholder="Enter the purpuse ">
                        </div>
						<div class="form-group">
                            <label>Duration</label>
                            <input name="dur" class="form-control input-sm validate[required,custom[onlyLetterSp],minSize[3],maxSize[18]]]" type="text" placeholder="Enter service duration">
							
                        </div>
						<button class="ladda-button ladda-button-demo btn btn-primary" type="submit" name="request">Request</button>
                        <button type="reset" class="btn btn-default ">Cancel</button>
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
        
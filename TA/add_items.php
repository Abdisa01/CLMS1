<!DOCTYPE html>
<?php include('dbcon.php');?>
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
                    <h2 class="p-title" style="color:blue;">Add Item record Panel</h2>
                   
                </header>
                
                <!-- Required Feilds -->
                <div class="c-block" id="required">
				
				
                    <form   method="post" enctype="multipart/form-data" role="form" class="form-validation-1">
					
	
							<?php
$error=0;
	if(isset($_POST['send_request'])){
								include('dbcon.php');
								
								        $in=$_POST['in'];
										$it=$_POST['it'];
										$im=$_POST['im'];
										$serial=$_POST['serial'];
										$ln=$_POST['ln'];
										$lno=$_POST['lno'];
										$ac=$_POST['ac'];
										$status=$_POST['status'];
									
								$query = "insert into item(item_name,item_type,item_model,item_serial,lab_name,lab_number,AMU_code,status) values('$in','$it','$im','$serial','$ln','$lno','$ac','$status')";
								$result = mysql_query($query)or die(mysql_error());
								if( $result==1){
								echo '<div class="alert alert-dismissable alert-success">';
								echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
								echo '<strong>'."Item record Add successfully !".'</strong>';
								//echo "<script>windows: location='add_accused_person.php'</script>";
								echo '</div>';
								}
								else{
								echo '<div class="alert alert-dismissable alert-danger error">';
								echo '<strong>'."Item record is not Added!.".'</strong>';
								echo '</div>';}
                                }
								?>
					
                        <div class="form-group">
                            <label>Item Name</label>
							 <input name="in" class="form-control input-sm validate[required,custom[onlyLetterSp],minSize[3],maxSize[18]]]" type="text" placeholder="Enter Item Name">
                        </div>
						<div class="form-group">
                            <label>Item Type</label>
							<input name="it" class="form-control input-sm validate[required,custom[onlyLetterSp],minSize[3],maxSize[18]]]" type="text" placeholder="Enter Item Type ">
                             
                        </div>
						<div class="form-group">
                            <label>Item Model</label>
							<input name="im" class="form-control input-sm validate[required,custom[onlyLetterSp],minSize[3],maxSize[18]]]" type="text" placeholder="Enter Item Model">
                             
                        </div>
                        <div class="form-group">
                            <label>Serial</label>
							<input name="serial" class="form-control input-sm validate[required,custom[onlyNumberSp],min[3]]" type="text" placeholder="Enter Item Serial">
                        </div>
						
					<div class="form-group">
                            <label>Laboratory Name</label>
                           <input name="ln" class="form-control input-sm validate[required,custom[onlyNumberSp],min[3]]" type="text" placeholder="Enter Lab Name">
                        </div>
						 <div class="form-group">
                            <label>Laboratory Number</label>
							<input name="lno" class="form-control input-sm validate[required,custom[onlyLetterSp],minSize[3],maxSize[30]]]" type="text" placeholder="Enter Lab Number">
                        </div>
						 <div class="form-group">
                            <label>AMU code</label>
							<input name="ac" class="form-control input-sm validate[required,custom[onlyLetterSp],minSize[3],maxSize[30]]]" type="text" placeholder="Enter AMU code ">
                        </div>
						<div class="form-group">
                            <label>Status</label>
                           <input name="status" class="form-control input-sm validate[required,custom[onlyLetterSp],minSize[3],maxSize[30]]]" type="text" placeholder="Enter Item Status">
                        </div>
				
						<button class="ladda-button ladda-button-demo btn btn-primary" type="submit" name="send_request">Add Item</button>
                        <button  type="reset"class="btn btn-default ">Cancel</button>
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
        
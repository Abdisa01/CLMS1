<!DOCTYPE html>
<?php include("dbcon.php");?>
<?php include("session.php"); ?>
<html>
<head>
        <title>Clms.amu.edu.et</title>
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
                
               
                <div class="c-block" id="custom">
                  
                   
                                <div class="modal-header">
                                    <button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">Modal title</h4>
                                </div>
                                <div class="modal-body">
                                    <form  class="form-validation-1 form-horizontal"  role="form"   method="POST" enctype="multipart/form-data" >
									<input type="hidden" name="user_id"  value="<?php echo $get_id ?>"   />
                                        <div class="form-group">
                                            <label for="inputName4" class="col-md-2 control-label">Name</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control input-sm" id="inputName4" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail4" class="col-md-2 control-label">Email</label>
                                            <div class="col-md-10">
                                                <input type="email" class="form-control input-sm" id="inputEmail4" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputMessage3" class="col-md-2 control-label">Message</label>
                                            <div class="col-md-10">
                                                <textarea class="form-control auto-size input-sm" id="inputMessage3" placeholder="..."></textarea>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-sm">Save chapnges</button>
                                    <button type="button" class="btn btn-sm" data-dismiss="modal">Close</button>
                                </div>
                    
                    <br/><br/><br/><br/><br/><br/><br/><br/><br/>
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
        
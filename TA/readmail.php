<!DOCTYPE html>
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
     </head>
     <body>
          <!-- Header -->
          
           <?php include("header.php");?>
          <section id="main" role="main">
               
               <!-- Left Sidebar -->
          <?php include("leftside.php");?>
               
               <!-- Right Sidebar -->
               <aside id="rightbar" class="pull-right">
                    <div class="sidebar-container">
                         
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
               
               <!-- Content -->
               <section id="content" class="container">
           
                    <form method="post" enctype="multipart/form-data" role="form" class="form-validation-1">
		   
		   
		 <?php	$error = 0;
				if (isset($_POST['send_message'])){		
						                
									
				                        $date=date("y-m-d");
										$send_from=$_POST['send_from'];
										$to=$_POST['send_to'];
				                        $name = $_POST['subject'];
				                        $content = $_POST['content'];
										$status_from = "Sent";
										$status_to = "New";
										
										//if($file_cv != null){
										
				                        $image = $_FILES['image']['tmp_name'];
										$image_name = $_FILES['image']['name'];
										$image_type = $_FILES['image']['type'];
										$image_error = $_FILES['image']['error'];
										/*if($type != 'doc'  && $type != 'docx' && $type != 'pptx' && $type != 'csv' && $type != 'pdf' && $type != 'JPG' && $type != 'PNG' && $type != 'jpg' &&  $type != 'png'  ){
											$message = "Invalid File Format Not Supported !";
											echo '<div class="alert alert-dismissable alert-danger">';
											echo '<button type="button" class="close" data-dismiss="alert">X</button>';
											echo '<strong>'.$message.'</strong>';
											echo '</div>';
											}
											else{*/
							 $kalo=mysql_query("Insert into mail (date,send_from,send_to,subject,content,file,status_from,status_to) values('$date','$send_from','$to','$name','$content','"."$image_name"."','$status_from','$status_to')")or die(mysql_error());
				             move_uploaded_file($_FILES["image"]["tmp_name"], "../images/" . $_FILES["image"]["name"]);
							 $message = "Message send Successfully !";
										echo ' <center>	<div class="alert alert-dismissable alert-success">';
											echo '<button type="button" class="close" data-dismiss="alert">X</button>';
											echo '<strong>'.$message.'</strong>';
										echo '</div></center>';/*}}else{
												
												$kalo=mysql_query("Insert into mail (date,send_from,send_to,subject,content,status_from,status_to) values('$date','$send_from','$to','$name','$content','$status_from','$status_to')")or die(mysql_error());
				            move_uploaded_file($_FILES["file_cv"]["tmp_name"], "../images/" . $_FILES["file_cv"]["name"]);
							$message = "Message send Successfully !";
												
												
										}*/ }?>
                    <header class="message-header form-validation-1" enctype="multipart/form-data" role="form" >
                         <div class="dropdown pull-left compose-message">
                              <a data-toggle="dropdown" class="btn btn-danger" href="#">Compose Mail</a>

                              <div class="dropdown-menu dropdown-form flat" role="menu">
                                   
                                   <div class="flat-body">  
										<div class="form-group">
                                            <input type="text" name="send_to"class="form-control input-sm validate[required,custom[email]]" placeholder="To..">
                                        </div>								   
                                        <div class="form-group">
                                            <input type="text" name="subject"class="form-control input-sm" placeholder="Subject">
                                        </div>
										 	<div class="form-group">
											
						<?php
		  $jos=mysql_query("select * from user where username='$session_id'")or die (mysql_error());
		  $jo=mysql_fetch_array($jos);	
$temp=$jo['email'];		  
		  ?> 	
		  
										<input type="hidden" name="send_from" value="<?php echo $temp; ?>"  class="form-control input-sm" >
                                       </div>
									   <div class="form-group">
                                             <textarea name="content" class="form-control input-sm validate[required]" placeholder="Message"></textarea>  
                                        </div>
										<div class="form-group">
                                            <input type="file" name="image" class="form-control input-sm" placeholder="Attach File">
                                        </div>
                                   </div>
                                   <div class="flat-footer">
                                       <button name="send_message" class="btn btn-sm btn-primary">Send Message</button>
									    <button class="btn btn-sm">Cancel</button>
                                   </div>
                              </div>
                         </div>
                                             
                       
                    </header>
					</form>
                    <div class="block">
                         <div class="media messages">
                              <div class="pull-left message-menu">
                                   <i class="icon-angle-down message-menu-toggle visible-xs"></i>
                                   
                                   <div class="list-group">
                                        <a href="mailbox.php" class="list-group-item active">Inbox<span class="badge">	<?php
							            $ans = mysql_query( "SELECT * FROM user WHERE username='$session_id'")or die(mysql_error());
								        $da=mysql_fetch_array($ans);
									         $to_email =$da["email"];
											 $sta="New";
									$ab = mysql_query("SELECT * FROM Mail WHERE send_to='$to_email' AND status_to='$sta'"); 
										  $X=0;
										  while($na= mysql_fetch_array($ab)){
											$X++;
											}
							?>
							<?php echo $X ?></span></a>
                                        
                                        <a href="sent.php" class="list-group-item">Sent Mail <span class="badge"><?php
							            $answe = mysql_query( "SELECT * FROM user WHERE username='$session_id'")or die(mysql_error());
								        $dat=mysql_fetch_array($answe);
									         $too =$dat["email"];
											 $statuss="Sent";
									$abenn = mysql_query("SELECT * FROM Mail WHERE send_from='$too' AND status_from='$statuss'"); 
										  $Z=0;
										  while($nasaa = mysql_fetch_array($abenn)){
											
											$Z++;
											}
											
							?>
							<?php echo $Z ?></span></a>
                                   </div>
                                   
                                   
                              </div>
                              
                              <div class="media-body message-body">
                                   <div class="listview">
                                        <header class="media listview-header">   
                                             <div class="clearfix"></div>
                                             
                                        </header>
                                        
                                        
										<?php 
										$id=$_GET['ID'];
										  $query = "SELECT * FROM user WHERE username='$session_id'";
								         $result = mysql_query($query)or die(mysql_error());
								         $num_row = mysql_num_rows($result);
									     $row=mysql_fetch_array($result);
                                          $querys = mysql_query("SELECT * FROM Mail WHERE msg_id='$id' "); 
								          $array = array();
										  $rows = mysql_fetch_assoc($querys);
								            $array[] = $rows; 
								          $sender=$rows["send_from"]; 
                                         $que=mysql_query("select * from user where email='$sender'")or die(mysql_error());
					                     $r=mysql_fetch_array($que);
										 $string=$rows['content'];
										  $st=$rows['file'];
										 
										 
										 
										?><div class="media">
                                            <small class="pull-right message-time"> Date:&nbsp;<?php echo $rows['date'];?></small>
                                             <div class="media-body"> Sender:- 
                                                  <?php echo $r['f_name']." ".$r['l_name']; ?><br/>
												  <br>
                                                  <small class="hidden-xs"><?php echo $string;?></small> 
												  <?php
							                   $male=mysql_num_rows(mysql_query("SELECT * FROM mail where msg_id='$id'"));
							                if($male==0){
								
							                         }
													 else{
												 echo "<img width='100' height='100' class='img-rectangle profile_img' src='../images/".$rows['file']." ' alt='profile pic'>";
													  }?>
                                             </div>
                                            
                                        </div>
                                       
                                   </div>
                              </div>
                         </div>
                    </div>
                     
               </section>
          </section>
        <?php include('footer.php');?>
          
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
          <script src="js/file-manager/elfinder.min.js"></script>
          <script src="js/functions.js"></script> 
     </body>

<!-- Mirrored from byrushan.com/projects/black-pearl/Template/messages.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 May 2016 08:40:26 GMT -->
</html>
               
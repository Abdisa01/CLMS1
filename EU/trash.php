<!DOCTYPE html>
<html>
    
<!-- Mirrored from byrushan.com/projects/black-pearl/Template/messages.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 May 2016 08:40:25 GMT -->
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
		   
		   
		   <?php
													$error = 0;
				if (isset($_POST['send_message'])){		
						                
									
				                        $date=date("y-m-d");
										$send_from=$_POST['send_from'];
										$to=$_POST['send_to'];
				                        $name = $_POST['subject'];
				                        $content = $_POST['content'];
										$status_from = "Sent";
										$status_to = "New";
										
										
										
				                        $file_cv = addslashes(file_get_contents($_FILES['file_cv']['tmp_name']));
		                                $file_cv = addslashes(file_get_contents($_FILES['file_cv']['tmp_name']));
		                                $Juses = addslashes($_FILES['file_cv']['name']);
		                                $image_size = getimagesize($_FILES['file_cv']['tmp_name']);
										$type = explode('.', $Juses);
										$type = end($type);
										if($type != 'doc'  && $type != 'docx' && $type != 'pptx' && $type != 'csv' && $type != 'pdf' && $type != 'JPG' && $type != 'PNG' && $type != 'jpg' &&  $type != 'png'  ){
											$message = "Invalid File Format Not Supported !";
											echo '<div class="alert alert-dismissable alert-danger">';
											echo '<button type="button" class="close" data-dismiss="alert">X</button>';
											echo '<strong>'.$message.'</strong>';
											echo '</div>';
											}
											else{
													$kalo=mysql_query("Insert into mail (date,send_from,send_to,subject,content,file,status_from,status_to) values('$date','$send_from','$to','$name','$content','$Juses','$status_from','$status_to')")or die(mysql_error());
				             move_uploaded_file($_FILES["file_cv"]["tmp_name"], "../images/" . $_FILES["file_cv"]["name"]);
							 $message = "Message send Successfully !";
										echo ' <center>	<div class="alert alert-dismissable alert-success">';
											echo '<button type="button" class="close" data-dismiss="alert">X</button>';
											echo '<strong>'.$message.'</strong>';
											echo '</div></center>';}	}?>
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
                                            <input type="file" name="file_cv" class="form-control input-sm" placeholder="Attach File">
                                        </div>
                                   </div>
                                   <div class="flat-footer">
                                       <button name="send_message" class="btn btn-sm btn-primary">Send Message</button>
									    <button class="btn btn-sm">Cancel</button>
                                   </div>
                              </div>
                         </div>
                                             
                         <div class="input-group list-view-search">
                              <input type="text" placeholder="Type something..." class="form-control input-sm">
                                       
                              <div class="input-group-btn">
                                   <button type="button" class="btn btn-gr-gray btn-sm">
                                        <i class="icon-search"></i>
                                   </button>
                              </div>      
                         </div>
                    </header>
					</form>
                    <div class="block">
                         <div class="media messages">
                              <div class="pull-left message-menu">
                                   <i class="icon-angle-down message-menu-toggle visible-xs"></i>
                                   
                                   <div class="list-group">
                                        <a href="mailbox.php" class="list-group-item ">Inbox<span class="badge">	<?php
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
                                        <a href="draft.php" class="list-group-item">Drafts <span class="badge"><?php
							            $answer = mysql_query( "SELECT * FROM user WHERE username='$session_id'")or die(mysql_error());
								        $data=mysql_fetch_array($answer);
									         $to =$data["email"];
									$aben = mysql_query("SELECT * FROM Mail WHERE send_from='$to'"); 
										  $Y=0;
										  while($nasa = mysql_fetch_array($aben)){
											$status=$nasa['status_from'];
											if($status=="Draft"){
											$Y++;
											}
											else{
											$Y=0;
											}
											}
							?>
							<?php echo $Y ?></span></a>
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
                                   
                                   <div class="list-group">
                                        <a href="trash.php" class="list-group-item active">Trash <span class="badge" style="color:red"><?php
							            $answer = mysql_query( "SELECT * FROM user WHERE username='$session_id'")or die(mysql_error());
								        $data=mysql_fetch_array($answer);
									         $to =$data["email"];
											 $stat="Deleted";
									$aben = mysql_query("SELECT * FROM Mail WHERE send_to='$to' AND status_to='$stat'"); 
										  $A=0;
										  while($nasa = mysql_fetch_array($aben)){
											$status=$nasa['status_to'];
											$A++;
											}
							?>
							<?php echo $A ?></span></a>
                                   </div>
                              </div>
                              
                              <div class="media-body message-body">
                                   <div class="listview">
                                        <header class="media listview-header"> 
                                             <div class="clearfix"></div>
                                             
                                        </header>
                                        
                                        
										<?php 
										  $query = "SELECT * FROM user WHERE username='$session_id'";
								         $result = mysql_query($query)or die(mysql_error());
								         $num_row = mysql_num_rows($result);
									     $row=mysql_fetch_array($result);
									         $e_mail =$row["email"];
											 $stata="Deleted";
                                          $querys = mysql_query("SELECT * FROM Mail WHERE send_to='$e_mail' AND status_to='$stata'"); 
								          $array = array();
										  while($rows = mysql_fetch_assoc($querys)){
								            $array[] = $rows; 
								          $sender=$rows["send_from"];
                                         $que=mysql_query("select * from user where email='$sender'")or die(mysql_error());
					                     $r=mysql_fetch_array($que);
										 $string=$rows['content'];
										 $string = strip_tags($string);

                                          if (strlen($string) > 100) {
										    $stringCut = substr($string, 0, 100);
                                            $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...'; 
                                               }
										?><div class="media">
                                             <label class="pull-left">
                                                  <input class="check-all" type="checkbox" value="">
                                             </label>
                                             
                                             <small class="pull-right message-time"><?php echo $rows['date'];?></small>
                                             <div class="media-body">
                                                  <?php echo $r['f_name']." ".$r['l_name']; ?><br/>
                                                  <small class="hidden-xs"><?php echo $string;?></small>
                                                  <div class="list-options">
                                                       <button class="btn btn-gr-gray btn-sm"><i class="icon-star"></i></button>
                                                       <button class="btn btn-gr-gray btn-sm"><a href="readmail.php?ID=<?php  echo $rows['msg_id'];?>">Read More</a></button>
                                                  </div>
                                             </div>
                                            
                                        </div><?php }?>
                                       
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
               
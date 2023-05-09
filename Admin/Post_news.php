<!DOCTYPE html>
<?php include("dbcon.php");?>
<html>
    

<head>
        <title>clms.amu.edu.et</title>
		 <link rel="shortcut icon" HREF="../images/log.jpg" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Crime Record And Management System">
        <meta name="keywords" content="Crime Record And Management System">
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
                         <?php include("rightside.php");?>
        
            <!-- Content -->
			
            <section id="content" style="height:600px;">
                <header class="p-header">
                    <h2 class="p-title">Post News Area</h2>
                    
                </header>
                
                <!-- Post Area -->
				 <div class="c-block" id="required">
                    <form   method="post" enctype="multipart/form-data" role="form" class="form-validation-1">
					
  <?php
if(isset($_POST['postnews'])){
								include('dbcon.php');
								if (isset($_POST['postnews'])){
									
								
$title=$_POST['title'];
date_default_timezone_set("America/New_York");
$date = date("Y-m-d h:i:s:a");
$post=$_POST['post'];
$post_for=$_POST['post_for'];

 $datee = date('y-m-d');
 $da = date('y-m-d', strtotime($datee. ' + 10 days'));
		 $st = "posted";

$query = "insert into news (title,post,postBy,username,status,date,st,deadline) VALUES('$title','$post','$session_id','$session_id','$post_for','$date','$st','$da')";
$result = mysql_query($query)or die(mysql_error());
								if( $result==1){
									echo '<div class="alert alert-dismissable alert-success">';
								echo '<strong>'.'<center>'."News Posted successfully !".'</center>'.'</strong>';
								
								echo '</div>';
								
									
									$sqls=mysql_query("select * from news  where st='posted'");
								while($no=mysql_fetch_array($sqls)){
									$deadline=$no['deadline'];
									$expired="expired";
								$mysql=mysql_query("update news set st='$expired' WHERE deadline < NOW()");	
								}
									
								
							
								}
								
								
									else{
								$querys = "SELECT *FROM news WHERE postBy='$session_id' ";
								         $results = mysql_query($querys)or die(mysql_error());
								         $num_rows = mysql_num_rows($results);
									     $rows=mysql_fetch_array($results);
									         $title =$rows["title"];
											 $post=$rows["post"];
                               if($title==$title && $post==$post){
							   echo '<div class="alert alert-dismissable alert-danger" style="margin-top:-20px;">';
												echo '<strong>'.'<center>'."You have already post this News ! ".'</center>'.'<strong>';
												echo '</div>';
							   }
                                }}
}

?>
								
				
                <div class="post-area">
                    <ul class="post-menu list-inline">
					<li><a  href="#"><i class="icon-pencil-2"></i> <span>Title</span></a></li>
					<input type="text" name="title" class="form-control  validate[required]" placeholder="Write the Title here!" >
					
					 <li><a class="active" href="#"><i class="icon-earth"></i> <span>News</span></a></li>
                        
                    </ul>
                    <div class="posting">
					    
                        <textarea name="post"  class=" text-post form-control  validate[required]" placeholder="Write something..."></textarea>
                        <div class="post-options">
                          
                           
                        
                        </div>
                        
                        <div class="share-to">
                            <div class="to">
                             <i class="icon-arrow-right"></i> To 
                            </div>
							  <select name="post_for" style="width:87%;" class="form-control  validate[required]">
                                <option value="">Select Users...</option>
                                <option>All</option>
								<option>Labmanger</option>
								<option>Technical assistant</option>
								<option>instructor</option>
								<option>student</option>
								<option>external user</option>
                            </select>
							
                            <button  style="margin-left:88%;margin-top:-53px;" type="submit" name="postnews" class="btn btn-primary wall">Post News</button>
							<button  style="margin-left:100%;margin-top:-89px;" type="reset"  class="btn btn-defualt ">Cancel</button>
							
                        </div>
                    </div>
                </div>
				</form>
                
               
                

                <!-- Postings -->
                
                <div class="clearfix"></div>
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
        <script src="js/functions.js"></script>
    </body>

<!-- Mirrored from byrushan.com/projects/black-pearl/Template/wall.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 May 2016 08:30:48 GMT -->
</html>
								          
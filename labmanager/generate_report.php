<!DOCTYPE html>
<?php include('dbcon.php');?>
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
               
          <!-- The following CSS codes are used to display the template customization in this page. You can remove these codes anytime -->
          <style type="text/css">
               .template-customize {
                    position: fixed;
                    bottom: 0;
                    right: 35px;
                    background: #000;
                    background: rgba(0,0,0,0.9);
                    width: 154px;
                    z-index: 10000;
                    border: 2px solid #B6B6B6;
                    border-bottom: 0;
                    border-radius: 1px;
                    box-shadow: 0 0 10px #000;
                    height: 0;
               }
               
               .template-customize i {
                    font-size: 30px;
                    position: absolute;
                    color: #000;
                    top: -46px;
                    left: 49px;
                    padding: 10px 10px 4px 10px;
                    border-radius: 100% 100% 0 0;
                    background: #fff;
                    background-image: -webkit-gradient(linear,left top,left bottom,color-stop(0, #FFFFFF),color-stop(1, #B6B6B6));
                    background-image: -o-linear-gradient(bottom, #FFFFFF 0%, #B6B6B6 100%);
                    background-image: -moz-linear-gradient(bottom, #FFFFFF 0%, #B6B6B6 100%);
                    background-image: -webkit-linear-gradient(bottom, #FFFFFF 0%, #B6B6B6 100%);
                    background-image: -ms-linear-gradient(bottom, #FFFFFF 0%, #B6B6B6 100%);
                    background-image: linear-gradient(to bottom, #FFFFFF 0%, #B6B6B6 100%);
               }
               
               .template-customize i:hover {
                    cursor: pointer;
                    color: #3748d4;
               }
               
               .template-customize ul {
                    list-style: none;
                    float: left;
                    margin: 10px 0 10px 20px;
                    padding: 0;
               }
               
               .template-customize ul li {
                    width: 45px;
                    height: 30px;
                    overflow: hidden;
                    margin-bottom: 2px;
               }
               
               .template-customize ul li:hover {
                    cursor: pointer;
                    opacity: 0.8;
               }
          </style>
		 <script language="javascript" type="text/javascript">
        function printDiv(divID) {
            //Get the HTML of div
            var divElements = document.getElementById(divID).innerHTML;
            //Get the HTML of whole page
            var oldPage = document.body.innerHTML;

            //Reset the page's HTML with div's HTML only
            document.body.innerHTML = 
              "<html><head><title></title></head><body>" + 
              divElements + "</body>";

            //Print Page
            window.print();

            //Restore orignal HTML
            document.body.innerHTML = oldPage;

          
        }
    </script>
    </head>
    <body>
          <!-- Header -->
          <header id="header" class="clearfix">
               <!-- Logo -->
               <a href="index.php" class="logo shadowed">
                 Welcome to Labmanager Panel 
					
               </a>
               
               <div class="dropdown profile-menu shadowed">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
					<?php 
				$query=mysql_query("Select p_picture from user where username='$session_id'") or die(mysql_error());
				while( $rows = mysql_fetch_assoc($query)){
				if($rows['p_picture']=="")
				{
					echo "<img width='20' height='20' src='image/0.13.jpg'alt='defualt profile pic'>";
					
				}
				else{ echo "<img width='40' height='30' class='img-rectangle profile_img' src='../images/".$rows['p_picture']." ' alt='profile pic'>";
					
				}
				}
                  
				 ?>
                        <!-- <img src="img/profile-pics/profile-pic.png" alt="" class="profile-pic">-->
                    </a>
                    <ul class="dropdown-menu pull-right text-right">
                         <li><a href="change_profile.php" class="icon-profile" aria-hidden="true">&nbsp;Update Profile Picture</a></li>
					 <li><a href="Update_profile.php" class="icon-wrench" aria-hidden="true">&nbsp;Change Password</a></li>
                    
                    <li class="divider"></li>
                    <li><a href="logout.php" class="icon-exit" aria-hidden="true">&nbsp;Log Out</a></li>
                    </ul>
               </div>
               
               <ul class="nav nav-pills pull-right shadowed" id="top-menu">
                   <li><a href="index.php" class="icon-home">&nbsp;&nbsp;Home</a></li>
                    
					<?php
			 
			  $query=mysql_query("Select * from user where username='$session_id'") or die(mysql_error());
			  $rows = mysql_fetch_assoc($query);
			  
			  ?>
                   <li><a href="#" class="icon-user"> &nbsp;&nbsp;<?php echo $rows['f_name']." ".$rows['l_name'];?></a></li>
               </ul>
               
              
               
             <form class="form-inline top-search shadowed">
                <input type="text" class="form-control" placeholder="Search for anything...">
                <button type="submit"><i class="icon-search"></i></button>
            </form>
               
          </header>
          
          <section id="main" role="main">
               
               <!-- Left Sidebar -->
             <?php include("leftside.php");?>
               
               <!-- Right Sidebar -->
               <aside id="rightbar" class="pull-right">
                    <div class="sidebar-container">
                         <!-- Date + Clock -->
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
                         
                         <!-- Progress bar -->
                         
               
                         <!-- Counts -->
                         

                         <!-- Notification -->
                         
                    </div>
                    
                    <span id="rightbar-toggle" class="hidden-lg sidebar-toggle">
                         <i class="icon-angle-left"></i>
                    </span>
               </aside>
               
               <!-- Content -->
               <section id="content" class="container">
			   <header class="p-header">
                    <h2 class="p-title">Prepare Report Panel</h2>
                </header>
			   
			    <form class="form-validation-1" role="form" id="inline"   method="Post">
				
			 <div  style="width:50%;margin-left:15%;"class="form-group">
                            <label style="color:blue;"> Select Report Type</label>
                            <select   name="type" class="form-control input-sm validate[required]">
							    <option value="">Select for whom generate report</option>
                                <option value="Accused">For TA evaluation</option>
                            </select>
                        </div>
						
						<div  style="width:50%;margin-left:15%;"class="form-group">
						 <label style="color:blue;">Specify date</label>
						 <select   name="report_of" class="form-control input-sm validate[required]">
							    <option value="">Select status</option>
                                <option value="Today">semister</option>
              
                            </select>	 	
                    </div>
					<div>
					<button style="margin-left:130px;"class="ladda-button ladda-button-demo btn btn-primary" type="submit" name="send_request">Generate Report</button>
					
                    <button type="reset" class="btn btn-default ">Cancel</button>
					</div>
					<br><br>
					<div class="print"id="printablediv">
						<?php
				if (isset($_POST['send_request'])){
					$type = $_POST['type'];
	                $report_of = $_POST['report_of
					'];
					
					if($type=="TA evaluation"){
						echo '<div class="printt"id="printabledivv">';
						if($report_of=="Semister"){
							echo ' <img src="../images/header.jpg">';
							$count = "SELECT * FROM Account WHERE username='$session_id'";
								         $answer = mysql_query($count)or die(mysql_error());
								         $data=mysql_fetch_array($answer);
											 
						$date=date('Y-m-d');
						?>
				</div>	
	  </form>
  </section>
          </section>
          
          <?php include("footer.php");?>
         </body>
		 </html>
        
          <!-- Javascipt -->
          <script src="js/jquery-1.10.2.min.js"></script>
          <script src='js/jquery-ui-1.10.3.min.js'></script>
          <script src="js/chart/highcharts.js"></script>
          <script src="js/chart/modules/exporting.js"></script>
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
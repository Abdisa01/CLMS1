<!DOCTYPE html>
<html>
    

<head>
        <title>CLMS.AMU.EDU.ET</title>
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
			   <?php 
			 $error=0;
			 include('dbcon.php');
	if(isset($_POST['Create'])){
																
								
								$tan = $_POST['tan'];
								$ln = $_POST['ln'];
								$lno = $_POST['lno'];
								$sem = $_POST['sem'];
								$year = $_POST['year'];
								$q1 = $_POST['q1'];
								$q2=$_POST['q2'];
								$q3=$_POST['q3'];
								$q4=$_POST['q4'];
								$q5=$_POST['q5'];
								$q6=$_POST['q6'];
								$q7=$_POST['q7'];
								$q8=$_POST['q8'];
								$q9=$_POST['q9'];
								$q10=$_POST['q10'];
                                $query = "insert into evaluation_manager(ta name,lab_name,lab_number,semister,year,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,q11,q12,q13,q14,q15) values('$tan','$ln','$lno','$sem','$year','','$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15')";
								$result = mysql_query($query)or die(mysql_error());   								
								
								if( $result==1){
								echo '<div class="alert alert-dismissable alert-success">';
								echo '<strong>'.'<center>'."TA Evaluate successfully !" .'</center>'.'</strong>';
								echo '</div>';
								
								
								}
								else{
								echo '<div class="alert alert-dismissable alert-danger">';
								echo '<strong>'."Evaluation is Failed try again.".'</strong>';
								echo '</div>';}
                                }  
			   
			   ?>
               <section id="content" class="container">
           <form method="post" enctype="multipart/form-data" role="form" class="form-validation-1">
		   <div>
		   <p> EVALUATION FORM FOR TECHNICAL LAB ASSISTANT  </p>
			 </div>
			 <div>
			 <div>
			 <label> name of TA to evaluate</label>
			   <input name="tan" class="form-control input-sm validate[required,custom[onlyLetterSp],minSize[3],maxSize[20]]" type="text" placeholder="Enter TA name ">
			 </div>
			  <div>
			 <label>Laboratory Name</label>
			   <input name="ln" class="form-control input-sm validate[required,custom[onlyLetterSp],minSize[3],maxSize[20]]" type="text" placeholder="Enter Lab Name ">
			 </div>
			  <div>
			 <label> Lab Number</label>
			   <input name="lno" class="form-control input-sm validate[required,custom[onlyLetterSp],minSize[3],maxSize[20]]" type="text" placeholder="Enter Lab number ">
			 </div>
			  <div>
			 <label>Semister</label>
			   <input name="sem" class="form-control input-sm validate[required,custom[onlyLetterSp],minSize[3],maxSize[20]]" type="text" placeholder="Enter  Accademic Semister ">
			 </div>
			  <div>
			 <label> Year</label>
			   <input name="year" class="form-control input-sm validate[required,custom[onlyLetterSp],minSize[3],maxSize[20]]" type="text" placeholder="Enter Accademic Year ">
			 </div>
		       <div>
			 <h4>  <label style="font-size:20px; size:45px">question 1 ddddddddddddddddddddddddddddddddddddd</label>
			   <input type="radio"  name="q1" value="5" />very good
			   <input type="radio"  name="q1" value="4" />good
			   <input type="radio"  name="q1" value="3" />fair
			   <input type="radio"  name="q1" value="2" />poor
			   <input type="radio"  name="q1" value="1" />very poor</h4>
			   </div>
			    <div>
			  <h4> <label  style="font-size:20px; size:45px">question 2 dddddddddddddddddddddddddddddddddddd</label>
			   
			   <input type="radio" name="q2" value="5" />very good
			   <input type="radio" name="q2" value="4" />good
			   <input type="radio" name="q2" value="3" />fair
			   <input type="radio" name="q2" value="2" />poor
			   <input type="radio" name="q2" value="1" />very poor</h4>
			   </div>
		    <div>
			   <h4><label style="font-size:20px; size:45px">question 3  ddddddddddddddddddddddddddddddddddddd</label>
			  
			   <input type="radio" name="q3" value="5" />very good
			   <input type="radio" name="q3" value="4" />good
			   <input type="radio" name="q3" value="3" />fair
			   <input type="radio" name="q3" value="2" />poor
			   <input type="radio" name="q3" value="1" />very poor</h4>
			   </div>
			    <div>
			   <h4><label style="font-size:20px; size:45px">question 4  ddddddddddddddddddddddddddddddddddddd</label>
			 
			   <input type="radio" name="q4" value="5" />very good
			   <input type="radio" name="q4" value="4" />good
			   <input type="radio" name="q4" value="3" />fair
			   <input type="radio" name="q4" value="2" />poor
			   <input type="radio" name="q4" value="1" />very poor</h4>
			   </div>
                  
                   <div>
			   <h4><label style="font-size:20px; size:45px">question5dddddddddddddddddddddddddddddddddddd </label>
			   <input type="radio" name="q5" value="5" />very good
			   <input type="radio" name="q5" value="4" />good
			   <input type="radio" name="q5" value="3" />fair
			   <input type="radio" name="q5" value="2" />poor
			   <input type="radio" name="q5" value="1" />very poor</h4>
			   </div> 
			    <div>
			  <h4> <label style="font-size:20px; size:45px">question6 dddddddddddddddddddddddddddddddddddd </label>
			   
			   <input type="radio" name="q6" value="5" />very good
			   <input type="radio" name="q6" value="4" />good
			   <input type="radio" name="q6" value="3" />fair
			   <input type="radio" name="q6" value="2" />poor
			   <input type="radio" name="q6" value="1" />very poor</h4>
			   </div>   
			    <div>
			  <h4> <label style="font-size:20px; size:45px">question7 dddddddddddddddddddddddddddddddddddd</label>
			   
			   <input type="radio" name="q7" value="5" />very good
			   <input type="radio" name="q7" value="4" />good
			   <input type="radio" name="q7" value="3" />fair
			   <input type="radio" name="q7" value="2" />poor
			   <input type="radio" name="q7" value="1" />very poor</h4>
			   </div>  
			    <div>
			  <h4> <label style="font-size:20px; size:45px">question8 dddddddddddddddddddddddddddddddddddd</label>
			 
			   <input type="radio" name="q8" value="5" />very good
			   <input type="radio" name="q8" value="4" />good
			   <input type="radio" name="q8" value="3" />fair
			   <input type="radio" name="q8" value="2" />poor
			   <input type="radio" name="q8" value="1" />very poor</h4>
			   </div>
			    <div>
			 <h4>  <label style="font-size:20px; size:45px">question9 dddddddddddddddddddddddddddddddddddd</label>
			   
			   <input type="radio" name="q9" value="5" />very good
			   <input type="radio" name="q9" value="4" />good
			   <input type="radio" name="q9" value="3" />fair
			   <input type="radio" name="q9" value="2" />poor
			   <input type="radio" name="q9" value="1" />very poor</h4>
			   </div>
			    <div>
			 <h4>  <label style="font-size:20px; size:45px">question 10 dddddddddddddddddddddddddddddddddddd </label>
			   
			   <input type="radio" name="q10" value="5" />very good
			   <input type="radio" name="q10" value="4" />good
			   <input type="radio" name="q10" value="3" />fair
			   <input type="radio" name="q10" value="2" />poor
			   <input type="radio" name="q10" value="1" />very poor</h4>
			   </div> 
			    <div>
			 <h4>  <label style="font-size:20px; size:45px">question 11 dddddddddddddddddddddddddddddddddddd </label>
			   
			   <input type="radio" name="q11" value="5" />very good
			   <input type="radio" name="q11" value="4" />good
			   <input type="radio" name="q11" value="3" />fair
			   <input type="radio" name="q11" value="2" />poor
			   <input type="radio" name="q11" value="1" />very poor</h4>
			   </div> 
			    <div>
			 <h4>  <label style="font-size:20px; size:45px">question 12 dddddddddddddddddddddddddddddddddddd </label>
			   
			   <input type="radio" name="q12" value="5" />very good
			   <input type="radio" name="q12" value="4" />good
			   <input type="radio" name="q12" value="3" />fair
			   <input type="radio" name="q12" value="2" />poor
			   <input type="radio" name="q12" value="1" />very poor</h4>
			   </div> 
			    <div>
			 <h4>  <label style="font-size:20px; size:45px">question 13 dddddddddddddddddddddddddddddddddddd </label>
			   
			   <input type="radio" name="q13" value="5" />very good
			   <input type="radio" name="q13" value="4" />good
			   <input type="radio" name="q13" value="3" />fair
			   <input type="radio" name="q13" value="2" />poor
			   <input type="radio" name="q13" value="1" />very poor</h4>
			   </div> 
			    <div>
			 <h4>  <label style="font-size:20px; size:45px">question 14 dddddddddddddddddddddddddddddddddddd </label>
			   
			   <input type="radio" name="q14" value="5" />very good
			   <input type="radio" name="q14" value="4" />good
			   <input type="radio" name="q14" value="3" />fair
			   <input type="radio" name="q14" value="2" />poor
			   <input type="radio" name="q14" value="1" />very poor</h4>
			   </div> 
			    <div>
			 <h4>  <label style="font-size:20px; size:45px">question 15 dddddddddddddddddddddddddddddddddddd </label>
			   
			   <input type="radio" name="q15" value="5" />very good
			   <input type="radio" name="q15" value="4" />good
			   <input type="radio" name="q15" value="3" />fair
			   <input type="radio" name="q15" value="2" />poor
			   <input type="radio" name="q15" value="1" />very poor</h4>
			   </div> 
		       <div><label for="msg">Comment</label>
		         <textarea  style="font-size:15px; size:45px"id="msg" name="msg" placeholder="Write some comment about technical assistant..." class="txtarea"></textarea>
		       </div>                    
                  <div>
				  <button class="ladda-button ladda-button-demo btn btn-primary" type="submit" name="eva">Submit</button>
				  </div>      
          </div>          
					</form>
                    
             
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

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
			   <label>question1ddddddddddddddddddddddddddddddddddddd</label>
			   <input type="radio" name="q1" value="ques 1" />very good
			   <input type="radio" name="q1" value="ques 2" />good
			   <input type="radio" name="q1" value="ques 3" />fair
			   <input type="radio" name="q1" value="ques 4" />poor
			   <input type="radio" name="q1" value="ques 5" />very poor
			   </div>
			    <div>
			   <label>question2</label>
			   dddddddddddddddddddddddddddddddddddd
			   <input type="radio" name="q2" value="ques 1" />very good
			   <input type="radio" name="q2" value="ques 2" />good
			   <input type="radio" name="q2" value="ques 3" />fair
			   <input type="radio" name="q2" value="ques 4" />poor
			   <input type="radio" name="q2" value="ques 5" />very poor
			   </div>
		    <div>
			   <label>question3</label>
			   ddddddddddddddddddddddddddddddddddddd
			   <input type="radio" name="q1" value="ques 1" />very good
			   <input type="radio" name="q2" value="ques 2" />good
			   <input type="radio" name="q3" value="ques 3" />fair
			   <input type="radio" name="q4" value="ques 4" />poor
			   <input type="radio" name="q5" value="ques 5" />very poor
			   </div>
			    <div>
			   <label>question4</label>
			   dddddddddddddddddddddddddddddddddddd
			   <input type="radio" name="q1" value="ques 1" />very good
			   <input type="radio" name="q2" value="ques 2" />good
			   <input type="radio" name="q3" value="ques 3" />fair
			   <input type="radio" name="q4" value="ques 4" />poor
			   <input type="radio" name="q5" value="ques 5" />very poor
			   </div>
                  
                   <div>
			   <label>question5dddddddddddddddddddddddddddddddddddd </label>
			   <input type="radio" name="q1" value="ques 1" />very good
			   <input type="radio" name="q2" value="ques 2" />good
			   <input type="radio" name="q3" value="ques 3" />fair
			   <input type="radio" name="q4" value="ques 4" />poor
			   <input type="radio" name="q5" value="ques 5" />very poor
			   </div> 
			    <div>
			   <label>question6</label>
			   dddddddddddddddddddddddddddddddddddd
			   <input type="radio" name="q1" value="ques 1" />very good
			   <input type="radio" name="q2" value="ques 2" />good
			   <input type="radio" name="q3" value="ques 3" />fair
			   <input type="radio" name="q4" value="ques 4" />poor
			   <input type="radio" name="q5" value="ques 5" />very poor
			   </div>   
			    <div>
			   <label>question7</label>
			   dddddddddddddddddddddddddddddddddddd
			   <input type="radio" name="q1" value="ques 1" />very good
			   <input type="radio" name="q2" value="ques 2" />good
			   <input type="radio" name="q3" value="ques 3" />fair
			   <input type="radio" name="q4" value="ques 4" />poor
			   <input type="radio" name="q5" value="ques 5" />very poor
			   </div>  
			    <div>
			   <label>question8</label>
			   dddddddddddddddddddddddddddddddddddd
			   <input type="radio" name="q1" value="ques 1" />very good
			   <input type="radio" name="q2" value="ques 2" />good
			   <input type="radio" name="q3" value="ques 3" />fair
			   <input type="radio" name="q4" value="ques 4" />poor
			   <input type="radio" name="q5" value="ques 5" />very poor
			   </div>
			    <div>
			   <label>question9</label>
			   dddddddddddddddddddddddddddddddddddd
			   <input type="radio" name="q1" value="ques 1" />very good
			   <input type="radio" name="q2" value="ques 2" />good
			   <input type="radio" name="q3" value="ques 3" />fair
			   <input type="radio" name="q4" value="ques 4" />poor
			   <input type="radio" name="q5" value="ques 5" />very poor
			   </div>
			    <div>
			   <label>question 10 </label>
			   ddddddddddddddddddddddddddddddddddd
			   <input type="radio" name="q1" value="ques 1" />very good
			   <input type="radio" name="q2" value="ques 2" />good
			   <input type="radio" name="q3" value="ques 3" />fair
			   <input type="radio" name="q4" value="ques 4" />poor
			   <input type="radio" name="q5" value="ques 5" />very poor
			   </div> 
		       <div><label for="msg">Comment</label>
		         <textarea  style="font-size:15px; size:45px"id="msg" name="msg" placeholder="Write some comment about technical assistant..." class="txtarea" required></textarea>
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

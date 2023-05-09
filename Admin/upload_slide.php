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
			  <section id="content">
                <header class="p-header">
                    <h2 class="p-title">Upload Homepage Slide Pictures</h2>
                    
                </header>
                
                
				<form   action=""   method="post" enctype="multipart/form-data" role="form" class="form-validation-1">
									<?php
				$error = 0;
				if (isset($_POST['submit_form'])){		
						
										$image1 = $_FILES['image1']['tmp_name'];
										$image_name1 = $_FILES['image1']['name'];
										$image_size1 = getimagesize($_FILES['image1']['tmp_name']);
										$image_type1 = $_FILES['image1']['type'];
										$image_error1 = $_FILES['image1']['error'];
										
										$image2 = $_FILES['image2']['tmp_name'];
										$image_name2 = $_FILES['image2']['name'];
										$image_size2 = getimagesize($_FILES['image2']['tmp_name']);
										$image_type2 = $_FILES['image2']['type'];
										$image_error2 = $_FILES['image2']['error'];
										
										$image3 = $_FILES['image3']['tmp_name'];
										$image_name3 = $_FILES['image3']['name'];
										$image_size3 = getimagesize($_FILES['image3']['tmp_name']);
										$image_type3 = $_FILES['image3']['type'];
										$image_error3 = $_FILES['image3']['error'];
										
										$image4 = $_FILES['image4']['tmp_name'];
										$image_name4 = $_FILES['image4']['name'];
										$image_size4 = getimagesize($_FILES['image4']['tmp_name']);
										$image_type4 = $_FILES['image4']['type'];
										$image_error4 = $_FILES['image4']['error'];
			
										if($image_size1==FALSE && $error ==0 || $image_size2==FALSE && $error ==0 ||$image_size3==FALSE && $error ==0 || $image_size4==FALSE && $error ==0 ){
											echo '<div class="alert alert-dismissable alert-danger error" style="margin-top:-20px;">';
											echo '<strong>'.'<center>'."That is not an image!".'</center>'.'<strong>';
											echo '</div>';
											$error = 1;
										}
										else if($image_error1 > 0 && $error == 0 || $image_error2 > 0 && $error == 0 || $image_error3 > 0 && $error == 0 || $image_error4 > 0 && $error == 0 ){
											echo '<div class="alert alert-dismissable alert-danger" style="margin-top:-20px;">';
											echo '<strong>'.'<center>'."There is error in uploading an image".'</center>'.'<strong>';
											echo '</div>';
											$error = 1;
										}
										else if($error == 0){
										$status="On";
									    $sta="Off";
										$querys = mysql_query("SELECT * FROM Slide where status='$status' ");
								        $rows = mysql_fetch_array($querys);
										$id= $rows['id'];
										mysql_query("Update Slide set status='$sta' where id='$id'")or die(mysql_error());
										mysql_query("insert into Slide( slide_1,slide_2, slide_3,slide_4,username,status) values('"."$image_name1"."','"."$image_name2"."','"."$image_name3"."','"."$image_name4"."','$session_id','$status')")or die(mysql_error());
										move_uploaded_file($image1,"../images/".$image_name1);
										move_uploaded_file($image2,"../images/".$image_name2);
										move_uploaded_file($image3,"../images/".$image_name3);
										move_uploaded_file($image4,"../images/".$image_name4);
										echo '<div class="alert alert-dismissable alert-success" style="margin-top:-20px;">';
										echo '<strong>'.'<center>'."You have change Homepage Photo Slide Successfully! ".'</center>'.'<strong>';
										echo '</div>';
										}
										
													
		}						
		?>
									
									
                                        <div class="form-group">
                                             <label>Slide 1</label>
											 <input type="file" class="form-control input-sm validate[required]" placeholder="" name="image1" >
										</div>
										
                                        <div class="form-group">
                                             <label>Slide 2</label>
											 <input type="file" class="form-control input-sm validate[required]" placeholder="" name="image2"  >
										</div>
                                        <div class="form-group">
                                             <label>Slide 3</label>
											 <input type="file" class="form-control input-sm validate[required]" placeholder="" name="image3" >
										</div>
                                        <div class="form-group">
                                             <label>Slide 4</label>
											 <input type="file" class="form-control input-sm validate[required]" placeholder="" name="image4" >
										</div>
                                            
                                        
										
										
										<button class="ladda-button ladda-button-demo btn btn-primary" type="submit" name="submit_form">Change Image</button>
										<button type="reset"class="btn btn-default ">Cancel</button>
										
                                    </form>
            </section>
			   
			   
			   
          </section>
          
          <?php include("footer.php");?>
          
          <!-- Older IE Message -->
          <!--[if lt IE 9]>
               <div class="ie-block">
                   <h1 class="Ops">Ooops!</h1>
                   <p>You are using an outdated version of Internet Explorer, upgrade to any of the following web browser in order to access the maximum functionality of this website. </p>
                   <ul class="browsers">
                       <li>
                           <a href="https://www.google.com/intl/en/chrome/browser/">
                               <img src="img/browsers/chrome.png" alt="">
                               <div>Google Chrome</div>
                           </a>
                       </li>
                       <li>
                           <a href="http://www.mozilla.org/en-US/firefox/new/">
                               <img src="img/browsers/firefox.png" alt="">
                               <div>Mozilla Firefox</div>
                           </a>
                       </li>
                       <li>
                           <a href="http://www.opera.com/computer/windows">
                               <img src="img/browsers/opera.png" alt="">
                               <div>Opera</div>
                           </a>
                       </li>
                       <li>
                           <a href="http://safari.en.softonic.com/">
                               <img src="img/browsers/safari.png" alt="">
                               <div>Safari</div>
                           </a>
                       </li>
                       <li>
                           <a href="http://windows.microsoft.com/en-us/internet-explorer/downloads/ie-10/worldwide-languages">
                               <img src="img/browsers/ie.png" alt="">
                               <div>Internet Explorer(New)</div>
                           </a>
                       </li>
                   </ul>
                   <p>Upgrade your browser for a Safer and Faster web experience. <br/>Thank you for your patience...</p>
               </div>   
          <![endif]-->
          
          <!-- Template skin customize(you can remove this anytime) -->
          
          
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
          
          <script type="text/javascript">
               $(document).ready(function(){
                    $('.template-customize ul li').click(function(){
                         var getElem = $(this).closest('ul').attr('data-elem');
                         var target = (getElem == "body") ? "body, #leftbar, #rightbar" : "#content";
                         
                         var src = $(this).find('img').attr('src');
                         var bg = 'url('+src+')';
                         $(target).css('background', bg)
                    });
                    
                    $('#tc-toggle').click(function(){
                         $('.template-customize').css('height','auto');
                    });
                    
                    $(document).mouseup(function (e) {
                         var container = $(".template-customize");
                         if (container.has(e.target).length === 0) {
                               container.height(0);
                         }
                    });
               });
               
               // Area Chart
               $(function () {
                    $('#areaChart').highcharts({
                         chart: {
                              type: 'area',
                              backgroundColor:'rgba(255, 255, 255, 0.01)',
                              height: 300
                         },
                         title: {
                              text: '',
                         },
                         subtitle: {
                              text: ''
                         },
                         xAxis: {
                              labels: {
                                   
                              }
                         },
                         yAxis: {
                              title: {
                                   text: ''
                              },
                              labels: {
                                   formatter: function() {
                                        return this.value / 1000 +'k';
                                   }
                              },
                              gridLineWidth: 1,
                              gridLineColor: '#eaeaea'
                         },
                         tooltip: {
                              pointFormat: '{series.name} produced <b>{point.y:,.0f}</b><br/>warheads in {point.x}'
                         },
                         plotOptions: {
                              area: {
                                   pointStart: 1,
                                   marker: {
                                        enabled: false,
                                        symbol: 'circle',
                                        radius: 2,
                                        states: {
                                             hover: {
                                                  enabled: true
                                             }
                                        }
                                   }
                              }
                         },
                         series: [{
                              name: 'Bing',
                              data: [0, 1060, 1605, 2471, 3322,
                                   4238, 5221, 6129, 7089, 8339, 9399, 10538, 11643, 13092, 14478,
                                   15915, 17385, 19055, 21205, 23044, 25393, 27935, 30062, 32049,
                                   33952, 35804, 37431, 39197, 45000, 43000, 41000, 39000, 37000,
                                   35000, 33000, 31000, 29000, 27000, 25000, 24000, 23000, 22000,
                                   21000, 20000, 19000, 18000, 18000, 17000, 16000, 15000, 14000,
                                   13000, 12000, 11000, 10000, 9000, 7000, 6000, 4000, 2000, 1000, 0]
                         }, {
                              name: 'Bing',
                              data: [null, null , null , null ,null,
                                   5, 25, 50, 120, 150, 200, 426, 660, 869, 1060, 1605, 2471, 3322,
                                   4238, 5221, 6129, 7089, 8339, 9399, 10538, 11643, 13092, 14478,
                                   15915, 17385, 19055, 21205, 23044, 25393, 27935, 30062, 32049,
                                   33952, 35804, 37431, 39197, 45000, 43000, 41000, 39000, 37000,
                                   35000, 33000, 31000, 29000, 27000, 25000, 24000, 23000, 22000,
                                   21000, 20000, 19000, 18000, 18000, 17000, 16000]
                         }],
                         exporting: {
                              enabled: false    
                         },
                         credits: {
                              enabled: false
                         },
                         colors: [
                              '#FFA206', 
                              '#09AD30', 
                         ],
                         legend: {
                              borderRadius: 0,
                              borderColor: '#e3e3e3',
                              enabled: false
                         }
                    });
               });
     
               //Masonry for widgets
               $(window).load(function(){
                    $('.m-container').masonry({
                         itemSelector: '.masonry'
                    });  
               });
            
          </script>
     </body>


</html>
               
<!DOCTYPE html>
<html>
    

<head>
        <title>clm.amu.edu.et</title>
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
                     
                    <!-- Picture Album -->
                   
                    
                    <!-- Collapse -->
                    <div class="shadowed accordion side-collapse">
                         <h3 class="title">Collapse</h3>
                         <div class="panel-group" id="accordion">
                              <div class="panel">
                                   <div class="panel-heading">
                                        <h3 class="panel-title">
                                             <a class="accordion-toggle active" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Quote of the day</a>
                                        </h3>
                                   </div>
                                   <div id="collapseOne" class="panel-collapse collapse">
                                        <div class="panel-body">
                                             Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. 
                                        </div>
                                   </div>
                              </div>
                              <div class="panel">
                                   <div class="panel-heading">
                                        <h3 class="panel-title">
                                             <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Most popular Quote</a>
                                        </h3>
                                   </div>
                                   <div id="collapseTwo" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                             Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute.
                                        </div>
                                   </div>
                              </div>
                              <div class="panel">
                                   <div class="panel-heading">
                                        <h3 class="panel-title">
                                             <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Quote the most viewed</a>
                                        </h3>
                                   </div>
                                   <div id="collapseThree" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                             Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
                    
                    <!-- Line Chart -->
                    <div class="shadowed states">
                         <h3 class="title">Line Chart</h3>
                         <div class="side-border">
                              <div id="side-line" class="tiny-charts line-chart"></div>
                              <small class="small">Simple Line Chart</small>
                         </div>
                         <div class="side-border">
                              <div id="side-line2" class="tiny-charts line-chart"></div>
                              <small class="small">Simple Line Chart 2</small>
                         </div>
                         <div class="side-border">
                              <div id="side-line3" class="tiny-charts line-chart"></div>
                              <small class="small">Simple Line Chart 3</small>
                         </div>
                    </div>
                    
                </div>

                <span id="rightbar-toggle" class="hidden-lg sidebar-toggle">
                     <i class="icon-angle-left"></i>
                </span>
            </aside>
        
            <!-- Content -->
			
            <section id="content">
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
									
									$error=1;
		$message = "";
		if($_POST["title"]==""){
			$message = $message."Error:<br/> Please Enter Title";
		}else {
			$error = 0;
		}
		if($_POST["post"]==""){
			$message = $message."<br/> Please Enter Post";
		}else {
			$error = 0;
		}
		if($_POST["post_for"]==""){
			$message = $message."<br/> Please Enter Post For";
		}else {
			$error = 0;
		}
$title=$_POST['title'];
$post=$_POST['post'];
$post_for=$_POST['post_for'];
$query = "insert into news (title,post,postBy,status,date) VALUES('$title','$post','$session_id','$post_for','curdate()')";
$result = mysql_query($query)or die(mysql_error());
								if( $result==1){
								echo '<div class="alert alert-dismissable alert-success">';
								echo '<strong>'."News Posted successfully".'</strong>';
								
								echo '</div>';
							
								}
								else{
								echo '<div class="alert alert-dismissable alert-success">';
								echo '<strong>'."Error in sending message.".'</strong>';
								echo '</div>';}
                                }}
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
                          
                            <a href="#" data-toggle="tooltip" data-original-title="Image" class="ttips"><i class="icon-image"></i></a>
                            <a href="#" data-toggle="tooltip" data-original-title="Link" class="ttips"><i class="icon-link"></i></a>
                            <a href="#" data-toggle="tooltip" data-original-title="Quote" class="ttips"><i class="icon-quote-right"></i></a>
                            <a href="#" data-toggle="tooltip" data-original-title="Calendar" class="ttips"><i class="icon-calendar"></i></a>
                            <a href="#" data-toggle="tooltip" data-original-title="File" class="ttips"><i class="icon-copy-3"></i></a>
                        
                        </div>
                        
                        <div class="share-to">
                            <div class="to">
                             <i class="icon-arrow-right"></i> To 
                            </div>
							  <select name="post_for" style="width:50%; height:100%;" class="form-control  validate[required]">
                                <option value="">Select Users...</option>
                                <option>All</option>
								<option>Admin</option>
								<option>Lab manager</option>
								<option>Technical assistant</option>
								<option>Instructor</option>
								<option>student</option>
								<option>External user</option>
                            </select>
							
                            <button  style="margin-left:90%;margin-top:-45px;" type="submit" name="postnews" class="btn btn-primary wall">Post News</button>
							<button  style="margin-left:100%;margin-top:-83px;" type="reset"  class="btn btn-defualt ">Cancel</button>
							
                        </div>
                    </div>
                </div>
				</form>
                
                <hr class="divider" />
                
                <!-- Postings -->
                <article class="post">
                    <div class="media">
                        <a class="pull-left" href="#">
                          <img class="media-object" src="img/profile-pics/1.jpg" alt="">
                        </a>
                        <div class="media-body">
                            <div class="media-header">
                                <span class="poster">
                                    <a href="#">Malinda Hollaway</a>
                                    <span class="postfor">
                                        <i class="icon-double-angle-right"></i> 
                                        All Staffs
                                    </span>
                                </span>
                            </div>
                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                            <p>Suspendisse rutrum in tellus sit amet imperdiet. In et augue dignissim, mattis velit nec, mattis diam. Ut laoreet risus urna, eu blandit urna malesuada dapibus. Duis pellentesque ipsum at faucibus malesuada. Sed nec accumsan est, quis imperdiet ipsum. Donec condimentum elit elit, at tempor enim rutrum vel. Nunc et nisi vitae nisi aliquet luctus vitae quis risus.</p>
                            <div class="media-footer">
                                <span class="post-comment">
                                    <i class="icon-bubbles"></i>
                                    Comment
                                </span>
                                <a href="#" class="post-like liked">
                                    <i class="icon-star-3"></i>
                                    10 Unlike
                                </a>
                                <span class="post-time pull-right">
                                    <i class="icon-clock"></i>
                                    20 June 8.50 pm
                                </span>
                            </div>
                          
                            <!-- Comments -->
                            <div class="comments">
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img src="img/profile-pics/2.jpg" alt="" class="media-object">
                                    </a>
                                    <div class="media-body">
                                        <div class="media-header">
                                            <span class="poster">
                                                <a href="#">David Villa</a>
                                            </span>
                                        </div>
                                        <p>Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                        <span class="post-time">
                                                <i class="icon-clock"></i>
                                                22 June 2.50 pm
                                            </span>
                                            <a href="#" class="post-like">
                                                <i class="icon-star"></i>
                                                15 Likes
                                            </a>
                                            <a href="#" class="post-reply">
                                                <i class="icon-reply"></i>
                                                Reply
                                            </a>
                                    </div>
                                </div>
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img src="img/profile-pics/3.jpg" alt="" class="media-object">
                                    </a>
                                    <div class="media-body">
                                        <div class="media-header">
                                            <span class="poster">
                                                <a href="#">Jason Kingston</a>
                                            </span>
                                        </div>
                                        <p>Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                        <span class="post-time">
                                            <i class="icon-clock"></i>
                                            22 June 1.10 pm
                                        </span>
                                        <a href="#" class="post-like">
                                            <i class="icon-star"></i>
                                            08 Likes
                                        </a>
                                        <a href="#" class="post-reply">
                                            <i class="icon-reply"></i>
                                            Reply
                                        </a>
                                    </div>
                                </div>
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img src="img/profile-pics/4.jpg" alt="" class="media-object">
                                    </a>
                                    <div class="media-body">
                                        <div class="media-header">
                                            <span class="poster">
                                                <a href="#">Jhon Morrison</a>
                                            </span>
                                        </div>
                                        <p>Morbi ut urna velit. Curabitur elit massa, pretium et dolor ut, tincidunt feugiat elit. Nam interdum lectus id arcu pulvinar, sed luctus neque lobortis. Nam non consectetur ante. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam sit amet velit non sapien mattis adipiscing. Vivamus eu ultrices purus.</p>
                                        <span class="post-time">
                                            <i class="icon-clock"></i>
                                            20 June 2.00 am
                                        </span>
                                        <a href="#" class="post-like">
                                            <i class="icon-star"></i>
                                            01 Likes
                                        </a>
                                        <a href="#" class="post-reply">
                                            <i class="icon-reply"></i>
                                            Reply
                                        </a>
                                    </div>
                                </div>
                                <div class="media add-comment col-lg-12">
                                    <textarea class="text-post" placeholder="Write something..."></textarea>
                                    <button class="btn btn-warning btn-xs">Post Comment</button>
                                    <button class="btn btn-xs btn-warning cancel-comment">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                
                <hr class="divider" />
                
                <article class="post">
                    <div class="media">
                        <a class="pull-left" href="#">
                          <img class="media-object" src="img/profile-pics/4.jpg" alt="">
                        </a>
                        <div class="media-body">
                            <div class="media-header">
                                <span class="poster">
                                    <a href="#">Jhon Morrison </a>
                                    <span class="postfor">
                                        <i class="icon-double-angle-right"></i> 
                                        All Staffs
                                    </span>
                                </span>
                            </div>
                            <p>Nunc iaculis quam et augue elementum scelerisque. Ut leo felis, volutpat eget eros vitae, viverra venenatis libero. Pellentesque ac mauris tellus. In faucibus, enim a euismod tristique, tortor quam vestibulum metus, quis egestas massa risus non elit. Integer vestibulum quam eu dapibus sollicitudin. Proin egestas congue nunc a molestie. Etiam in sapien at enim commodo placerat vel in elit. Mauris sit amet pulvinar erat.</p>
                            <div class="media-footer">
                                <span class="post-comment">
                                    <i class="icon-bubbles"></i>
                                    Comment
                                </span>
                                <a href="#" class="post-like liked">
                                    <i class="icon-star-3"></i>
                                    10 Unlike
                                </a>
                                <span class="post-time pull-right">
                                    <i class="icon-clock"></i>
                                    18 June 12.50 pm
                                </span>
                            </div>
                            
                            <div class="comments">
                                <div class="media add-comment">
                                    <textarea class="text-post" placeholder="Write something..."></textarea>
                                    <button class="btn btn-warning btn-xs">Post Comment</button>
                                    <button class="btn btn-xs btn-warning cancel-comment">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                
                <hr class="divider" />
                
                <article class="post">
                    <div class="media">
                        <a class="pull-left" href="#">
                          <img class="media-object" src="img/profile-pics/3.jpg" alt="">
                        </a>
                        <div class="media-body">
                            <div class="media-header">
                                <span class="poster">
                                    <a href="#">Jason Kingston</a>
                                    <span class="postfor">
                                        <i class="icon-double-angle-right"></i> 
                                        All Staffs
                                    </span>
                                </span>
                            </div>
                            <p>Hay guyz... check this out from my new album.</p>
                            <div class="album-post">
                                <a href="img/gallery/1.jpg" data-rel="shadowbox[sample]" class="img-popup" title="Fusce sagittis porta porttitor aliquam tincidunt auctor nibh non convallis">
                                    <img src="img/gallery/thumbs/1.jpg" alt="" />
                                </a>
                                <a href="img/gallery/2.jpg" data-rel="shadowbox[sample]" class="img-popup" title="Sed ultrices orci iaculis augue tincidunt gravida">
                                    <img src="img/gallery/thumbs/2.jpg" alt="" />
                                </a>
                                <a href="img/gallery/3.jpg" data-rel="shadowbox[sample]" class="img-popup" title="Donec ullamcorper malesuada magna mollis pellentesque">
                                    <img src="img/gallery/thumbs/3.jpg" alt="" />
                                </a>
                                <a href="img/gallery/4.jpg" data-rel="shadowbox[sample]" class="img-popup" title="Aliquam tincidunt auctor nibh non convallis">
                                    <img src="img/gallery/thumbs/4.jpg" alt="" />
                                </a>
                                <a href="img/gallery/5.jpg" data-rel="shadowbox[sample]" class="img-popup" title="Quelorem venenatis aliquet enim non venenatis">
                                    <img src="img/gallery/thumbs/5.jpg" alt="" />
                                </a>
                            </div>
                            
                            <div class="media-footer">
                                <span class="post-comment">
                                    <i class="icon-bubbles"></i>
                                    Comment
                                </span>
                                <a href="#" class="post-like liked">
                                    <i class="icon-star-3"></i>
                                    02 Unlike
                                </a>
                                <span class="post-time pull-right">
                                    <i class="icon-clock"></i>
                                    16 June 4.27 am
                                </span>
                            </div>
                            
                            <div class="comments">
                                <div class="media add-comment">
                                    <textarea class="text-post" placeholder="Write something..."></textarea>
                                    <button class="btn btn-warning btn-xs">Post Comment</button>
                                    <button class="btn btn-xs btn-warning cancel-comment">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                
                <hr class="divider" />
                
                <article class="post">
                    <div class="media">
                        <a class="pull-left" href="#">
                          <img class="media-object" src="img/profile-pics/2.jpg" alt="">
                        </a>
                        <div class="media-body">
                            <div class="media-header">
                                <span class="poster">
                                    <a href="#">David Villa</a>
                                    <span class="postfor">
                                        <i class="icon-double-angle-right"></i> 
                                        Jason Kingston, Jhon Morrison and Me
                                    </span>
                                </span>
                            </div>
                            <p>Maecenas sed mi sit amet lorem sollicitudin cursus at ac nisl. Vestibulum a convallis metus. Quisque lectus nulla, bibendum a sem et, placerat dignissim enim.</p> 
                        
                            <div class="media-footer">
                                <span class="post-comment">
                                    <i class="icon-bubbles"></i>
                                    Comment
                                </span>
                                <a href="#" class="post-like liked">
                                    <i class="icon-star-3"></i>
                                    34 Unlike
                                </a>
                                <span class="post-time pull-right">
                                    <i class="icon-clock"></i>
                                    16 June 3.50 am
                                </span>
                            </div>
                            
                            <!-- Comments -->
                            <div class="comments">
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img src="img/profile-pics/3.jpg" alt="" class="media-object">
                                    </a>
                                    <div class="media-body">
                                        <div class="media-header">
                                            <span class="poster">
                                                <a href="#">Jason Kingston</a>
                                            </span>
                                        </div>
                                        <p>Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                        <span class="post-time">
                                            <i class="icon-clock"></i>
                                            17 June 1.00 pm
                                        </span>
                                        <a href="#" class="post-like">
                                            <i class="icon-star"></i>
                                            03 Likes
                                        </a>
                                        <a href="#" class="post-reply">
                                            <i class="icon-reply"></i>
                                            Reply
                                        </a>
                                    </div>
                                </div>
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img src="img/profile-pics/4.jpg" alt="" class="media-object">
                                    </a>
                                    <div class="media-body">
                                        <div class="media-header">
                                            <span class="poster">
                                                <a href="#">Jhon Morrison</a>
                                            </span>
                                        </div>
                                        <p>Morbi ut urna velit. Curabitur elit massa, pretium et dolor ut, tincidunt feugiat elit. Nam interdum lectus id arcu pulvinar, sed luctus neque lobortis. Nam non consectetur ante. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam sit amet velit non sapien mattis adipiscing. Vivamus eu ultrices purus.</p>
                                        <span class="post-time">
                                            <i class="icon-clock"></i>
                                            17 June 2.02 pm
                                        </span>
                                        <a href="#" class="post-like">
                                            <i class="icon-star"></i>
                                            19 Likes
                                        </a>
                                        <a href="#" class="post-reply">
                                            <i class="icon-reply"></i>
                                            Reply
                                        </a>
                                    </div>
                                </div>
                                <div class="media add-comment col-lg-12">
                                    <textarea class="text-post" placeholder="Write something..."></textarea>
                                    <button class="btn btn-warning btn-xs">Post Comment</button>
                                    <button class="btn btn-xs btn-warning cancel-comment">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                
                <hr class="divider" />
                
                <article class="post">
                    <div class="media">
                        <a class="pull-left" href="#">
                          <img class="media-object" src="img/profile-pics/1.jpg" alt="">
                        </a>
                        <div class="media-body">
                            <div class="media-header">
                                <span class="poster">
                                    <a href="#">Malinda Hollaway </a>
                                    <span class="postfor">
                                        <i class="icon-double-angle-right"></i> 
                                        All Staffs
                                    </span>
                                </span>
                            </div>
                            <p>Malinda Hollaway shared a picture from her album with All Staffs</p>
                            <a href="img/gallery/6.jpg" data-rel="shadowbox" class="img-popup" title="Lovely evening in Noreway">
                                <img class="image-post" src="img/gallery/6.jpg" alt="" />
                            </a>
                            
                            <div class="media-footer">
                                <span class="post-comment">
                                    <i class="icon-bubbles"></i>
                                    Comment
                                </span>
                                <a href="#" class="post-like liked">
                                    <i class="icon-star-3"></i>
                                    56 Unlike
                                </a>
                                <span class="post-time pull-right">
                                    <i class="icon-clock"></i>
                                    14 June 3.44 am
                                </span>
                            </div>
                            
                            <div class="comments">
                                <div class="media add-comment">
                                    <textarea class="text-post" placeholder="Write something..."></textarea>
                                    <button class="btn btn-warning btn-xs">Post Comment</button>
                                    <button class="btn btn-xs btn-warning cancel-comment">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                
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
        
<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
<?php include('dbcon.php'); ?>
<?php
	$id=$_GET['ID'];
	?>
    <link href="css/timeline.css" rel="stylesheet">
	
    <div class="container">
		<div class="margin-top">
			<div class="row">
					<?php include('head.php'); ?>
				<div class="span2">
					<?php include('sidebar.php'); ?>
				</div>
				<div class="span10" style="margin-top:-15px">
			    <div class="panel panel-default" style="margin-left:85px; ">
                        <center><div class="panel-heading">
                           <h3> <i class="fa fa-clock-o fa-fw"></i> Latest News</h3>
                        </div></center>
                        <!-- /.panel-heading -->
                        <div class="panel-body" style="margin-top:-15px">
                            <ul class="timeline">
<?php $id=$_GET['ID'];?>
							 
								<?php
                                  $querys = mysql_query("SELECT * FROM news WHERE post_id='$id' "); 
								  $rows=mysql_fetch_array($querys);
								   $username=$rows["username"];
                                     $que=mysql_query("select * from user where username='$username'")or die(mysql_error());
					                  $r=mysql_fetch_array($que);
						                $pic=$r["p_picture"];
										$string=$rows['post'];
										 
									   ?>
							
                                <li>
                                    <div class="timeline-badge"><i class="fa fa-check"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
											<h5 class="timeline-title"style="margin-left:60px;color:#011c25;"><?php echo $r['f_name']." ".$r['l_name']; ?></h5>
                                           <strong><p class="timeline-title"style="margin-left:80px;margin:top:20px;color:#10b9f0;"> <?php echo $rows['title'];?> </p></strong>
                                            <p style="float:right;margin-top:-75px; color:red;"><small class="text-muted"><i class="icon-clock"></i>Posted on <?php echo $rows['date']; ?></small>
                                            </p>
                                        </div>
										<div style="float:left; "><img class="img-circle" style="width:50px;height:50px; margin-top:-110px;"src="images/<?php echo $pic;?>" alt="User profile picture">
                                           </div>
                                        <div class="timeline-body" style="float:right; margin-left:75px; margin-top:-30px;">
										    <p > <?php echo $string;?></p>
                                        </div>
                                    </div>
                                </li >
								<div class="timeline-badge" style="margin-top:20px;">
								<p style="color:white;"> s</p>
                                    </div>
								
								
								</ul>
								</div>
				
				
			</div>
				</div>
			

			
			</div>
		</div>
    </div>
<?php include('footer.php') ?>
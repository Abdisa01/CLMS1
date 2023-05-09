   <?php include("dbcon.php");?>
   <?php include('session.php');?>
   <header id="header" class="clearfix">
            <!-- Logo -->
            <a href="index.php" class="logo shadowed">
                   Administrator Panel
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
				else{ echo "<img width='40' height='40' ' class='img-rectangle profile_img' src='../images/".$rows['p_picture']." ' alt='profile pic'>";
					
				}
				}
                  
				 ?>
                </a>
                <ul class="dropdown-menu pull-right text-right">
                    <li><a href="change_profile.php" class="icon-profile" aria-hidden="true">&nbsp;Update Profile Picture</a></li>
					 <li><a    href="update_profile.php"  class="icon-wrench" >&nbsp;Change Password</a></li>
                    
					
					
					
					 
					
					
                    <li class="divider"></li>
                    <li><a href="logout.php" class="icon-exit" aria-hidden="true">&nbsp;Log Out ( <?php  echo $rows['f_name']." ".$rows['l_name'];?>)</a></li>
                </ul>
            </div>
            
            <ul class="nav nav-pills pull-right shadowed" id="top-menu">
                <li><a href="index.php" class="icon-home">&nbsp;&nbsp;Home</a></li>
               
				<?php
			 
			  $query=mysql_query("Select * from user where username='$session_id'") or die(mysql_error());
			  $rows = mysql_fetch_assoc($query);
			  
			  ?>
                <li><a href="#" class="icon-user"><?php echo $rows['f_name']." ".$rows['l_name'];?></a></li>
            </ul>
            
            <form class="form-inline top-search shadowed">
                <input type="text" class="form-control" placeholder="Search for anything...">
                <button type="submit"><i class="icon-search"></i></button>
            </form>
        </header>
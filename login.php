<?php
								include('dbcon.php');
								if (isset($_POST['login'])){
								session_start();
								$username = $_POST['username'];
								$password = $_POST['password'];
								$ecode = base64_encode($password);
								$query = "SELECT * FROM user WHERE username='$username' AND password='$password' ";
								$result = mysql_query($query)or die(mysql_error());
								$num_row = mysql_num_rows($result);
								$row=mysql_fetch_array($result);
								$row_id=$row['username'];
								 $user_type =$row["usertype"];
									$row=mysql_fetch_array($result);
									if( $num_row > 0 ) {
									if($user_type=="Admin"){
									header('location:Admin/index.php');
									$_SESSION['id']=$row_id;
									}
									else if($user_type=="Labmanger"){
									header('location:labmanager/index.php');
									$_SESSION['id']=$row_id;
									}
									else if($user_type=="Technical Assistant"){
									header('location:TA/index.php');
									$_SESSION['id']=$row_id;
									}
									else if($user_type=="Instructor"){
									header('location:instructor/index.php');
									$_SESSION['id']=$row_id;
									}
									else if($user_type=="student"){
									header('location:student/index.php');
									$_SESSION['id']=$row_id;
									}	
									else if($user_type=="external user"){
									header('location:EU/index.php');
									$_SESSION['id']=$row_id;
									}		
									}
									else{ 
									header('location:access_denied.php');
								
								
								}}
								?>
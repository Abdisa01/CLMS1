		  
<?php
$error=0;
	if(isset($_POST['register'])){
								include('dbcon.php');
								if (isset($_POST['register'])){
									
									
									$image = $_FILES['image']['tmp_name'];
										$image = $_FILES['image']['tmp_name'];
										$image_name = $_FILES['image']['name'];
										$image_size = getimagesize($_FILES['image']['tmp_name']);
										$image_type = $_FILES['image']['type'];
										$image_error = $_FILES['image']['error'];
										if($image_size==FALSE && $error ==0 ){
											echo '<div class="alert alert-dismissable alert-danger error" >';
												echo '<strong>'.'<center>'."That is not an image!".'</center>'.'<strong>';
											echo '</div>';
										
											$error = 1;
												}
											else if($image_error > 0 && $error == 0){
											echo '<div class="alert alert-dismissable alert-danger">';
												echo '<strong>'.'<center>'."There is error in uploading an image".'</center>'.'<strong>';
											echo '</div>';
											$error = 1;
										}
										else if($error == 0){
											include("dbcon.php");
											move_uploaded_file($image,"image/".$image_name);
											
									}	
									
								
								$bn = $_POST['bn'];
								$bl = $_POST['bl'];
								$email_id = $_POST['email_id'];
								$phone = $_POST['phone'];
								$postal = $_POST["postal"];
								$fax = $_POST["fax"];	
								
								$query = "insert into branch (bn,bl,email_id,phone,postal,fax,image) values('$bn','$bl','$email_id','$phone','$postal','$fax','$image_name')";
								$result = mysql_query($query)or die(mysql_error());
								if( $result==1){
								echo '<div class="alert alert-dismissable alert-success">';
								//echo '<strong>'."Branch Registered successfully".'</strong>';
								
								echo '</div>';
								echo "<script>
								alert('Branch Registered successfully');
								</script>";
								}
								else{
								echo '<div class="alert alert-dismissable alert-success">';
								echo '<strong>'."Error in sending message.".'</strong>';
								echo '</div>';}
                                }}
								?>

		  
		  
								<?php
								include('dbcon.php');
								if (isset($_POST['submit'])){
								$e_mail = $_POST['email'];
								$subject="Arba Minch university Administration";	
								$query = "SELECT * FROM user WHERE e_mail='$e_mail' ";
								$result = mysql_query($query)or die(mysql_error());
								$num_row = mysql_num_rows($result);
									$row=mysql_fetch_array($result);
									$fname =$row["f_name"];
									$mname =$row["m_name"];
									$pass =$row["password"];
									if( $num_row > 0 ) {
									
										$message = "Dear $fname $mname  your recovery password is $pass. You can login now ...!";

											 // Send mail by PHP Mail Function
											mail($e_mail, $subject, $message, "From: "."clms@amu.com");
											echo '<div class="alert alert-dismissable alert-success"><strong>';
											echo "E-mail Notification is sent to ".$fname." ".$mname." Successfully and also information updated!<br>";
											echo '</strong></div>';
									}
									else{ 
								echo("The e-mail address you entered is not recognized");
								}}
								?>
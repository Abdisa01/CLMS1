<head>
  <link rel="stylesheet" type="text/css" media="all" href="css/contactstyle.css">
  <link href="css/timeline.css" rel="stylesheet">
</head>

<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">
					<?php include('head.php'); ?>
				<div class="span2">
					<?php include('sidebar.php'); ?>
				</div>
				<div class="span10" style="margin-top:-15px">
				
						<div class="panel panel-default" style="margin-left:85px; ">
                        <!-- /.panel-heading -->
                        <div class="panel-body" style="margin-top:-15px">
                            <ul class="timeline">
                                <li>
                                    <div class="timeline-badge"><i class="fa fa-check"></i>
                                    </div>
                                    <div class="timeline-panel">
                                      
									  	<form id="contact" name="contact" action="#" method="post" >
										 <h4> <i style="margin-left:170px;;" class="fa fa-clock-o fa-fw"></i> Send us a Message </h4>
	<div style="width:420px; margin-left:-100px;">
	<?php
	if(isset($_POST['send'])){
								include('dbcon.php');
								if (isset($_POST['send'])){
								$name = $_POST['name'];
								$e_mail = $_POST['email'];
								$text = $_POST['msg'];	
								$query = "insert into feedback (name,email,content) values('$name','$e_mail','$text')";
								$result = mysql_query($query)or die(mysql_error());
								if( $result==1){
								echo '<div class="alert alert-dismissable alert-success" style="width:770px; margin-left:-40px; height:20px;" >';
								echo '<center><strong>'." Your message has been successfully sent.".'</strong></center>';
								echo '</div>';
								}
								else{
								echo '<div class="alert alert-dismissable alert-success">';
								echo '<strong>'."Error in sending message.".'</strong>';
								echo '</div>';}
                                }}
								?>
		<label for="name">Name</label>
		<input style="height:35px;width:500px" type="text" id="name" placeholder="Enter your name" name="name" class="txt" required>
		<br>
		<label for="email">E-mail</label>
		<input style="height:35px;width:500px" type="email" id="email" placeholder="Enter your e-mail adress" name="email" class="txt" required>
		<br>
		<label for="msg">Message</label>
		<textarea  style="font-size:15px;"id="msg" name="msg" placeholder="Write something..." class="txtarea" required></textarea>
		<br>
		<button name="send" style="float:right;" id="send">Send Message</button></div>
		
	</form>
									  
                                    </div>
                                </li>
								</ul>
								</div>
				
				
			</div>
				
				
				
				
				
				
				
				
				


<!-- basic fancybox setup -->
<script type="text/javascript">
	function validateEmail(email) { 
		var reg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		return reg.test(email);
	}

	$(document).ready(function() {
		$(".modalbox").fancybox();
		$("#contact").submit(function() { return false; });

		
		$("#send").on("click", function(){
			var emailval  = $("#email").val();
			var msgval    = $("#msg").val();
			var msglen    = msgval.length;
			var mailvalid = validateEmail(emailval);
			
			if(mailvalid == false) {
				$("#email").addClass("error");
			}
			else if(mailvalid == true){
				$("#email").removeClass("error");
			}
			
			if(msglen < 4) {
				$("#msg").addClass("error");
			}
			else if(msglen >= 4){
				$("#msg").removeClass("error");
			}
			
			if(mailvalid == true && msglen >= 4) {
				// if both validate we attempt to send the e-mail
				// first we hide the submit btn so the user doesnt click twice
				$("#send").replaceWith("<em>sending...</em>");
				
				$.ajax({
					type: 'POST',
					url: 'sendmessage.php',
					data: $("#contact").serialize(),
					success: function(data) {
						if(data == "true") {
							$("#contact").fadeOut("fast", function(){
								$(this).before("<p><strong>Success! Your feedback has been sent, thanks :)</strong></p>");
								setTimeout("$.fancybox.close()", 1000);
							});
						}
					}
				});
			}
		});
	});
</script>

				</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>

	
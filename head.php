<style>
.alert-success{
border-color:#008d4c}
</style>

	<div class="span12">
				<div class="header">
				<div class="pull-left">
				<img src="images/3.jpg" width="1279" height="218" class="stilogo">				</div>
				</div>
					<div  class="alert alert-info"><Strong style="font-family:times new roman;font-size:17px;"> Heads Up!</strong>&nbsp; &nbsp;&nbsp;<strong>Welcome to AMiT Computtor Laboratory Management System </Strong> 
							<div class="pull-right">
								<i class="icon-calendar icon-large"></i>
								<?php
								$Today = date('y:m:d');
								$new = date('l, F d, Y', strtotime($Today));
								echo $new;
								?>
							</div>
					</div>
				</div>
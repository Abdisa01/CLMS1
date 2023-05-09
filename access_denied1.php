<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">
					<?php include('head.php'); ?>
				<div class="span2">
					<?php include('sidebar.php'); ?>
				</div>
				<div class="span10" style="margin-left:30px;">
				<div style="margin-left:100px;" class="alert alert-danger">Please Check your email address.</div>
					<form class="form-horizontal" method="post" action="log.php" >
						
				<div class="control-group"style="margin-left:30px;">
					<label class="control-label" for="inputEmail">Email</label>
					<div class="controls">
					<input type="text" id="inputEmail" type="email" name="username" placeholder="Email" required>
					</div>
				</div>
				
				<div class="control-group">
					<div class="controls">
					<button type="submit" name="reset" class="btn btn-success"><i class="icon-signin icon-large"></i>&nbsp;Submit</button>
				</div>
				</div>
			</form>
				</div>
			</div>
		</div>
    </div>
<?php include('footer.php') ?>

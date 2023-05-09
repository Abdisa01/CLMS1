			<div class="life-side-bar" style="width:280px; ">
			<div class="hero-container" style="width:280px;">                  
					<ul class="nav nav-tabs nav-stacked">
						<li class="active">
							<a href="index.php" class="yellow_link"><i class="icon-home icon-large icon-large"></i>&nbsp;Home</a>
						</li>
						<li class="">
								<a rel="tooltip"  data-placement="bottom"  id="login" href="#student"  data-toggle="modal"><i class="icon-signin icon-large"></i>&nbsp;Login</a> 
								</li>
							</ul>
			</div>	
			<br><br>
							<ul class="nav nav-tabs nav-stacked">
						<li class="">
						<a   href="#"><i class="icon-envelope icon-large"></i>&nbsp;Contact US</a>
						</li>
					</ul>
<strong>Address</strong>
<p>Arba Minch University</p>
<p>P.O.Box:- 21 Arba Minch, Ethiopia</p>
<p>Tel.:- +251-936512445</p>
<p>Fax:- +251255530052/325 </p>
<p>Website:
<p><a href="http://http://www.amu.edu.et/index.php?option=com_content&view=article&id=10&Itemid=15">http://www.amu.edu.et</a></p>
	
	</div>
    	<div id="student" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-header"><div class="alert alert-info">Please Enter Required Details Below.</div></div>
		<div class="modal-body">
			<form class="form-horizontal" method="post" action="login.php">
				<div class="control-group">
					<label class="control-label" for="inputEmail">ID Number</label>
					<div class="controls">
					<input type="text" id="inputEmail" name="student_no" placeholder="ID Number" required>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="inputPassword">Password</label>
					<div class="controls">
					<input type="password" id="inputPassword" name="password" placeholder="Password" required>
				</div>
				</div>
				<div class="control-group">
					<div class="controls">
					<button type="submit" name="login" class="btn btn-success"><i class="icon-signin icon-large"></i>&nbsp;Login</button>
				</div>
				</div>
			</form>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
		</div>
    </div>
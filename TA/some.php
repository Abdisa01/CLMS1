<section  style="width:84.5%;" id="content" class="container">
                <header class="p-header">
                    <h2 class="p-title">View Branch List Detalis</h2>
                </header>
                
                <div class="table-responsive">
                    <table class="table table-bordered table-striped" id="example">
                        <thead>
                             <tr>
                       <th>Branch Name</th>
                        <th>Branch Location</th>
						<th>Email</th>
                        <th>Phone No</th>
                        <th>Postal Code</th>
                        <th>Fax No</th>
						<th>Action</th>
						
						
                      </tr>
                        </thead>
                        <tbody>
                             <?php include("dbcon.php");?>
					<?php $user_query=mysql_query("select * from branch")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
									$id=$row['noe']; ?>
                       <tr class="del<?php echo $id ?>">
                        <td><?php echo $row['bn']; ?></td>
						 <td><?php echo $row['bl']; ?></td>
						  <td><?php echo $row['email_id']; ?></td>
						  <td><?php echo $row['phone']; ?></td>
						   <td><?php echo $row['postal']; ?></td>
						    <td ><?php echo $row['fax']; ?></td>
							<td class="center">
							  <?php 
								   echo "<a rel='facebox' href='edit_branch.php?id=".$row['noe']." ' class='btn btn-primary '>Update</a>";?>	
									</td></tr><?php }?>
									
							  
                      
                     
					 
                        </tbody>
                    </table>
                </div>
               
            </section>
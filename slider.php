

        <div id="slider" class="nivoSlider">
		<?php
		$status="On";
		$query = "SELECT * FROM Slide where status='$status'";
		$result = mysql_query($query)or die(mysql_error());
		$row=mysql_fetch_array($result);
		$pic1=$row['slide_1'];
		$pic2=$row['slide_2'];
		$pic3=$row['slide_3'];
		$pic4=$row['slide_4'];
		?>
                        
                   
                    </div>
		
    	<div style="overflow:hidden; width:px;height:50%; margin-left:60px;; padding:0 20px;"> 
                <div class="pix_diapo">

                    <div data-thumb="images/<?php echo $pic1;?>">
                       <img  src="images/<?php echo $pic1;?>" data-thumb="toystory.jpg" alt="" />  
                      
                    </div>
                    
                    <div data-thumb="images/<?php echo $pic2;?>">
                       <img  src="images/<?php echo $pic2;?>" data-thumb="toystory.jpg" alt="" /> 
                    
                    </div>
                    
                    <div data-thumb="images/<?php echo $pic3;?>" data-time="7000">
                        <img   src="images/<?php echo $pic3;?>" data-thumb="toystory.jpg" alt="" />
                    </div>              
                <div data-thumb="images/<?php echo $pic4;?>" data-time="7000">
                        <img   src="images/<?php echo $pic4;?>" data-thumb="toystory.jpg" alt="" />
                    </div>
                    
				
		
		             
               
                    
      
                    
               </div><!-- #pix_diapo -->
                
        </div>
    
    
    </section> 
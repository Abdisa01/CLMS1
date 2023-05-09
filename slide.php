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
                        <img src="Uploads/<?php echo $pic1;?>" data-thumb="1.jpg" alt="" />
                        <img src="Uploads/<?php echo $pic2;?>" data-thumb="toystory.jpg" alt="" />
                        <img src="Uploads/<?php echo $pic3;?>" data-thumb="wineries.jpg" alt="" t />
                        <img src="Uploads/<?php echo $pic4;?>"  alt="" data-transition="slideInLeft" />
                   
                    </div>

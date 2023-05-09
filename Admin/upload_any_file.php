
							<?php
	if(isset($_POST['import'])){
								include('dbcon.php');
								if (isset($_POST['import'])){
								
	$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
		$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
		$image_name = addslashes($_FILES['image']['name']);
		$image_size = getimagesize($_FILES['image']['tmp_name']);
		$type = explode('.', $image_name);
		$type = end($type);
		if($type != 'doc' && $type != 'pdf' && $type != 'ppt' && $type != 'docx' && $type != 'pptx' && $type != 'txt' && $type != 'csv'  ){
			$message = "Invalid File Format Not Supported !";
			echo '<div class="alert alert-dismissable alert-danger">';
			echo '<button type="button" class="close" data-dismiss="alert">X</button>';
			echo '<strong>'.$message.'</strong>';
			echo '</div>';
			} 
$query=" insert into employee_information (image)value('$image_name')";	
$result = mysql_query($query)or die(mysql_error());
		if( $result==1){
			move_uploaded_file($_FILES["image"]["tmp_name"], "../image" . $_FILES["image"]["name"]);
			
								
								echo '<div class="alert alert-dismissable alert-success">';
								echo '<strong>'."Imported successfully! .".'</strong>';
		echo '</div>';}
								else{
									echo '<div class="alert alert-dismissable alert-success">';
								echo '<strong>'."not imported .".'</strong>';
								echo '</div>';
								}
								}
	}
	
	
?>
<?php
	include('session.php');
	
	$fileInfo = PATHINFO($_FILES["image"]["name"]);
	
	if (empty($_FILES["image"]["name"])){
		$location=$srow['uimage'];
		?>
			<script>
				window.alert('Uploaded photo is empty!');
				window.location.href = "index.php";;
			</script>
		<?php
	}
	else{
		if ($fileInfo['extension'] == "jpg" OR $fileInfo['extension'] == "png" OR $fileInfo['extension'] == "JPG" OR $fileInfo['extension'] == "PNG") {
			$newFilename = $fileInfo['filename'] . "_". date("dmYhms"). "." . $fileInfo['extension'];
			move_uploaded_file($_FILES["image"]["tmp_name"], "../upload/" . $newFilename);
			$location = "upload/" . $newFilename;
			
			mysqli_query($con,"update user set uimage='$location' where uid='".$_SESSION['uid']."'");
	
			?>
				<script>
					window.alert('Photo updated successfully!');
					window.history.back();
				</script>
			<?php
		}
		else{
			?>
				<script>
					window.alert('Photo not updated. Please upload JPG or PNG files only!');
					window.history.back();
				</script>
			<?php
		}
	}
	
	

?>
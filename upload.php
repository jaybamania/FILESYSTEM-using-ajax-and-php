<?php
	if($_FILES["upload_file"]["name"] != ''){
		$data =explode(".",$_FILES["upload_file"]["name"]);
		$extension =$data[1];
		$allowed_extension = array("jpg", "png", "gif","JPG");
		if(in_array($extension, $allowed_extension)){
			$new_file_name = rand().'.'.$extension;
			echo $path = $_POST["hidden_folder_name"].'/'.$new_file_name;
			if(move_uploaded_file($_FILES["upload_file"]["tmp_name"], $path)){
				echo 'Image Upload';
			}else{
				echo 'There is some error';
			}

		}else{
			echo 'Invalid Image File';
		}

	}else{
		echo "Select an Image";
	}
?>
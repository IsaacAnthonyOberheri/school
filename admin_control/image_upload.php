<?php
require 'dbConfig.php';
$identifier = $_POST['identifier'];


$filesize=$_FILES["image_x"]['size'];
$filename = $_FILES["image_x"]["name"];
$tmpname = $_FILES["image_x"]["tmp_name"];

		$target_dir= "passport/";
		$target_file = $target_dir.basename($filename);
		
		$filetype=pathinfo($target_file,PATHINFO_EXTENSION);
	if ($filesize > 400000){
		$eupload = "your file is too large";
        echo $eupload;
	}

	// elseif ($filetype != 'jpg' && $filetype != 'jpeg' && $filetype != 'PNG' && $filetype != 'png' && $filetype != 'gif'  && $filetype != 'jfif' && $filetype != 'JPG'){
	//    $eupload = "file type not accepted";
		
	// }

   if (move_uploaded_file($tmpname, $target_file)){
			$eupload = "update sucessful";
		$upload = "UPDATE student_record SET passport_name = '$filename' WHERE id = '$identifier' ";
		mysqli_query($con, $upload);
			
			
			
		}









?>
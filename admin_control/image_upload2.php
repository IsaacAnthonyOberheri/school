<?php
require 'dbConfig.php';
$identifier = $_POST['identifier'];

		$select = "SELECT * FROM student_record WHERE id = '$identifier' ";
		$queried = mysqli_query($con, $select);
		
		$fetch_value = mysqli_fetch_assoc($queried);
		
			$new_array['list'] = [

				'passport_name' => $fetch_value['passport_name']


				    
			];



			$json_encoded_value = json_encode($new_array);
	
		echo $json_encoded_value;


?>
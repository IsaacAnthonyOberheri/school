<?php
require 'dbConfig.php';

$all_names = $_POST['full_names'];
$split_names = explode(" ", $all_names);

$last_name = $split_names[0];
$first_name = $split_names[1];
$middle_name = $split_names[2];

$all_names2 = $last_name.' '.$middle_name.' '.$first_name;

$all_names3 = $middle_name.' '.$first_name.' '.$last_name;


$all_names4 = $middle_name.' '.$last_name.' '.$first_name;


$all_names5 = $first_name.' '.$middle_name.' '.$last_name;



$all_names6 = $first_name.' '.$last_name.' '.$middle_name;




$registration_date = date("Y-m-d");

$sex = $_POST['sex'];
$age = $_POST['age'];
$religion = $_POST['religion'];
$d_o_b = $_POST['d_o_b']; 
$p_o_b = $_POST['p_o_b'];   
$l_g_a = $_POST['l_g_a']; 
$s_o_o = $_POST['s_o_o']; 
$recent_schools = $_POST['recent_schools']; 
$current_class= $_POST['current_class']; 
$class_arm = $_POST['class_arm']; 
$health_challenges = $_POST['health_challenges']; 
$mothers_name = $_POST['mothers_name']; 
$address = $_POST['residential_address'];
$phone_number = $_POST['phone_number']; 
$secondary_guardian = $_POST['secondary_guardian'];
$guardian_address = $_POST['guardians_address']; 
$guardian_phone = $_POST['guardians_phone'];



$filesize=$_FILES["file"]['size'];
$filename = $_FILES["file"]["name"];
$tmpname = $_FILES["file"]["tmp_name"];

		$target_dir= "passport/";
		$target_file = $target_dir.basename($filename);
		
		$filetype=pathinfo($target_file,PATHINFO_EXTENSION);
	if ($filesize > 40000000){
		$eupload = "your file is too large";
        echo $eupload;
	}

	// elseif ($filetype != 'jpg' && $filetype != 'jpeg' && $filetype != 'PNG' && $filetype != 'png' && $filetype != 'gif'  && $filetype != 'jfif' && $filetype != 'JPG'){
	//    $eupload = "file type not accepted";
		
	// }

	elseif (move_uploaded_file($tmpname, $target_file)){
			$eupload = "update sucessful";
		$upload = "INSERT INTO student_record(id, all_names, all_names2, all_names3, all_names4, all_names5, all_names6, first_name, middle_name, last_name, sex, age, religion, date_of_birth,
        place_of_birth, l_g_a, state_of_origin, recent_schools_attended, current_class, class_arm, passport_name, health_challenges, 
        mothers_name, residential_address, phone_number, guardians_name, guardians_address, guardians_phone_number, registration_date )"
        ."VALUES('', '$all_names', '$all_names2', '$all_names3', '$all_names4', '$all_names5', '$all_names6', '$first_name', '$middle_name', '$last_name', '$sex', '$age', '$religion', '$d_o_b', 
        '$p_o_b', '$l_g_a', '$s_o_o', '$recent_schools', '$current_class', '$class_arm', '$filename', '$health_challenges', 
        '$mothers_name', '$address', '$phone_number', '$secondary_guardian', '$guardian_address', '$guardian_phone', '$registration_date' )";


		mysqli_query($con, $upload);

        echo 'upload successful';

     


    }

 



















?>



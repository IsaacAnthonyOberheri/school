<?php
session_start();
require 'dbConfig.php';

$main_value = trim($_POST['main_value']);

$table_value = trim($_POST['table_value']);



$identifier = trim($_POST['identifier']);

// $update = "UPDATE registered_user SET first_name = '$first_name' && last_name = '$last_name' ";


$update = "UPDATE student_record SET $table_value = '$main_value' WHERE id = '$identifier' ";

$update = mysqli_query($con, $update);

if($update){
    echo 'updated';
}

else{
    echo 'something went wrong';
}




?>
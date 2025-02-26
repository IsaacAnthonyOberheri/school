<?php

session_start();
require 'dbConfig.php';


//$search_input =trim('caix_4re22ixs');


 $search_input = trim($_POST['searched']);

//  $search_input = 'micheal';

$select = "SELECT * FROM student_record WHERE first_name LIKE '%$search_input%'|| last_name LIKE '%$search_input%' || middle_name LIKE '%$search_input%' || all_names LIKE '%$search_input%'
|| all_names2 LIKE '%$search_input%' || all_names3 LIKE '%$search_input%' || all_names4 LIKE '%$search_input%' || all_names5 LIKE '%$search_input%' 
|| all_names6 LIKE '%$search_input%'";
$queried = mysqli_query($con, $select);

if(mysqli_num_rows($queried) > 0) {

    while($fetch_value = mysqli_fetch_assoc($queried)){

        echo "<div id= $fetch_value[id] class=f_names onclick=v_name()> $fetch_value[all_names] in  $fetch_value[current_class] </div>";
        
        
        
        
        }
        

}

else{
    echo "";
}














    // $new_array['list'] = [
    //     'id' => $fetch_value['id'],
    //     'full_names' => $fetch_value['full_names'],
    //     'sex' => $fetch_value['sex'],
    //     'religion' => $fetch_value['religion'],
    //     'date_of_birth' => $fetch_value['date_of_birth'],
    //     'place_of_birth' => $fetch_value['place_of_birth'],
    //     'l_g_a' => $fetch_value['l_g_a'],
    //     'state_of_origin' => $fetch_value['state_of_origin'],
    //     'recent_schools_attended' => $fetch_value['recent_schools_attended'],
    
    
    //     'current_class' => $fetch_value['current_class'],
    //     'class_arm' => $fetch_value['class_arm'],
    //     'passport_name' => $fetch_value['passport_name'],
    //     'health_challenges' => $fetch_value['health_challenges'],
    //     'mothers_name' => $fetch_value['mothers_name'],
    //     'residential_address' => $fetch_value['residential_address'],
    
    //     'phone_number' => $fetch_value['phone_number'],
    //     'guardians_name' => $fetch_value['guardians_name'],
    //     'guardians_address' => $fetch_value['guardians_address'],
    //     'guardians_phone_number' => $fetch_value['guardians_phone_number']
    
    
    
        
        
    
    // ];



        // $json_encoded_value = json_encode($new_array);

    // echo $json_encoded_value;


?>
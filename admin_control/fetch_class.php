<?php

session_start();
require 'dbConfig.php';


//$search_input =trim('caix_4re22ixs');


 $current_class = trim($_POST['current_class']);

 $current_arm = trim($_POST['current_arm']);

//  $search_input = 'micheal';

$select = "SELECT * FROM student_record WHERE current_class = '$current_class' && class_arm = '$current_arm'  ";
$queried = mysqli_query($con, $select);

if(mysqli_num_rows($queried) > 0) {

    while($fetch_value = mysqli_fetch_assoc($queried)){

        echo "



        <div class=class_item id=$fetch_value[id] onclick=fetched_cla()>

        <div class=full_names_text>$fetch_value[last_name] $fetch_value[middle_name] $fetch_value[first_name] </div>
        <div class=sex_text>$fetch_value[sex]</div>
        <div class=age_text>$fetch_value[age]</div>
        <div class=registered_date_text>$fetch_value[registration_date]</div>
       

        </div>
        
        
        
        
        
        ";
        
        
        
        
        }
        

}

else{
    echo "<div class=error_record >No record found </div>";
}




?>
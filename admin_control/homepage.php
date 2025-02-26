<?php
session_start();
?>
<?php
require 'dbConfig.php';
?>



 <?php

 if ($_SESSION['email'] && $_SESSION['password'] ){

 }

 else{

 	header("location:login.php");
 }

 ?>



<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="homepage.css">

    </head>

    <body onclick='clear_s()'>

        <section class="first_page">

            <!--BEGINNING OF Header SECTION-->

                <div class="header_container">
                    
                    <div class="logo">

                        <img src="img/nis_logo.png">

                    </div>

                    <div class="name_of_school">

                        NEGBENEBOR INTERNATIONAL SCHOOL
                        
                    </div>

                    <div class="menu" onclick='logout()'>

                        Log out
                        
                    </div>


                </div>
            
             <!--END OF Header SECTION-->





            <!--BEGINNING OF Body SECTION-->

            <div class="body_container">

                <div class="b_contained">

                    <div class="b_left_bar">
                        <div class="home_dashboard" onclick="home()">

                            Home

                        </div>

                        <div class="student_record" onclick="student_record()">

                            Student Record
                            
                        </div>


                        <div class="create_new" onclick='create_new_record()'>

                            Create New Student Record
                            
                        </div>


                    </div>






                    <div class="b_right_bar">



                        <div class="total_student">

                            A Total of 2000 Registered Students
                        </div>


                        <div class="student_classes">



                            <div class="main_record">


                                <div class="class_arms">
                                    SS3 A

                                </div>

                                <div class="male_number">
                                    200 MALES
                                </div>

                                <div class="female_number">
                                    110 FEMALES
                                </div>


                            </div>




                            
                            <div class="main_record">


                                <div class="class_arms">
                                    SS3 B

                                </div>

                                <div class="male_number">
                                    180 MALES
                                </div>

                                <div class="female_number">
                                    190 FEMALES
                                </div>


                            </div>




                            
                            <div class="main_record">


                                <div class="class_arms">
                                    SS2 A

                                </div>

                                <div class="male_number">
                                    150 MALES
                                </div>

                                <div class="female_number">
                                    151 FEMALES
                                </div>


                            </div>




                            
                            <div class="main_record">


                                <div class="class_arms">
                                    SS2 B

                                </div>

                                <div class="male_number">
                                    200 MALES
                                </div>

                                <div class="female_number">
                                    150 FEMALES
                                </div>


                            </div>



                            
                            <div class="main_record">


                                <div class="class_arms">
                                    SS1 A

                                </div>

                                <div class="male_number">
                                    100 MALES
                                </div>

                                <div class="female_number">
                                    150 FEMALES
                                </div>


                            </div>



                            
                            <div class="main_record">


                                <div class="class_arms">
                                    SS1 B

                                </div>

                                <div class="male_number">
                                    200 MALES
                                </div>

                                <div class="female_number">
                                    150 FEMALES
                                </div>


                            </div>



                            
                            <div class="main_record">


                                <div class="class_arms">
                                    JSS3 A

                                </div>

                                <div class="male_number">
                                    120 MALES
                                </div>

                                <div class="female_number">
                                    110 FEMALES
                                </div>


                            </div>



                            
                            <div class="main_record">


                                <div class="class_arms">
                                    JSS3 B

                                </div>

                                <div class="male_number">
                                    200 MALES
                                </div>

                                <div class="female_number">
                                    150 FEMALES
                                </div>


                            </div>



                            
                            <div class="main_record">


                                <div class="class_arms">
                                    JSS2 A

                                </div>

                                <div class="male_number">
                                    120 MALES
                                </div>

                                <div class="female_number">
                                    130 FEMALES
                                </div>


                            </div>


                            
                            <div class="main_record">


                                <div class="class_arms">
                                    JSS1 A

                                </div>

                                <div class="male_number">
                                    200 MALES
                                </div>

                                <div class="female_number">
                                    150 FEMALES
                                </div>


                            </div>



                            
                            <div class="main_record">


                                <div class="class_arms">
                                    PRY6 A

                                </div>

                                <div class="male_number">
                                    130 MALES
                                </div>

                                <div class="female_number">
                                    120 FEMALES
                                </div>


                            </div>



                            
                            <div class="main_record">


                                <div class="class_arms">
                                    PRY6 B

                                </div>

                                <div class="male_number">
                                    100 MALES
                                </div>

                                <div class="female_number">
                                    150 FEMALES
                                </div>


                            </div>


                            
                            <div class="main_record">


                                <div class="class_arms">
                                    PRY5 A

                                </div>

                                <div class="male_number">
                                    200 MALES
                                </div>

                                <div class="female_number">
                                    150 FEMALES
                                </div>


                            </div>



                            
                            <div class="main_record">


                                <div class="class_arms">
                                    PRY5 B

                                </div>

                                <div class="male_number">
                                    100 MALES
                                </div>

                                <div class="female_number">
                                    100 FEMALES
                                </div>


                            </div>



                            
                            <div class="main_record">


                                <div class="class_arms">
                                    PRY4 A

                                </div>

                                <div class="male_number">
                                    150 MALES
                                </div>

                                <div class="female_number">
                                    150 FEMALES
                                </div>


                            </div>



                            
                            <div class="main_record">


                                <div class="class_arms">
                                    PRY4 B

                                </div>

                                <div class="male_number">
                                    200 MALES
                                </div>

                                <div class="female_number">
                                    110 FEMALES
                                </div>


                            </div>



                            
                            <div class="main_record">


                                <div class="class_arms">
                                    PRY3 A

                                </div>

                                <div class="male_number">
                                    100 MALES
                                </div>

                                <div class="female_number">
                                    150 FEMALES
                                </div>


                            </div>


                            
                            <div class="main_record">


                                <div class="class_arms">
                                    PRY3 B

                                </div>

                                <div class="male_number">
                                    200 MALES
                                </div>

                                <div class="female_number">
                                    150 FEMALES
                                </div>


                            </div>



                            
                            <div class="main_record">


                                <div class="class_arms">
                                    PRY2 A

                                </div>

                                <div class="male_number">
                                    100 MALES
                                </div>

                                <div class="female_number">
                                    150 FEMALES
                                </div>


                            </div>


                            
                            <div class="main_record">


                                <div class="class_arms">
                                    PRY2 B

                                </div>

                                <div class="male_number">
                                    200 MALES
                                </div>

                                <div class="female_number">
                                    150 FEMALES
                                </div>


                            </div>



                                    
                            <div class="main_record">


                                <div class="class_arms">
                                    PRY1 A

                                </div>

                                <div class="male_number">
                                    200 MALES
                                </div>

                                <div class="female_number">
                                    150 FEMALES
                                </div>


                            </div>



                                    
                            <div class="main_record">


                                <div class="class_arms">
                                    PRY1 B

                                </div>

                                <div class="male_number">
                                    200 MALES
                                </div>

                                <div class="female_number">
                                    150 FEMALES
                                </div>


                            </div>



                                    
                            <div class="main_record">


                                <div class="class_arms">
                                    KG3 A

                                </div>

                                <div class="male_number">
                                    200 MALES
                                </div>

                                <div class="female_number">
                                    150 FEMALES
                                </div>


                            </div>



                                    
                            <div class="main_record">


                                <div class="class_arms">
                                    KG3 B

                                </div>

                                <div class="male_number">
                                    200 MALES
                                </div>

                                <div class="female_number">
                                    150 FEMALES
                                </div>


                            </div>





                                    
                            <div class="main_record">


                                <div class="class_arms">
                                    KG2 A

                                </div>

                                <div class="male_number">
                                    200 MALES
                                </div>

                                <div class="female_number">
                                    150 FEMALES
                                </div>


                            </div>





                                    
                            <div class="main_record">


                                <div class="class_arms">
                                    KG2 B

                                </div>

                                <div class="male_number">
                                    200 MALES
                                </div>

                                <div class="female_number">
                                    150 FEMALES
                                </div>


                            </div>






                                    
                            <div class="main_record">


                                <div class="class_arms">
                                    KG1 A

                                </div>

                                <div class="male_number">
                                    200 MALES
                                </div>

                                <div class="female_number">
                                    150 FEMALES
                                </div>


                            </div>





                                    
                            <div class="main_record">


                                <div class="class_arms">
                                    KG1 B

                                </div>

                                <div class="male_number">
                                    200 MALES
                                </div>

                                <div class="female_number">
                                    150 FEMALES
                                </div>


                            </div>



                                    
                            <div class="main_record">


                                <div class="class_arms">
                                    NURSERY3 A

                                </div>

                                <div class="male_number">
                                    200 MALES
                                </div>

                                <div class="female_number">
                                    150 FEMALES
                                </div>


                            </div>





                                    
                            <div class="main_record">


                                <div class="class_arms">
                                    NURSERY3 B

                                </div>

                                <div class="male_number">
                                    200 MALES
                                </div>

                                <div class="female_number">
                                    150 FEMALES
                                </div>


                            </div>






                                    
                            <div class="main_record">


                                <div class="class_arms">
                                    NURSERY2 A

                                </div>

                                <div class="male_number">
                                    200 MALES
                                </div>

                                <div class="female_number">
                                    150 FEMALES
                                </div>


                            </div>





                                    
                            <div class="main_record">


                                <div class="class_arms">
                                    NURSERY2 B

                                </div>

                                <div class="male_number">
                                    200 MALES
                                </div>

                                <div class="female_number">
                                    150 FEMALES
                                </div>


                            </div>


                                      
                            



                            <div class="main_record">


                            </div>


                            <div class="main_record">


                            </div>



                        </div>



                        <!---End of page 1 i.e home page -->
























                        
                        <section class="second_page">

                            <div class="search_section">

                                <div class="instruction_all">

                                    <div class="instruction">Instructions</div>
                                    <div class="instruct"><li>Use the search button to get a particular student data</li></div>
                                    <div class="instruct"><li>Use the select button to get an entire class e.g Pry 4 A</li> </div>
    

                                </div>

                                <div class="filter_buttons">




                                    <div class="use_filters">Use</div>

                                    <div class="search_btn">
                                        <button type="button" class="clk" onclick="search_va()">Search</button>
                                    
                                    </div>

                                    <div class="search_value_section">
                                        <div class="search_boxx">
                                            <input type="text" oninput = 'live_search()'  onchange = 'input_out()' class="search_input" placeholder="Enter Student Names">

                                        
                                        </div>

                                        <div class='result'>  </div>

                      
                                    </div>

                           

                                    <div class="user_or">Or</div>

                                    <div class="se_btn">
                                        <button type="button" class="clk" onclick="select_va()">Select</button>
                                    </div>


                                    <div class="search_reset">
                                            
                                        <button type="button" class="search_bx" onclick="reset()">Reset</button>
                                        
                                    </div>

                                    <div class="class_class">
                                        <select class="select_cc" id='selected_class'>

                                            <option class="class_set" >SELECT CLASS</option>
                                            <option class="class_set">SSS 3</option>
                                            <option class="class_set">SSS 2</option>
                                            <option class="class_set">SSS 1</option>
                                            <option class="class_set">JSS 3</option>
                                            <option class="class_set">JSS 2</option>

                                            <option class="class_set">JSS 1</option>
                                            <option class="class_set">PRY 6</option>
                                            <option class="class_set">PRY 5</option>
                                            <option class="class_set">PRY 4</option>
                                            <option class="class_set">PRY 3</option>

                                            <option class="class_set">PRY 2</option>
                                            <option class="class_set">PRY 1</option>
                                            <option class="class_set">KG 3</option>
                                            <option class="class_set">KG 2</option>

                                            <option class="class_set">KG 1</option>
                                            <option class="class_set">NURSERY3</option>
                                            <option class="class_set">NURSERY2</option>
                                            <option class="class_set">NURSERY1</option>

                                            <option class="class_set">CRECHE</option>

                                        </select>
                                    </div>


                                    <div class="class_arm">


                                        <select class="select_cc" id='selected_arm'>

                                            <option class="class_ARM">SELECT CLASS ARM</option>
                                            <option class="class_ARM">A</option>
                                            <option class="class_ARM">B</option>
                                            <option class="class_ARM">C</option>
                                            <option class="class_ARM">D</option>
                                            <option class="class_ARM">E</option>
                                            <option class="class_ARM">F</option>

                                        </select>


                                    </div>

                                    <div class="fetch_class">
                                        <button type="button" class="fetc" onclick='fetch_class()'>Fetch Class</button>
                                    </div>

                                    <div class="class_arm"></div>




                                </div>
                               
                            </div>




                            <div class="search_data_section">
                                

                                <div class="search_data1">

                                    <div class="stud_head">Student Data</div><br>

                                    <div class="passport_region">

                                        <div id="passport_picture" >

                                            <!-- <img src='passport/passport_second.jpeg' /> -->

                                        </div>
                                        <div class='update_passport()'>

                                        

                                                <?php
                                                // if(isset($_POST['update_image']) ){
                                                // require 'image_upload.php';
                                                // }


                                                ?>



                                                <!-- <form method="POST" enctype="multipart/form-data"> -->


                                                   <div id='image_pic_file' > 
												   
														<input type="file" name='image_file'  id='image_file' >

												   </div>

							
							                        <div> 
													
														<input type="submit" name='update_image' id='update_passport' onclick = 'update_passport()' value="Update Passport"> 
													
													</div>





                                                    <div class="named_text">
													<input type='number' name='identifier'  disabled='disabled' id='identifier' class='input_data'>

                                                    </div>



                                                <!-- </form> -->
                                        </div>

                                    </div>

                                    <div class="v_record">
                                        <div class="named_value">Full Names</div>
                                        <div class="named_text"><input type='text' id='full_names' class='input_data'></div>
                                        <div class="named_btn" onclick='update_full_names()'>Update</div>
                                    </div>


                                    <div class="v_record">
                                        <div class="named_value">Sex</div>
                                        <div class="named_text"><input type='text' id='sex' class='input_data'></div>
                                        <div class="named_btn" onclick='update_sex()' >Update</div>
                                    </div>


                                    <div class="v_record">
                                        <div class="named_value">Religion</div>
                                        <div class="named_text"><input type='text' id='religion' class='input_data'></div>
                                        <div class="named_btn" onclick='update_religion()' >Update</div>
                                    </div>



                                    <div class="v_record">
                                        <div class="named_value">Date of Birth</div>
                                        <div class="named_text"><input type='text' id='date_of_birth' class='input_data'></div>
                                        <div class="named_btn" onclick='update_dob()'>Update</div>
                                    </div>



                                    <div class="v_record">
                                        <div class="named_value">Place of Birth</div>
                                        <div class="named_text"><input type='text' id='place_of_birth' class='input_data'></div>
                                        <div class="named_btn" onclick='update_pob()'>Update</div>
                                    </div>




                                    <div class="v_record">
                                        <div class="named_value">L.G.A</div>
                                        <div class="named_text"><input type='text' id='l_g_a' class='input_data'></div>
                                        <div class="named_btn" onclick='update_lga()' >Update</div>
                                    </div>




                                    <div class="v_record">
                                        <div class="named_value">State of Origin</div>
                                        <div class="named_text"><input type='text' id='state_of_origin' class='input_data'></div>
                                        <div class="named_btn" onclick='update_soo()'>Update</div>
                                    </div>




                                    <div class="v_record">
                                        <div class="named_value">Recent Schools Attended</div>
                                        <div class="named_text"><input type='text' id='recent_schools' class='input_data'></div>
                                        <div class="named_btn" onclick='update_recent_schools()'>Update</div>
                                    </div>




                                    <div class="v_record">
                                        <div class="named_value">Current Class</div>
                                        <div class="named_text">
                                            
                                       


                                        <select id='current_class' name='current_class' class='input_data'>

                                                <option>Select Class</option>
                                                <option>SSS 3</option>
                                                <option>SSS 2</option>
                                                <option>SSS 1</option>
                                                <option>JSS 3</option>
                                                <option>JSS 2</option>
                                                <option>JSS 1</option>
                                                <option>PRY 6</option>
                                                <option>PRY 5</option>
                                                <option>PRY 4</option>
                                                <option>PRY 3</option>

                                                <option>PRY 2</option>
                                                <option>PRY 1</option>
                                                <option>KG 3</option>

                                                <option>KG 2</option>
                                                <option>KG 1</option>
                                                <option>NURSERY 3</option>

                                                <option>NURSERY 2</option>
                                                <option>NURSERY 1</option>
                                                <option>CRECHE</option>

                                        </select>
                    

                                    
                                    
                                        </div>
                                        <div class="named_btn" onclick='update_current_class()'>Update</div>
                                    </div>




                                    <div class="v_record">
                                        <div class="named_value">Class Arm</div>
                                        <div class="named_text">
                                           

                                                <select id='class_arm' name='class_arm' class='input_data'>

                                                        <option>Select Class ARM</option>
                                                        <option>A</option>
                                                        <option>B</option>
                                                        <option>C</option>
                                            

                                                </select>
                                        
                                        
                                        </div>
                                        <div class="named_btn" onclick='update_class_arm()' >Update</div>
                                    </div>




                                    <div class="v_record">
                                        <div class="named_value">Health Challenges / disabilities</div>
                                        <div class="named_text"><input type='text' id='health_challenges' class='input_data'></div>
                                        <div class="named_btn" onclick='update_health_challenges()'>Update</div>
                                    </div>




                                    <div class="v_record">
                                        <div class="named_value">Mother's Name</div>
                                        <div class="named_text"><input type='text' id='mothers_name' class='input_data'></div>
                                        <div class="named_btn" onclick='update_mothers_name()' >Update</div>
                                    </div>




                                    <div class="v_record">
                                        <div class="named_value">Residential Address</div>
                                        <div class="named_text"><input type='text' id='residential_address' class='input_data'></div>
                                        <div class="named_btn">Update</div>
                                    </div>



                                    <div class="v_record">
                                        <div class="named_value">Phone Number</div>
                                        <div class="named_text"><input type='number' id='phone_number' class='input_data'></div>
                                        <div class="named_btn">Update</div>
                                    </div>



                                    <div class="v_record">
                                        <div class="named_value">Secondary Guardian Name</div>
                                        <div class="named_text"><input type='text' id='secondary_guardian' class='input_data'></div>
                                        <div class="named_btn">Update</div>
                                    </div>



                                    <div class="v_record">
                                        <div class="named_value">Guardian Address</div>
                                        <div class="named_text"><input type='text' id='guardians_address' class='input_data'></div>
                                        <div class="named_btn">Update</div>
                                    </div>


                                    <div class="v_record">
                                        <div class="named_value">Guardian Phone Number</div>
                                        <div class="named_text"><input type='number' id='guardians_phone_number' class='input_data'></div>
                                        <div class="named_btn">Update</div>
                                    </div>



                                    
                                



                                    <div class="v_record">
                                      
                                    </div>


                                    <div class="v_record">
                                      
                                    </div>



                                    
                        


                                    
                              

                                </div>








                                <div class="search_data2">

                                    <div class="class_box">
                                        <div class="class_text" id='selected_values'> </div>
                                    </div>

                                    <div class="class_details">

                                        <div class="class_item_header">
                                            <div class="full_names">Full Names </div>
                                            <div class="sex">Sex</div>
                                            <div class="age">Age</div>
                                            <div class="date_registered">Date Registered </div>
                                        </div>

                                       <div class='class_result'>


                                       </div>



                                        
                                       











                                    </div>
                                    
                                </div>

                            </div>

                            
                        </section>








                        <section class="third_page">



                            <div class='third_page_bound'>


                            <div class="stud_head">Create New Student Record</div><br>











                                                        
                                <div class="passport_region">

                                        <div id="passport_picture" >

                                            <!-- <img src='passport/passport_second.jpeg' /> -->

                                        </div><br>
                                        <div class='update_passport()'>
                                            
                                                <div> <input type="file" name="image_file_1"  id='image_file_1' > </div>


                                        </div>

                                </div>






                            

                                    <div class="v_record">
                                        <div class="named_value">Fullv Names</div>
                                        <div class="named_text"><input type='text' id='full_names_create' names='full_names' 
                                        placeholder='Surname First name Middle name'
                                        class='input_data'>
                                        </div>
                                        <div class="named_btn" onclick='update_full_names()'> </div>
                                    </div>


                                    <div class="v_record">
                                        <div class="named_value">Sex</div>
                                        <div class="named_text"><input type='text' id='sex_create' placeholder='Gender' name='sex' class='input_data'></div>
                                        <div class="named_btn" onclick='update_sex()' > </div>
                                    </div>
									
									
									 <div class="v_record">
                                        <div class="named_value">Age</div>
                                        <div class="named_text"><input type='text' id='age_create' placeholder='age' name='age' class='input_data'></div>
                                        <div class="named_btn" onclick='update_sex()' > </div>
                                    </div>


                                    <div class="v_record">
                                        <div class="named_value">Religion</div>
                                        <div class="named_text"><input type='text' id='religion_create' name='religion' class='input_data'></div>
                                        <div class="named_btn" onclick='update_religion()' > </div>
                                    </div>



                                    <div class="v_record">
                                        <div class="named_value">Date of Birth</div>
                                        <div class="named_text"><input type='text' id='d_o_b_create' name='d_o_b_create' class='input_data'></div>
                                        <div class="named_btn" onclick='update_dob()'> </div>
                                    </div>



                                    <div class="v_record">
                                        <div class="named_value">Place of Birth</div>
                                        <div class="named_text"><input type='text' id='p_o_b_create' name='p_o_b_create' class='input_data'></div>
                                        <div class="named_btn" onclick='update_pob()'> </div>
                                    </div>




                                    <div class="v_record">
                                        <div class="named_value">L.G.A</div>
                                        <div class="named_text"><input type='text' id='l_g_a_create' name='l_g_a_create' class='input_data'></div>
                                        <div class="named_btn" onclick='update_lga()' > </div>
                                    </div>




                                    <div class="v_record">
                                        <div class="named_value">State of Origin</div>
                                        <div class="named_text"><input type='text' id='s_o_o_create' name='s_o_o_create' class='input_data'></div>
                                        <div class="named_btn" onclick='update_soo()'> </div>
                                    </div>




                                    <div class="v_record">
                                        <div class="named_value">Recent Schools Attended</div>
                                        <div class="named_text"><input type='text' id='recent_schools_create' name='recent_schools_create' class='input_data'></div>
                                        <div class="named_btn" onclick='update_recent_schools()'> </div>
                                    </div>




                                    <div class="v_record">
                                        <div class="named_value">Current Class</div>
                                        <div class="named_text">
                                            
                                        <!-- <input type='text' id='current_class_create' name='current_class_create' class='input_data'> -->



                                        <select id='current_class_create' name='current_class_create' class='input_data'>

                                                <option>Select Class</option>
                                                <option>SSS 3</option>
                                                <option>SSS 2</option>
                                                <option>SSS 1</option>
                                                <option>JSS 3</option>
                                                <option>JSS 2</option>
                                                <option>JSS 1</option>
                                                <option>PRY 6</option>
                                                <option>PRY 5</option>
                                                <option>PRY 4</option>
                                                <option>PRY 3</option>

                                                <option>PRY 2</option>
                                                <option>PRY 1</option>
                                                <option>KG 3</option>

                                                <option>KG 2</option>
                                                <option>KG 1</option>
                                                <option>NURSERY 3</option>

                                                <option>NURSERY 2</option>
                                                <option>NURSERY 1</option>
                                                <option>CRECHE</option>

                                        </select>
                                    
                                    
                                        </div>
                                        <div class="named_btn" onclick='update_current_class()'> </div>
                                    </div>




                                    <div class="v_record">
                                        <div class="named_value">Class Arm</div>
                                        <div class="named_text">


                                            <!-- <input type='text' id='class_arm_create' name='class_arm' class='input_data'> -->


                                                <select id='class_arm_create' name='class_arm' class='input_data'>

                                                        <option>Select Class ARM</option>
                                                        <option>A</option>
                                                        <option>B</option>
                                                        <option>C</option>
                                            

                                                </select>
                                        
                                        </div>
                                        <div class="named_btn" onclick='update_class_arm()' > </div>
                                    </div>




                                    <div class="v_record">
                                        <div class="named_value">Health Challenges / disabilities</div>
                                        <div class="named_text"><input type='text' id='health_challenges_create' name='health_challenges' class='input_data'></div>
                                        <div class="named_btn" onclick='update_health_challenges()'> </div>
                                    </div>




                                    <div class="v_record">
                                        <div class="named_value">Mother's Name</div>
                                        <div class="named_text"><input type='text' id='mothers_name_create' name='mothers_name' class='input_data'></div>
                                        <div class="named_btn" onclick='update_mothers_name()' > </div>
                                    </div>




                                    <div class="v_record">
                                        <div class="named_value">Residential Address</div>
                                        <div class="named_text"><input type='text' id='residential_address_create' name='address' class='input_data'></div>
                                        <div class="named_btn"></div>
                                    </div>



                                    <div class="v_record">
                                        <div class="named_value">Phone Number</div>
                                        <div class="named_text"><input type='number' id='phone_number_create' name='phone_number' class='input_data'></div>
                                        <div class="named_btn"> </div>
                                    </div>



                                    <div class="v_record">
                                        <div class="named_value">Secondary Guardian Name</div>
                                        <div class="named_text"><input type='text' id='secondary_guardian_create' name='secondary_guardian' class='input_data'></div>
                                        <div class="named_btn"> </div>
                                    </div>



                                    <div class="v_record">
                                        <div class="named_value">Guardian Address</div>
                                        <div class="named_text"><input type='text' id='guardians_address_create' name='guardian_address' class='input_data'></div>
                                        <div class="named_btn"> </div>
                                    </div>


                                    <div class="v_record">
                                        <div class="named_value">Guardian Phone Number</div>
                                        <div class="named_text"><input type='number' id='guardians_phone_create' name='guardian_phone' class='input_data'></div>
                                        <div class="named_btn"> </div>
                                    </div>



                                    

                                    <div class="v_record">
                                        <div class='create_btn' onclick='upload_new_record()'>

                                        Create Student Record

                                        </div>
                                      
                                    </div>
                                



                                    <div class="v_record">
                                      
                                    </div>


                                    <div class="v_record">
                                      
                                    </div>


                               
                              

                            </div>                     
                            
                        </section>


                    </div>



                </div>

                
            </div>

            
            <!--END OF Body SECTION-->




            

            
            <!--BEGINNING OF Footer SECTION-->

            <div class="footer_container">

            </div>


            
            <!--END OF Footer SECTION-->


        </section>















        <script src="operation.js"></script>




    </body>
</html>
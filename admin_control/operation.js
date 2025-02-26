function home(){
//alert('ok');

var second_page = document.getElementsByClassName('second_page')[0];
second_page.style.display = 'none';


var home = document.getElementsByClassName('total_student')[0];
home.style.display = 'block';

var student = document.getElementsByClassName('student_classes')[0];
student.style.display = 'block';


var third_page = document.getElementsByClassName('third_page')[0];
third_page.style.display = 'none';


}


function student_record(){
    //alert('ok');

    
   var third_page = document.getElementsByClassName('third_page')[0];
   third_page.style.display = 'none';

    var home = document.getElementsByClassName('total_student')[0];
    home.style.display = 'none';

    var student = document.getElementsByClassName('student_classes')[0];
    student.style.display = 'none';


    var second_page = document.getElementsByClassName('second_page')[0];
    second_page.style.display = 'flex';
    
}


function logout(){
    location.assign('logout.php');
}













function live_search(){





    //alert('ok');
    var search_value = document.getElementsByClassName('search_input')[0].value;

    //console.log(search_value);




    var xmlhttp;
    xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(){
    if(xmlhttp.readyState==4 && xmlhttp.status==200){

   
        
       var response = xmlhttp.responseText;
   

       var result = document.getElementsByClassName('result')[0];
        result.innerHTML = response;




        var search_i = document.getElementsByClassName('search_input')[0];
        //alert(search_i.value.length);
       
        if(search_i.value.length < 1){
       
           var result = document.getElementsByClassName('result')[0];
           result.innerHTML = "";
       
          // alert('ok');
       
           
        }

     
        

            
   }



}

   //xmlhttp.open('GET', 'submit_reset.php?email='+email_value+ "&name=" +name_value+ "&subject=" +subject_value+ "&message=" +message_value+ "&date=" +date, true);
   
   // xmlhttp.open('GET', 'loginlogs.php?from_location='+from_location+'&to_location='+to_location, true);
   // xmlhttp.send();

   xmlhttp.open('POST', 'searched_value.php');
   xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
   xmlhttp.send('searched='+search_value);






  

}




function clear_s(){

    var result = document.getElementsByClassName('result')[0];
    result.innerHTML = "";

}













function input_out(){
    //alert('checked');

    var f_names = document.querySelectorAll('.f_names');
    //alert(f_names.length);

    for(i=0; i<f_names.length; i++){

        var id_number = document.getElementsByClassName('f_names')[i];

        id_number.addEventListener('click', che);

       

    }




}



function che(){
    var idv = this.id;

    
    var xmlhttp;
    xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(){
    if(xmlhttp.readyState==4 && xmlhttp.status==200){

   
        
       var response = JSON.parse(xmlhttp.responseText);


       var passport_name = document.getElementById('passport_picture');
      // passport_name.innerHTML ="<img src='passport/"+response.list.passport_name+"'>";

       passport_name.innerHTML ="<img src='passport/"+response.list.passport_name+"'>";



       var full_names = document.getElementById('full_names');
       full_names.value = response.list.last_name+" "+response.list.middle_name+" "+response.list.first_name;


       var sex = document.getElementById('sex');
       sex.value = response.list.sex;


       var religion = document.getElementById('religion');
       religion.value = response.list.religion;


       var place_of_birth = document.getElementById('place_of_birth');
       place_of_birth.value = response.list.place_of_birth;


       var date_of_birth = document.getElementById('date_of_birth');
       date_of_birth.value = response.list.date_of_birth;


       
       var l_g_a = document.getElementById('l_g_a');
       l_g_a.value = response.list.sex;


       
       var state_of_origin = document.getElementById('state_of_origin');
       state_of_origin.value = response.list.state_of_origin;


       var recent_schools = document.getElementById('recent_schools');
       recent_schools.value = response.list.recent_schools_attended;

       var current_class = document.getElementById('current_class');
       current_class.value = response.list.current_class;


       var class_arm = document.getElementById('class_arm');
       class_arm.value = response.list.class_arm;


       var health_challenges = document.getElementById('health_challenges');
       health_challenges.value = response.list.health_challenges;


       var mothers_name = document.getElementById('mothers_name');
       mothers_name.value = response.list.mothers_name;



       var residential_address = document.getElementById('residential_address');
       residential_address.value = response.list.residential_address;


       var phone_number = document.getElementById('phone_number');
       phone_number.value = response.list.phone_number;


       var secondary_guardian = document.getElementById('secondary_guardian');
       secondary_guardian.value = response.list.guardians_name;



       var guardians_address = document.getElementById('guardians_address');
       guardians_address.value = response.list.guardians_address;



       var guardians_phone_number = document.getElementById('guardians_phone_number');
       guardians_phone_number.value = response.list.guardians_phone_number;


       var id = document.getElementById('identifier');
       id.value = response.list.id;













    }



}

   //xmlhttp.open('GET', 'submit_reset.php?email='+email_value+ "&name=" +name_value+ "&subject=" +subject_value+ "&message=" +message_value+ "&date=" +date, true);
   
   // xmlhttp.open('GET', 'loginlogs.php?from_location='+from_location+'&to_location='+to_location, true);
   // xmlhttp.send();

   xmlhttp.open('POST', 'record.php');
   xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
   xmlhttp.send('searched='+ idv);








}




















function search_va(){
//alert('search');

var search_btn = document.getElementsByClassName('search_btn')[0];
search_btn.style.display = 'none';

var search_reset = document.getElementsByClassName('search_reset')[0];
search_reset.style.display = 'flex';

var user_or = document.getElementsByClassName('user_or')[0];
user_or.style.display = 'none';

var se_btn = document.getElementsByClassName('se_btn')[0];
se_btn.style.display = 'none';

var search_value_section = document.getElementsByClassName('search_value_section')[0];
search_value_section.style.display = 'flex';
search_value_section.style.width = '30%';
search_value_section.style.opacity = '1';
search_value_section.style.transition = 'all 1s linear';


    var search_input = document.getElementsByClassName('search_input')[0];
    search_input.style.width = '250px';
    search_input.style.transition = 'all 1s linear';










}

function select_va(){

   //alert('select');

var search_btn = document.getElementsByClassName('search_btn')[0];
search_btn.style.display = 'none';
var user_or = document.getElementsByClassName('user_or')[0];
user_or.style.display = 'none';

var se_btn = document.getElementsByClassName('se_btn')[0];
se_btn.style.display = 'none';

var search_reset = document.getElementsByClassName('search_reset')[0];
search_reset.style.display = 'flex';

var select_cc = document.getElementsByClassName('select_cc')[0];
select_cc.style.display = 'flex';


var select_cc1 = document.getElementsByClassName('select_cc')[1];
select_cc1.style.display = 'flex';


var fetc = document.getElementsByClassName('fetc')[0];
fetc.style.display = 'flex';




    





}








function reset(){

   
   var third_page = document.getElementsByClassName('third_page')[0];
   third_page.style.display = 'none';

//alert('reset');

var search_data_section = document.getElementsByClassName('search_data_section')[0];

search_data_section.style.display = 'flex';



var search_data2 = document.getElementsByClassName('search_data2')[0];

search_data2.style.display = 'none';


var search_data1 = document.getElementsByClassName('search_data1')[0];

search_data1.style.display = 'block';





var search_btn = document.getElementsByClassName('search_btn')[0];
search_btn.style.display = 'flex';

var search_reset = document.getElementsByClassName('search_reset')[0];
search_reset.style.display = 'none';

var user_or = document.getElementsByClassName('user_or')[0];
user_or.style.display = 'flex';

var se_btn = document.getElementsByClassName('se_btn')[0];
se_btn.style.display = 'flex';

var search_value_section = document.getElementsByClassName('search_value_section')[0];
search_value_section.style.display = 'hidden';
search_value_section.style.width = '0%';
search_value_section.style.opacity = '0';
search_value_section.style.transition = 'all 1s linear';


    var search_input = document.getElementsByClassName('search_input')[0];
    search_input.style.width = '0px';
    search_input.style.transition = 'all 1s linear';



    var select_cc = document.getElementsByClassName('select_cc')[0];
select_cc.style.display = 'none';


var fetc = document.getElementsByClassName('fetc')[0];
fetc.style.display = 'none';


var select_cc1 = document.getElementsByClassName('select_cc')[1];
select_cc1.style.display = 'none';









var search_i = document.getElementsByClassName('search_input')[0];
//alert(search_i.value.length);

search_i.value = "";



   var result = document.getElementsByClassName('result')[0];
   result.innerHTML = "";


    
}












//update region


function update_all(main_value, table_value ){
    //alert('ok');
 
  
 
    var main = document.getElementById(main_value);
    var main_value =  main.value;
 
       // spliting the string to arrays
 
 
       // alert(last_name);
 
       var identifier = document.getElementById('identifier');
       var identifier_value = identifier.value;
 
    // alert('ok');
 
    var xmlhttp;
    xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(){
    if(xmlhttp.readyState==4 && xmlhttp.status==200){
    
 
        //var response = JSON.parse(xmlhttp.responseText);
        var response = xmlhttp.responseText;
 
       if(response == 'updated'){
         alert('Updated successfully');
       }
 
 
 
 
     }
 
 
 }
 
 
 
    xmlhttp.open('POST', 'dataupdate2.php');
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send('main_value='+main_value+'&identifier='+identifier_value+'&table_value='+table_value);
 
 
 
 
 
 
 
 }
 
 //the first parameter is the id in the html file, while the second parameter is the database table name
 
 function update_full_names(){



    
   var fullnames = document.getElementById('full_names');
   var full_names =  fullnames.value;

      // spliting the string to arrays
       var splitted = full_names.split(" ");

       const last_name = splitted[0];
       const middle_name = splitted[1];
       const first_name = splitted[2];

      // alert(last_name);

      var identifier = document.getElementById('identifier');
      var identifier_value = identifier.value;

   // alert('ok');

   var xmlhttp;
   xmlhttp = new XMLHttpRequest();
   xmlhttp.onreadystatechange = function(){
   if(xmlhttp.readyState==4 && xmlhttp.status==200){
   

       //var response = JSON.parse(xmlhttp.responseText);
       var response = xmlhttp.responseText;

      if(response == 'updated'){
        alert('Updated successfully');
      }




    }


}



   xmlhttp.open('POST', 'dataupdate.php');
   xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
   xmlhttp.send('first_name='+first_name+'&last_name='+last_name+'&middle_name='+middle_name+'&identifier='+identifier_value);
    
 }
 








 function update_sex(){
    update_all('sex', 'sex');
 }
 
 function update_religion(){
    update_all('religion', 'religion');
 }
 
 function update_dob(){
    update_all('date_of_birth', 'date_of_birth');
 }
 
 function update_pob(){
    update_all('place_of_birth', 'place_of_birth');
 }
 
 
 function update_lga(){
    update_all('l_g_a', 'l_g_a');
 }
 
 
 function update_soo(){
    update_all('state_of_origin', 'state_of_origin');
 }
 
 
 
 function update_recent_schools(){
    update_all('recent_schools', 'recent_schools_attended');
 }
 
 function update_current_class(){
    update_all('current_class', 'current_class');
 }
 
 function update_class_arm(){
    update_all('class_arm', 'class_arm');
 }
 
 
 function update_health_challenges(){
    update_all('health_challenges', 'health_challenges');
 }
 
 
 function update_mothers_name(){
    update_all('mothers_name', 'mothers_name');
 }







 function fetch_class(){
   //alert('fetch');

   var selected_class = document.getElementById('selected_class');
   var selected_class_value = selected_class.value;

   var selected_arm = document.getElementById('selected_arm');
   var selected_arm_value = selected_arm.value;


   var selected_values = document.getElementById('selected_values');
   selected_values.innerHTML = selected_class_value+" "+selected_arm_value;

   //alert(selected_arm_value);



   if(selected_class_value !== "SELECT CLASS" & selected_arm_value !== "SELECT CLASS ARM"){
      //alert('ok');


      var search_data_section = document.getElementsByClassName('search_data1')[0];

      search_data_section.style.display = 'none';
   
   
      var search_data_section = document.getElementsByClassName('search_data2')[0];
   
      search_data_section.style.display = 'block';











         var xmlhttp;
   xmlhttp = new XMLHttpRequest();
   xmlhttp.onreadystatechange = function(){
   if(xmlhttp.readyState==4 && xmlhttp.status==200){
   

       //var response = JSON.parse(xmlhttp.responseText);
       var response = xmlhttp.responseText;

       var class_result = document.getElementsByClassName('class_result')[0];
       class_result.innerHTML = response;

      
       //fetch_function();
       fetched_cla();



       
    }


   }
   
   
   
      xmlhttp.open('POST', 'fetch_class.php');
      xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xmlhttp.send('current_class='+selected_class_value+'&current_arm='+selected_arm_value);




      
   

   }

 


//alert('ok');




 }









function fetched_cla(){
   //alert('ok');



  

   
   var fetch_class_id = document.querySelectorAll('.class_item');
   var length_feched = fetch_class_id.length;
   //alert(length_feched);

   for(i=0; i<length_feched; i++){
   var fetched_classes = document.getElementsByClassName('class_item')[i];

   fetched_classes.addEventListener('click', fetch_function);


}



}





function fetch_function(){
   //alert(this.id);

   var search_data_section = document.getElementsByClassName('search_data1')[0];

   search_data_section.style.display = 'block';


   var search_data_section = document.getElementsByClassName('search_data2')[0];

   search_data_section.style.display = 'none';

   var idv = this.id;

 
 var xmlhttp;
 xmlhttp = new XMLHttpRequest();
 xmlhttp.onreadystatechange = function(){
 if(xmlhttp.readyState==4 && xmlhttp.status==200){


     
    var response = JSON.parse(xmlhttp.responseText);


    var passport_name = document.getElementById('passport_picture');
   // passport_name.innerHTML ="<img src='passport/"+response.list.passport_name+"'>";

    passport_name.innerHTML ="<img src='passport/"+response.list.passport_name+"'>";



    var full_names = document.getElementById('full_names');
    full_names.value = response.list.last_name+" "+response.list.middle_name+" "+response.list.first_name;


    var sex = document.getElementById('sex');
    sex.value = response.list.sex;


    var religion = document.getElementById('religion');
    religion.value = response.list.religion;


    var place_of_birth = document.getElementById('place_of_birth');
    place_of_birth.value = response.list.place_of_birth;


    var date_of_birth = document.getElementById('date_of_birth');
    date_of_birth.value = response.list.date_of_birth;


    
    var l_g_a = document.getElementById('l_g_a');
    l_g_a.value = response.list.sex;


    
    var state_of_origin = document.getElementById('state_of_origin');
    state_of_origin.value = response.list.state_of_origin;


    var recent_schools = document.getElementById('recent_schools');
    recent_schools.value = response.list.recent_schools_attended;

    var current_class = document.getElementById('current_class');
    current_class.value = response.list.current_class;


    var class_arm = document.getElementById('class_arm');
    class_arm.value = response.list.class_arm;


    var health_challenges = document.getElementById('health_challenges');
    health_challenges.value = response.list.health_challenges;


    var mothers_name = document.getElementById('mothers_name');
    mothers_name.value = response.list.mothers_name;



    var residential_address = document.getElementById('residential_address');
    residential_address.value = response.list.residential_address;


    var phone_number = document.getElementById('phone_number');
    phone_number.value = response.list.phone_number;


    var secondary_guardian = document.getElementById('secondary_guardian');
    secondary_guardian.value = response.list.guardians_name;



    var guardians_address = document.getElementById('guardians_address');
    guardians_address.value = response.list.guardians_address;



    var guardians_phone_number = document.getElementById('guardians_phone_number');
    guardians_phone_number.value = response.list.guardians_phone_number;


    var id = document.getElementById('identifier');
    id.value = response.list.id;


 }

}




xmlhttp.open('POST', 'record.php');
xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xmlhttp.send('searched='+ idv);






}

























 function create_new_record(){
   //alert('ok');
   var total_student = document.getElementsByClassName('total_student')[0];
   total_student.style.display = 'none';

   var student_classes = document.getElementsByClassName('student_classes')[0];
   student_classes.style.display = 'none';

   var second_page = document.getElementsByClassName('second_page')[0];
   second_page.style.display = 'none';



   var third_page = document.getElementsByClassName('third_page')[0];
   third_page.style.display = 'block';
 }
 














   //alert('ok');

  async function upload_new_record(){





var sex = document.getElementById('sex_create').value;
var age = document.getElementById('age_create').value;
var full_names = document.getElementById('full_names_create').value;
var religion = document.getElementById('religion_create').value;
var d_o_b = document.getElementById('d_o_b_create').value;
var p_o_b = document.getElementById('p_o_b_create').value;
var l_g_a = document.getElementById('l_g_a_create').value;
var s_o_o = document.getElementById('s_o_o_create').value;
var recent_schools= document.getElementById('recent_schools_create').value;
var current_class = document.getElementById('current_class_create').value;
var class_arm = document.getElementById('class_arm_create').value;
var health_challenges = document.getElementById('health_challenges_create').value;
var mothers_name = document.getElementById('mothers_name_create').value;
var residential_address = document.getElementById('residential_address_create').value;
var phone_number = document.getElementById('phone_number_create').value;
var secondary_guardian = document.getElementById('secondary_guardian_create').value;

var guardians_address = document.getElementById('guardians_address_create').value;
var guardians_phone = document.getElementById('guardians_phone_create').value;

if(full_names != "" & current_class != ""){









   
   let formData = new FormData();
   formData.append("file", image_file_1.files[0]);
   formData.append("sex", sex);
   //sex is the posted value i.e, $_POST['sex']

   formData.append("age", age);

   formData.append("religion", religion);
   formData.append("full_names", full_names);
   formData.append("d_o_b", d_o_b);
   formData.append("p_o_b", p_o_b);
   formData.append("l_g_a", l_g_a);
   formData.append("s_o_o", s_o_o);
   formData.append("recent_schools", recent_schools);
   formData.append("current_class", current_class);
   formData.append("class_arm", class_arm);
   formData.append("health_challenges", health_challenges);
   formData.append("mothers_name", mothers_name);


   formData.append("residential_address", residential_address);
   formData.append("phone_number", phone_number);
   formData.append("secondary_guardian", secondary_guardian);
   formData.append("guardians_address", guardians_address);
   formData.append("guardians_phone", guardians_phone);








await fetch('new_user_image_upload.php', {method:"POST", body:formData});
   //alert('the file has been uploaded');



   var xmlhttp;
   xmlhttp = new XMLHttpRequest();
   xmlhttp.onreadystatechange = function(){
   if(xmlhttp.readyState==4 && xmlhttp.status==200){
   

       //var response = JSON.parse(xmlhttp.responseText);
       var response = xmlhttp.responseText;

     if (response != 'upload successful'){
      alert('Student record has been created successfully')
      document.getElementById('sex_create').value = " ";
      document.getElementById('age_create').value  = " ";
      document.getElementById('full_names_create').value  = " ";
      document.getElementById('religion_create').value  = " ";
      document.getElementById('d_o_b_create').value  = " ";
      document.getElementById('p_o_b_create').value  = " ";
      document.getElementById('l_g_a_create').value  = " ";
      document.getElementById('s_o_o_create').value  = " ";
      document.getElementById('recent_schools_create').value  = " ";
      document.getElementById('current_class_create').value  = " ";
      document.getElementById('class_arm_create').value  = " ";
      document.getElementById('health_challenges_create').value  = " ";
      document.getElementById('mothers_name_create').value  = " ";
      document.getElementById('residential_address_create').value  = " ";
      document.getElementById('phone_number_create').value  = " ";
      document.getElementById('secondary_guardian_create').value  = " ";

      document.getElementById('guardians_address_create').value  = " ";
      document.getElementById('guardians_phone_create').value  = " ";
           
   
   }






       
    }


   }
   
   
   
      xmlhttp.open('POST', 'new_user_image_upload.php');
      xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xmlhttp.send();









}



      
   }



   async function update_passport(){
      //alert('good');
      var identifier = document.getElementById('identifier').value;
      let formDatax = new FormData();
      formDatax.append("image_x", image_file.files[0]);
      formDatax.append("identifier", identifier);
      await fetch('image_upload.php', {method:"POST", body:formDatax});
      //alert(identifier);





      var xmlhttp;
      xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function(){
      if(xmlhttp.readyState==4 && xmlhttp.status==200){
  
     
          
         var response = JSON.parse(xmlhttp.responseText);
  
  
         var passport_name = document.getElementById('passport_picture');
        // passport_name.innerHTML ="<img src='passport/"+response.list.passport_name+"'>";
  
         passport_name.innerHTML ="<img src='passport/"+response.list.passport_name+"'>";


         
         }

      }




xmlhttp.open('POST', 'image_upload2.php');
xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xmlhttp.send('identifier='+ identifier);


  
   }
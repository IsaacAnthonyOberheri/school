let all_sl = document.querySelectorAll('.btn_c');


var i;
for(i=0; i<all_sl.length; i++){
    var cc = document.querySelectorAll('.btn_c')[i];
    cc.addEventListener('click', clc);

    
}

var numb = parseInt(1);

var dd = parseInt(1)

//console.log('initial value = '+numb);


//getting width of the screen
var slide_1 = document.getElementById('slide1');
var width = slide_1.clientWidth;






function clc(){
    //alert(this.id);

    let all_sl = document.querySelectorAll('.sliders');
    var length = all_sl.length;
    //alert(length);
   
   // alert(width);
   


        
      if(numb !== length+1){
      //console.log('number ='+''+numb++);
      var new_numb = numb++;
      var increased_width = new_numb*-width;
    

       var slide_move = document.getElementsByClassName('slide_move')[0];

       //alert(slide_move.clientWidth);

       slide_move.style.transform = 'translateX('+increased_width+'px)';
       //slide_move.style.display = 'none';
       slide_move.style.transition = 'all 2s linear';

      //console.log(increased_width);

      console.log(new_numb);

      var slide1 = document.getElementById('slide1');
      var slide2 = document.getElementById('slide2');
      var slide3 = document.getElementById('slide3'); 
      var slide4 = document.getElementById('slide4');


      if(new_numb == 0){
       
        slide1.style.transform = 'scale(1.1,1.1)';
        slide1.style.transition = 'all 7s linear';

        slide2.style.transform = 'scale(1,1)';
        slide3.style.transform = 'scale(1,1)';
        slide4.style.transform = 'scale(1,1)';


        
      }

      if(new_numb == 1){
        
        slide2.style.transform = 'scale(1.1,1.1)';
        slide2.style.transition = 'all 7s linear';


        slide1.style.transform = 'scale(1,1)';
        slide3.style.transform = 'scale(1,1)';
        slide4.style.transform = 'scale(1,1)';
      }

      if(new_numb == 2){
       
        slide3.style.transform = 'scale(1.1,1.1)';
        slide3.style.transition = 'all 7s linear';


        slide2.style.transform = 'scale(1,1)';
        slide1.style.transform = 'scale(1,1)';
        slide4.style.transform = 'scale(1,1)';
      }

      if(new_numb == 3){
        
        slide4.style.transform = 'scale(1.1,1.1)';
        slide4.style.transition = 'all 7s linear';


        slide2.style.transform = 'scale(1,1)';
        slide3.style.transform = 'scale(1,1)';
        slide1.style.transform = 'scale(1,1)';
      }


      if(new_numb == 4){
        
        slide4.style.transform = 'scale(1,1)';
        slide4.style.transition = 'all 0s linear';


        slide2.style.transform = 'scale(1,1)';
        slide3.style.transform = 'scale(1,1)';
        slide1.style.transform = 'scale(1,1)';
        setTimeout(clc,1000);
      }
       
       
       

  
        
        
   

 
      if(numb == length+1){

        numb = 0;

        var new_numb = numb;
        var increased_width = new_numb*width;
    

        var slide_move = document.getElementsByClassName('slide_move')[0];

       //alert(slide_move.clientWidth);

       slide_move.style.transform = 'translateX('+increased_width+'px)';


        
        slide_move.style.transition = 'all 0s linear';

        slide1.style.transform = 'scale(1.1,1.1)';
        slide1.style.transition = 'all 7s linear';
      }
       
    }




}

clc();

setInterval(clc, 6500);

var back = document.getElementsByClassName('btn_c1')[0];

back.addEventListener('click', backward);

// function backward(){


//     var slide_1 = document.getElementById('slide1');
//     var width = slide_1.clientWidth;


//     var check = --numb;
//     var decrease = numb*width;

   
//         if(numb != 0){
            

//                  // console.log(numb--);
           
//                  var slide_move2 = document.getElementsByClassName('slide_move')[0];
//                  slide_move2.style.transform = 'translateX('+width+'px)';
          
//                  slide_move2.style.transition = 'all 2s linear';
          
             
             
//                  console.log('width = '+width);
//                  console.log('numb = '+numb);
//                  console.log(numb*width);
//         }
     
    
      
    
      
  

// }   
    


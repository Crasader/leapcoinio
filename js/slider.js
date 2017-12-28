



    var images1 = ["img/event10.jpg","img/flower4.jpg","img/fl3.jpg","img/event10.jpg","img/flower4.jpg"];

    var images2 = ["img/background2.jpg","img/background3.jpg","img/back3.jpg","img/background5.jpg","img/activities3.jpg"];
    

    var images3 = ["img/cater4.jpg","img/caterer5.jpg","img/catering3.jpg","img/catering6.jpg","img/catering7.jpg"];

    var images4 = ["img/cater4.jpg","img/caterer5.jpg","img/catering3.jpg","img/catering6.jpg","img/catering7.jpg"];

    var images5 = ["img/cater4.jpg","img/caterer5.jpg","img/catering3.jpg","img/catering6.jpg","img/catering7.jpg"];

    var images6 = ["img/flower4.jpg","img/background3.jpg","img/flower6.jpg","img/event10.jpg","img/back3.jpg"];

    var i = 0;

    function imageslider1(){
        document.getElementById('slider1').src= images1[i];

        if(i < images1.length - 1){
            i++;
        }else{
            i = 0;
        }

        setTimeout("imageslider1()",1205);
    }

    function imageslider2(){
        document.getElementById('slider2').src= images2[i];

        if(i < images2.length - 1){
            i++;
        }else{
            i = 0;
        }

        setTimeout("imageslider2()", 1300);
    }


function imageslider3(){
    document.getElementById('slider3').src=images3[i];
        if(i < images3.length -1){
            i++;
        }else{
            i = 0;
        }
        setTimeout("imageslider3()",1400);
 }


 function imageslider4(){
    document.getElementById('slider4').src=images4[i];
        if(i < images4.length -1){
            i++;
        }else{
            i = 0;
        }
        setTimeout("imageslider4()",1500);
 }



 function imageslider5(){
    document.getElementById('slider5').src=images5[i];
        if(i < images5.length -1){
            i++;
        }else{
            i = 0;
        }
        setTimeout("imageslider5()",1600);
 }



 function imageslider6(){
    document.getElementById('slider6').src=images6[i];
        if(i < images6.length -1){
            i++;
        }else{
            i = 0;
        }
        setTimeout("imageslider6()",1700);
 }
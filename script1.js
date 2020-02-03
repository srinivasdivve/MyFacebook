$(document).ready(function(){
    $("span").hide();
    
    var user_name=false;
    $('#email1').focusout(function(){
        checkusername();
    });
    
    function checkusername(){
        var x=document.getElementById("email1").value;
          if(x==""){
              
            $("span").html("This field is required");
            $("span").css("color","white");
              $("span").show();
            }
          if(validateEmail(x)==false){
            $("span").html("Please enter valid one");
              $("span").show();
           }
        
    }
             
    function validateEmail(email){
    var reg = /^([A-Za-z0-9.\-\_])+\@([A-Za-z0-9])+\.([a-zA-Z]{2,4})$/;
     var phoneno2 = /^([0-9]{10})$/;
    var phoneno1=/^([+]{1})+([0-9]{2})+([0-9]{10})$/;
   
    return (reg.test(email)||phoneno2.test(email)||phoneno1.test(email));
}
    
});

function validate(){
$(document).ready(function(){
    $('#submit2').click(function(){
        var x=document.getElementById("ip1").value;
        if(x==''){
        alert("Firstname field cannot be empty");
             return false;
        }
        
        var x=document.getElementById("ip2").value;
       if(x==''){
        alert("Surname field cannot be empty");
             return false;
       }
       var x=document.getElementById("ip3").value;
        if(x==''){
        alert("Email field cannot be empty");
             return false;
       }
       if(!validateEmail(x)){
         alert("Incorrect Email or Phone Number");
         return false;}
        
        var x= $('select[name="Day"] option:selected').text();
        var y= $('select[name="Month"] option:selected').text();
        var z= $('select[name="Year"] option:selected').text();
       
    
          
          if(x=="Day"||y=="Month"||z=="Year"){
          alert("Enter details of DOB");
             alert(x);
              alert(y);
              alert(z);
          return false;
          }
          
          if(x==31&&(y=="Feb"||y=="Apr"||y=="Jun"||y=="Sep"||y=="Nov"||y=="Dec")){
          alert("Incorrect Date");
          return false;}
          if(z%4==0&&x>29&&y=="Feb"){
          alert("Incorrect Date");
          return false;
          }
          if(y=="Feb"&&x>=29&&z%4!=0){
          alert("Incorrect Date");
          return false;
          }
          
         var x=document.getElementById("female").checked;
          var y=document.getElementById("male").checked;
          
          if(x==false&&y==false){
          alert("Gender is not given Please check");
          return false;
          }
          
       
    });
});

function validateEmail(email){
    var reg = /^([A-Za-z0-9.\-\_])+\@([A-Za-z0-9])+\.([a-zA-Z]{2,4})$/;
     var phoneno2 = /^([0-9]{10})$/;
    var phoneno1=/^([+]{1})+([0-9]{2})+([0-9]{10})$/;
   
    return (reg.test(email)||phoneno2.test(email)||phoneno1.test(email));
}
}





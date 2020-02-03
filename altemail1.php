

<html>
    <head>
    <style>
        body {font-family:'lucida grande',tahoma,verdana,arial,sans-serif;
              background-color:#9933ff;
           overflow: hidden;
           }
        #div1 { position: fixed;
width: 300px;
height: 220px;
top: 50%;
left: 50%;
margin-top: -110px; /* Negative half of height. */
margin-left: -150px; /* Negative half of width. */
 background-color:#ff33cc;
        text-align:centre;}
        
        form {position: absolute;
            margin-left:40px;
             margin-top:20px;}
        
        
        </style>
    
    </head>
<div id="div1">
<form action="page7.php" method="post" >
Email or Phone:<br>
<input type="text" name="email" id="email1" autocomplete="off" required><br>
<br><br>
Password:<br>
<input type="password" name="passwd" id="passwd" autocomplete="off" required/><br><br>

Alternate Phone: <br>
<input type="text" name="altno" id="altno" autocomplete="off" required/>
<input type="submit" value="Submit" onclick="return validateno()" required />

</form>
    </div>
<script>
function validateno(){
 
var no=document.getElementById("altno").value;
  //alert(no);
 var phoneno2 = /^([0-9]{10})$/;
 var phoneno1=/^([+]{1})+([0-9]{2})+([0-9]{10})$/;
 
 if(phoneno2.test(no)||phoneno1.test(no)){
 return true;}
 else{
 alert("Incorrect Phone Number");
 event.preventDefault();
 return false;}
}

</script>




</html>



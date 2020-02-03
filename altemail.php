<html>

<form action="altemail.php" method="post" onsubmit="validateno()">
Alternate Email or Phone: <br>
<input type="text" name="altno" id="altno" />
<input type="submit" value="Submit"/>

</form>
<script>
function validateno(){
 
var no=document.getElementById("altno").value;
  //alert(no);
 var phoneno2 = /^([0-9]{10})$/;
 var phoneno1=/^([+]{1})+([0-9]{2})+([0-9]{10})$/;
 alert(phoneno2.test(no));
 alert(phoneno1.test(no));
 if(phoneno2.test(no)||phoneno1.test(no)){
 return true;}
 else{
 alert(no);
 return false;}
}

</script>
<?php
$a=$_POST["altno"];
echo $a;

?>



</html>

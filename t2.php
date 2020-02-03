<?php
$servername="localhost";
$username="root";
$password="jaya";
$dbname="fbusers";
$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
die("Connection failed:". $conn->connect_error);
}



    
$Fname=$_POST['fname'];
$Sname=$_POST['sname'];
$Email=$_POST['email'];
$Password=$_POST['newpasswd'];
$BDate =$_POST['Day']; 
$BMonth=$_POST['Month'];
$BYear=$_POST['Year'];
$Gender=$_POST['gender'];


$sql="INSERT INTO Fbaccountdetails(Firstname,Surname,MobileorEmail,Password,BirthDate,BirthMonth,BirthYear,Gender) VALUES('$Fname','$Sname','$Email','$Password','$BDate','$BMonth','$BYear','$Gender')";
if($conn->query($sql)===TRUE){
    echo "Record created Success";
}
else{
    echo " Email or Phone Number Already Used.Please Use a New One".$conn->error;
    exit;
}
$conn->close();

?>
<html>
    <br>
<a href="test.html">Click here to Create Another Account or to login</a>
</html>

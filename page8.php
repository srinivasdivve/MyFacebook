<?php

$servername="localhost";
$username="root";
$password="jaya";
$dbname="fbusers";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn->connect_error){
die("Database connection failed:".$conn->connect_error());
}
$Fname=$_POST['fname'];
$Sname=$_POST['sname'];
$Email=$_POST['email'];
$BDate =$_POST['Day']; 
$BMonth=$_POST['Month'];
$BYear=$_POST['Year'];
$Gender=$_POST['gender'];

    
  $sql1="update Fbaccountdetails set Firstname='$Fname',Surname='$Sname',BirthDate='$BDate',BirthMonth='$BMonth', BirthYear='$BYear', Gender='$Gender' where MobileorEmail='$Email'";
/*$sql2="update Fbaccountdetails set Surname='$Sname' where MobileorEmail='$Email'";
$sql3="update Fbaccountdetails set BirthDate='$BDate' where MobileorEmail='$Email'";
$sql4="update Fbaccountdetails set BirthMonth='$BMonth' where MobileorEmail='$Email'";
$sql5="update Fbaccountdetails set BirthYear='$BYear' where MobileorEmail='$Email'";
  $sq6="update Fbaccountdetails set Gender='$Gender' where MobileorEmail='$Email'";*/

   if($conn->query($sql1)===TRUE){
   echo "Details Updated "."<br>"."<a href='test.html'>"."Click here to go to login Page"."</a>";
   }
   else
   {
   echo "Error Occured"."<a href='test.html'>"."<br>"."Click here to go to login Page"."</a>".$conn->error;
   }



?>

<html>


</html>







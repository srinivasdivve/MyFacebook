<html>
    <head>
    <style>
        body {
             font-family:'lucida grande',tahoma,verdana,arial,sans-serif;
              background-color:#9933ff;
           overflow: hidden;
            color:white;
        }
        a {color:white;
           }
    
    </style>
    
    </head>
  


</html>


<?php

$servername="localhost";
$username="root";
$password="jaya";
$dbname="fbusers";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn->connect_error){
die("Database connection failed:".$conn->connect_error());
}
$Email=$_POST['email'];
$Password=$_POST['passwd'];
$newPassword=$_POST['newpasswd'];

$sql="SELECT * FROM Fbaccountdetails WHERE MobileorEmail='$Email' ";
$test=$conn->query($sql);
if($test->num_rows>0){
     while($row = $test->fetch_assoc()) {
       $a= $row["Password"];
     }
}
if($a==$Password){
  
  $sql="update Fbaccountdetails set Password='$newPassword' where MobileorEmail='$Email'";
   if($conn->query($sql)===TRUE){
   echo "Password Updated "."<br>"."<a href='test.html'>"."Click here to go to login Page"."</a>";
   }
   else
   {
   echo "Error Occured"."<br>"."<a href='test.html'>"."Click here to go to login Page"."</a>";
   }

}
else
{
 
echo "Incorrect Password"."<br>";
echo "<a href='test.html'>"."Click here to go to login Page"."</a>";
exit;
}
?>










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
    
    
    <br>
    <a href="test.html">Click here to go to Home page</a>
    <br>
</html>




<?php
$servername="localhost";
$username="root";
$password="jaya";
$dbname="fbusers";
$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
die("Connection failed:". $conn->connect_error);
}


$Email=$_POST['email'];
$Password=$_POST['passwd'];

$sql="SELECT * FROM Fbaccountdetails WHERE MobileorEmail='$Email' ";
$test=$conn->query($sql);
if($test->num_rows>0){
     while($row = $test->fetch_assoc()) {
       $a= $row["Password"];
     }
}
else
{
    echo "No account Exist"."<br>";
    exit;
}


if($a==$Password){
$sql="DELETE FROM Fbaccountdetails WHERE MobileorEmail='$Email'";
if($conn->query($sql)===TRUE){
    echo "Successfully Deleted"."<br>";
}}
else{
 echo "Password is incorrect".$conn->error;
}
$conn->close();

?>

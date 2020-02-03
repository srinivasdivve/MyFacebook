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


$sql="SELECT * FROM Fbaccountdetails WHERE MobileorEmail='$Email' ";
$test=$conn->query($sql);

if($test->num_rows>0){
    
    echo "<div id='div1'>"."A Link will be Sent to Following Email Address or PhoneNumber $email". " Use it to login"."</div";
}
else
{
    echo "<div id='div1'>"."No account exists.Please create one";
}





?>
<html>
<head>
    <style>
        body {background-color: palegreen;
               color:black;}
    
    </style>
    
    </head>

</html>


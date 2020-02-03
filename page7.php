<?php


$servername="localhost";
$username="root";
$password="jaya";
$dbname="fbusers";
$conn = mysqli_connect($servername,$username,$password,$dbname);


if($conn->connect_error){
die("Database connection failed:".$conn->connect_error());
}
/*
echo "Hello";
*/
if($flag==0){
$sql="ALTER TABLE Fbaccountdetails ADD COLUMN Alternate_Phone_Number VARCHAR(30) DEFAULT NULL";
   $conn->query($sql);
    $flag=1;
}



$alt=$_POST['altno'];
$email=$_POST['email'];
$passwd=$_POST['passwd'];
//echo $alt;
$sql="SELECT * FROM Fbaccountdetails WHERE MobileorEmail='$email' ";
$test=$conn->query($sql);
if($test->num_rows>0){
     while($row = $test->fetch_assoc()) {
       $a= $row["Password"];
     }
}
if($a==$passwd){
  
  $sql="update Fbaccountdetails set Alternate_Phone_Number='$alt' where MobileorEmail='$email'";
   if($conn->query($sql)===TRUE){
   echo "<h1>"."Alternate Phone Number created succesfully"."</h1>"."<br>"."<a href='test.html'>"."Click here to go to login Page"."</a>";
   }
   else
   {
   echo "Error Occured"."<a href='test.html'>"."Click here to go to login Page"."</a>".$conn->error;
   }

}
else
{
echo "Incorrect Password";
echo "<a href='test.html'>"."Click here to go to login Page"."</a>";
exit;
}

    











/*

$sql="update Fbaccountdetails set Alternate_Phone_Number='$a' where MobileorEmail='$b'";
if($conn->query($sql)===TRUE){
echo "hi";
//echo "<h1>"."Alternate Phone Number created succesfully"."</h1>"."<br>"."<a href='test.html'>"."Click here to go to login Page"."</a>";

}
else
{
echo "bye";
//echo "Cannot Create Alternate Phone Number.Please Try Again"."<br>"."<a href='test.html'>"."Click here to go to login Page"."</a>"
}
*/
$conn->close();
?>
<html>
<head>
    <style>
        body {
             font-family:'lucida grande',tahoma,verdana,arial,sans-serif;
              background-color:#9933ff;
           overflow: hidden;
            color:white;
        }
        a {color:white;}
    
    </style>
    
    </head>
</html>


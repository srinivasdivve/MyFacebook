<?php
$servername="localhost";
$username="root";
$password="jaya";
$dbname="fbusers";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn->connect_error){
die("Database connection failed:".$conn->connect_error());
}
?> 


<img src="info_24.png"/>
        
    <strong>About</strong>
    <br><br><br><br>
   
    
        <?php 
        $email=$_GLOBAL['email'];
       $sql="select * from Fbaccountdetails where MobileorEmail='$email'";
       $result=$conn->query($sql);
       
      
       while($row = $result->fetch_assoc()){
        
echo "&nbsp;&nbsp;&nbsp;"."FirstName : ".$row["Firstname"]."<br>"."<br>"."&nbsp;&nbsp;&nbsp;"."Surname : ".$row["Surname"]."<br>"."<br>";
echo "&nbsp;&nbsp;&nbsp;"."Email Address or MobileNumber : ".$email."<br>"."<br>";
echo "&nbsp;&nbsp;&nbsp;"."Born : ".$row["BirthDate"]."-".$row["BirthMonth"]."-".$row["BirthYear"]."<br>";
          
}
       
?>
 <br><br><br><br><br><br>

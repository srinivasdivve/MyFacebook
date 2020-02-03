<html>
<head>
<style>
body {background-color:#DFE2DB;
              color:black;}
 
             

</style>

</head>
<body>
<?php
$servername="localhost";
$username="root";
$password="jaya";
$dbname="fbusers";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn->connect_error){
die("Database connection failed:".$conn->connect_error());
}

$email=$_POST['email'];
$passwd=$_POST['passwd'];
    

$sql="select * from Fbaccountdetails where MobileorEmail='$email' and Password='$passwd' ";
$result=$conn->query($sql);
if($result->num_rows > 0){
   $row = $result->fetch_assoc();
     
       //echo "<h1 id='hea1'>"."Welcome to Timeline"."</h1>";
}
else
{
   echo "<h1>"."No Account Exist.Please Create an Account"."<h1>";
    exit;
}
session_start();
$_SESSION['myValue']=$email;

?>
    
    <div id="div1">
    <h1>Welcome to Timeline</h1>
    <h3>Settings</h3>
     Add an alternate Phone Number
      <a href="altemail.html">Click here to Add</a><br><br>
     <a href="sat1.html"><input type="button" value="Change Password"/></a><br><br>
    <a href="page2.php"><input type="button" value="Friends"/></a><br><br>
    <a href="satheesh.html"><input type="button" value="Delete account"/></a><br><br>
    </div>
    
    
    
    
    </body>
</html>   

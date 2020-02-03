<?php
$servername="localhost";
$username="root";
$password="jaya";
$dbname="fbusers";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn->connect_error){
die("Database connection failed:".$conn->connect_error());
}


   
    $sql = "CREATE TABLE Fbaccountdetails(Firstname VARCHAR(30) NOT NULL,Surname VARCHAR(30) NOT NULL,MobileOrEmail VARCHAR(30) NOT NULL PRIMARY KEY,Password VARCHAR(30) NOT NULL,BirthDate INT NOT NULL,BirthMonth VARCHAR(5) NOT NULL,BirthYear INT NOT NULL,Gender VARCHAR(10) NOT NULL )";


    if($conn -> query($sql)===TRUE){
        echo "Table created";
        
    }
    else
    {
        echo "Error". $conn->error;
    }
    
    




?>

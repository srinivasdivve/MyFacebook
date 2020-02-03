
<?php
$servername="localhost";
$username="root";
$password="jaya";
$dbname="fbusers";
$conn = mysqli_connect($servername,$username,$password,$dbname);


if($conn->connect_error){
die("Database connection failed:".$conn->connect_error());
}

$q = $_REQUEST['q'];

$hint="";

$sql="select Firstname from Fbaccountdetails";
$result=$conn->query($sql);

if ($result->num_rows > 0) {
    
 
    $q = strtolower($q);
    $len=strlen($q);
     while($row = $result->fetch_assoc()) {
        if (stristr($q, substr($row['Firstname'], 0, $len))) {
            if ($hint === "") {
                
                $hint = $row['Firstname'];}
             
            else{
            
                $hint=$hint.", ".$row["Firstname"];
            }
        } }}

echo $hint;

$conn->close();
?>
        





<html>
<?php
$servername="localhost";
$username="root";
$password="jaya";
$dbname="fbusers";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn->connect_error){
die("Database connection failed:".$conn->connect_error());
}




$sql="select * from Fbaccountdetails";

$result=$conn->query($sql);

if($result->num_rows > 0)
{
 //echo $result->num_rows;

 
while($row=$result->fetch_assoc()){
    echo "<div id='div1'>";
    if($row['Gender']==Male){
        echo "<img src='pic1.jpg'/>"."<br>";
    }
    else{
        echo "<img src='pic2.jpg'/>"."<br>";
    }
echo $row["Firstname"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ";
echo $row["BirthDate"]."-".$row["BirthMonth"]."-".$row["BirthYear"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";

    echo "<input type='button' value='Add Friend' id='friend1'/>";
    echo "</div>";
    echo "<br>";
}


}
else
{
echo " FriendList is Empty";
}

$conn->close();
?>

<head>
<style>
    

 #diva {  
         margin:30px;
         color:blue;
         font-size:20px;
        background-color:pink;
        }
    #diva img {width:60px;
               height:60px;
              }
   

</style>
    
</head>
    <script>
       $(document).ready(function(){
         $('#friend1').click(function(){
             document.getElementById('friend1').value="Friend Request Sent";
         })  
       });
    </script>
    
    
</html>





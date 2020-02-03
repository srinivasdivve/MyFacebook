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
   while($row = $result->fetch_assoc()){
   $a=$row["Firstname"];
   }
    
}
else
{
   echo "<h1>"."No Account Exist.Please Create an Account"."<h1>";
    exit;
}


 ?>

<html>
   
<head>
    <script>
function showUser(str) {
  // document.getElementById("txtHint").innerHTML="jp";
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
     xmlhttp=new XMLHttpRequest();
  } else { 
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","getuser.php?q="+str,true);
  xmlhttp.send();
}
</script>
     <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="jscript1.js"></script>
    <script type="text/javascript" src="myscript2.js"></script>
    <style>
        body {background-color:  #f2f2f2;
                   font-family:'lucida grande',tahoma,verdana,arial,sans-serif;   
                 overflow-y:auto;  
                 overflow-x:hidden;
                 position:relative;
                 height:110%;
              }
        input {}
        img {border:3px solid white;}
        div { background-color:white;}
        #div1 {margin:-40px -30px 0px -10px;
            
              background-color:#365899;
                height:50px;
                }
        #tab1 tr td a {
                     text-align: center;
                     padding: 14px 16px;
                     display:block;
                    text-decoration: none;
                    color:white;
                   
        }
         #home {float:left;}
        #home li a{ display:block;
               list-style-type:none;
               text-align: centre;
                padding:12px;
               text-decoration:none;
               color:blueviolet;}
       
        #profile1 {position:relative;}
         
        #profile2 {margin-left:0px;position:relative;}
        #profile2 li {display:inline-block;}
        #profile2 li a { text-align: center;
                       color:#365899;
                     padding: 14px 16px;
                     display:block;
                      text-decoration: none;
                    }
        #tab1 tr td a:hover{ background-color:black}
        #profile2 li a:hover {background-color:e6e6ff;
                              }
       
        #search{
             margin-left:15px;
            width:120%;
            padding:6px 8px;
            box-sizing:borderbox;
        }
        #Timeline {position:absolute;
                   margin-top:500px;
                   margin-left:280px;
                   width:500px;
                   height:100%;}
       #about {position:absolute;
               margin-top:500px;
               margin-left:280px;
               width:500px;
               height:100%;
              background-color:gray;
                }
        #about img {width:30px;
                    height:30px;}
       #friendlst {position:absolute;
               margin-top:500px;
               margin-left:280px;
               width:500px;
               height:100%; }
        #editprofile { position:absolute;
                    cursor:pointer;
               margin-top:500px;
               margin-left:280px;
               width:500px;
               height:100%; }
        
        #editprofile {}
  #editprofile  #ip1,#ip2,#ip3,#ip4,#ip5 {
                background-color: #ffff4d;
                width:250px;
                padding:10px 5px;
                border-radius:5px;
                margin-bottom: 15px;
          }
        #submit2 { padding:10px 5px;
                   background-color: deeppink;
                   color:white}
        
         #diva {  
         margin:30px;
         color:blue;
         font-size:20px;
        background-color:white;
        }
    #diva img {width:60px;
               height:60px;
              }
       #editprofile  #sel1,#sel2,#sel3   {
                         position:relative;
                         }

#editprofile  #sel1 {padding:3px 5px;
           }
#editprofile  #sel2 {margin-left:-250px;
           padding:3px 5px; }
#editprofile  #sel3 {padding:3px 3px;
         margin-left:-200px;}
#editprofile  #male {margin-left:-160px;}     
    
       
    </style>
    
    </head>
    
<body>
   <h1> facebook</h1><br>
    <div id="div1">
    <table id="tab1">
        <tr>
            
    <td> <form><input type="text" name="search" id="search" placeholder="Search" onkeyup="showUser(this.value)"
                      autocomplete="off"/></form></td>
    <td><a href="nonet.html" style="margin-left:50px;"><?php echo "$a";?> </a></td>
    <td><a href="nonet.html">Home</a></td>
    <td><a id="friends">Friend Requests</a></td>
    <td><a href="nonet.html">Messages</a></td>
    <td><a href="nonet.html">Notifications</a></td>
    <td><a href="nonet.html">Privacy Shortcuts</a></td>
    <td><a href="test.html">Logout</a></td>
        </tr>
    </table>
    </div>
    <div id="home">
        <div id="txtHint">Suggestion</div>
        <ul>
            
             <li><a id="edit1" style="cursor:pointer;">EDIT PROFILE</a></li>
            <li><a href="sat1.php" style="cursor:pointer;">CHANGE PASSWORD</a></li>
             <li><a href="satheesh.php" style="cursor:pointer;">DELETE ACCOUNT</a></li>
            <li><a  id="friends1" style="cursor:pointer;">FRIENDS</a></li>
            <li><a href="altemail1.php" style="cursor:pointer;">ADD PHONENUMBER</a></li>
         </ul>
        
        
    </div>
    <div style="float:left;margin-left:30px;margin-top:30px">
    <div id="profile1">
        <img src="jp1.jpg" alt="coverphoto" style="height:350px; width:600px; "/>
        <img src="jp2.jpg" alt="profilepic" style="height:140px; width:140px; position:absolute; top:200px; left:10px; z-index:1"/>
        
</div>
        <div id="profile2">
        <ul>
        <li><a onClick="load1()" id="time1">Timeline</a></li>
        <li><a onClick="load2()" id="about1">About</a></li>
        <li><a  id="friends2" >Friends</a></li>
        <li><a href="nonet.html">Photos</a></li>
        <li><a href="nonet.html">More</a></li>
        
        </ul>
    
    </div>
    </div>
        
    <div id="Timeline">
         
         <h3>Welcome <?php echo "$a"; ?></h3>
        <br>
         <h4>News Feed</h4>
          <img src="jp3.jpg" alt="image1" style="height:240px; width:240px; "/>
           
        <br>
          <img src="jp4.jpg" alt="image2" style="height:240px; width:240px; "/>
        <br> <br> <br> <br>
        
</div>
    <div id="about">
    <img src="info_24.png"/>
        
    <strong>About</strong>
    <br><br><br><br>
    
    
        <?php 
       $sql="select * from Fbaccountdetails where MobileorEmail='$email' and Password='$passwd' ";
       $result=$conn->query($sql);
       
      
       while($row = $result->fetch_assoc()){
        
echo "&nbsp;&nbsp;&nbsp;"."FirstName : ".$row["Firstname"]."<br>"."<br>"."&nbsp;&nbsp;&nbsp;"."Surname : ".$row["Surname"]."<br>"."<br>";
echo "&nbsp;&nbsp;&nbsp;"."Email Address or MobileNumber : ".$email."<br>"."<br>";
echo "&nbsp;&nbsp;&nbsp;"."Born : ".$row["BirthDate"]."-".$row["BirthMonth"]."-".$row["BirthYear"]."<br>";
          
}
       
?>
 <br><br><br><br><br><br> 
    </div>
    
    <div id="friendlst">
    <?php
    $sql="select * from Fbaccountdetails where MobileorEmail<>'$email' ";

$result=$conn->query($sql);

if($result->num_rows > 0)
{
 //echo $result->num_rows;

 
while($row=$result->fetch_assoc()){
    echo "<div id='diva'>";
    if($row['Gender']==Male){
        echo "<img src='pic1.jpg'/>"."<br>";
    }
    else{
        echo "<img src='pic2.jpg'/>"."<br>";
    }
echo $row["Firstname"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ";
echo $row["BirthDate"]."-".$row["BirthMonth"]."-".$row["BirthYear"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";

    echo "<input type='button'  onclick='this.value=\"Friend Request Sent\"' value='Add Friend' id='friend1'/>";
    echo "</div>";
    echo "<br>";
}


}
else
{
echo " FriendList is Empty";
}


?>
    
    </div>
    
    <div id="editprofile" style="background-color:pink">
    
        
      <table>
        <form action="page8.php" method="post" name="form2">
        
        
               
               <tr>First Name:<input type="text" name="fname"  placeholder="First Name" id="ip1" autocomplete="off" required/></tr>
            
               <tr><br><br><br>SurName:<input type="text" name="sname"  placeholder="SurName" id="ip2" autocomplete="off" required/></tr>
        
           
         <tr>  <br>
                 <td>Old Email:<input type="text" name="email" value="" placeholder="Mobile Number or email Address" id="ip3" autocomplete="off" required/></td>
       
        </tr>
             <tr>
                 <br>
                  <td> Birthday</td>
      </tr>
            
                   
<tr id="tr6">
<p>
            <td id="td1"> 
                <select name="Day" id="sel1">
                      <option value="Day">Day</option>
                      <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option>
                      <option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option>
                    <option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>
                    
              </select>
            </td>  
         <td id="td2">
             <select name="Month" id="sel2">
             <option value="Month">Month</option> <option value="Jan">Jan</option> <option value="Feb">Feb</option> <option value="Mar">Mar</option> <option value="Apr">Apr</option> <option value="May">May</option> <option value="Jun">Jun</option> <option value="Jul">Jul</option> <option value="Aug">Aug</option> <option value="Sep">Sep</option> <option value="Oct">Oct</option> <option value="Nov">Nov</option> <option value="Dec">Dec</option>
                 
             
            </select>
       </td>
       <td id="td3"> 
             <select name="Year" id="sel3">
            <option option="Year">Year</option><option option=1980>1980</option><option option=1981>1981</option><option option=1982>1982</option><option option=1983>1983</option><option option=1984>1984</option><option option=1985>1985</option><option option=1986>1986</option><option option=1987>1987</option><option option=1988>1988</option><option option=1989>1989</option><option option=1990>1990</option><option option=1991>1991</option><option option=1992>1992</option><option option=1993>1993</option><option option=1994>1994</option><option option=1995>1995</option><option option=1996>1996</option><option option=1997>1997</option><option option=1998>1998</option><option option=1999>1999</option><option option=2000>2000</option><option option=2001>2001</option><option option=2002>2002</option><option option=2003>2003</option><option option=2004>2004</option><option option=2005>2005</option><option option=2006>2006</option><option option=2007>2007</option><option option=2008>2008</option><option option=2009>2009</option><option option=2010>2010</option><option option=2011>2011</option><option option=2012>2012</option><option option=2013>2013</option><option option=2014>2014</option><option option=2015>2015</option><option option=2016>2016</option>
              </select>
       </td>
</p>
         
 </tr>
            <tr>      
         
       <td>Gender &nbsp;&nbsp;&nbsp;:<input type="radio" name="gender" value="Female" id="female" autocomplete="off"/>&nbsp;<label for="female">Female</label></td>
       <td> <input type="radio" name="gender" value="Male" id="male" autocomplete="off"/>&nbsp;<label for="male">Male</label>  </td>
    
</tr>
             <tr>            
              <td><input type="submit" value="Submit" id="submit2" onClick="return validate()"/></td>
 </tr>
        </form>
            
        </table>
        
        
        
    
    </div>
    
 </body>

</html>


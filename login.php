<html>
<head>
        <title>login</title>
        <style>
            #forms{
                width: 500px;
                padding:40px;
                background-color:rgba(0,0,0,0.1);
                box-shadow:0 0 1px #333;
                margin-left: auto;
                margin-right: auto;
                margin-top:50px;
                font-family:sans-serif;
                font-size:15px;
            }
            .input-item{
               margin-top: 12px;
               margin-bottom: 12px;
               width:100%;
               padding:10px;
            
            }
            body{
                background-image:url(https://tse1.mm.bing.net/th?id=OIP.S-jVmwn_YNAVN9w2b5wt1AHaEK&pid=Api&rs=1&c=1&qlt=95&w=167&h=93);
                background-repeat:no-repeat;
                background-size:cover;
        
            }
        </style>
  </head>
    <body >
    
       <form id="forms" action="sample.php" method=POST>
       <h1 style="text-align:center ;color:black;font-style: italic;">COURSE LOGIN FORM</h1>
          <p><b>ROLL NUMBER:</b></p><input class="input-item" type="text" name="rollnumber" required><br>
          <p><b>PASSWORD:</b></p><input class="input-item" type="password" name="password" minlength="8" maxlength="20" required><br>
          <input style ="font-size: 15px; border: 0px;background:black; color: #fff; cursor: pointer; border-radius: 3px; text-alignoutline: none;" 
class="input-item" name="login" type="submit" value="LOGIN">
        </form>
    </body>
</html>
<html>
    <head>
        <title>forms</title>
        <style>
            #forms{
                width: 500px;
                padding:40px;
                background-color:rgba(0,0,0,0.1);
                box-shadow:0 0 1px #333;
                font-family:sans-serif;
                font-size:15px;
                margin-left: auto;
                margin-right: auto;
            }
            .input-item{
               margin-top: 12px;
               margin-bottom: 12px;
               width:100%;
               padding:10px;
            
            }
            body{
                background-image:url(https://tse4.mm.bing.net/th?id=OIP.2ESBLR5Mnv0IRtnsrJeUowHaEK&pid=Api&P=0&w=292&h=165);
                background-repeat:no-repeat;
                background-size:cover;

            }
        </style>
    </head>
    <body>
        
        <form id="forms" action="register.php" method=POST>
        <h1 style="text-align:center ;color:black;font-style: italic;">COURSE REGISTRATION FORM</h1>
            <p><b>FULLNAME:</b></p>
            <input class="input-item" type="text" name="Fullname" maxlength="20" required><br>
            <p><b>EMAIL ID:</b></p><input  class="input-item" type="text" name="email"  required><br>
             <p><b>PASSWORD:</b></p><input class="input-item" type="password" name="password" minlength="8" maxlength="20" required><br>
             <p><b>CONFIRM PASSWORD:</b></p><input class="input-item" type="password" name="conpass"minlength="8" maxlength="20" required>
             <p><b>ROLL NUMBER:</b></p><input class="input-item" type="text" name="rollnumber" required><br>
             <p><b>DATE OF BIRTH:</b></p><input class="input-item" type="date" name="date" required><br> 
             <div>
                 <p><b>GENDER:</b></p>
                 <input type="radio" name="gender" value="male">Male</input>
                 <input  type="radio" name="gender"  value="Female">Female</input>
                 <input  type="radio" name="gender"  value="other">other</input>
             </div>
             <div>
                 <p><b>DEPARTMENT:</b></p>
                 <input class="input-item" name="department" list="Department" />
                 <datalist id="Department">
                    <option  value="Computer Science And Engineering"></option>
                    <option  value="Mechanical Engineering"></option>
                    <option   value="Information Technology"></option>
                    <option  value="Production Enginneering"></option>
                    <option  value="Electrical And Communication Engineering"></option>
                    <option  value="Electrical And Electronics Engineering"></option>
                    <option  value="Instrumentation Enginneering"></option>
                 </datalist>
                 <p><b>COURSE:</b></p>
                 <input type="radio" name="courses" value="Object Oriented Programming In C++">Object Oriented Programming In C++</input><br>
                 <input type="radio" name="courses" value="Programming In Java">Programming In Java</input><br>
                 <input type="radio" name="courses" value="Big Data Science">Big Data Science</input><br>
                 <input type="radio" name="courses" value="Network Essentials">Network Essentials</input><br>
                 <input type="radio" name="courses" value="Biology For Engineers">Biology For Engineers</input><br>
                 <input type="radio" name="courses" value="Virtual Instrumentation">Virtual Instrumentation</input><br>
                 <input type="radio" name="courses" value="Computational Biology">Computational Biology</input><br>
                 <input type="radio" name="courses" value="Fundamentals Of Bioengineering">Fundamentals Of Bioengineering</input><br>
                 <input type="radio" name="courses" value="Climate Change And Adaption">Climate Change And Adaption</input><br>
                 <input type="radio" name="courses" value="Disaster Management And Mitigation">Disaster Management And Mitigation</input><br>
                 <input type="radio" name="courses" value="Mechatronics">Mechatronics</input><br>
                 <input type="radio" name="courses" value="Energy Efficient Buildings">Energy Efficient Buildings</input><br>
                 <input type="radio" name="courses" value="Cyber Security">Cyber Security</input><br>
                 <input type="radio" name="courses" value="Introduction To Web Technology">Introduction To Web Technology</input><br>
                 <input type="radio" name="courses" value="Cloud Engineering">Cloud Engineering</input><br>
                 <input type="radio" name="courses" value="Programming In C">Programming In C</input><br>
                 <input type="radio" name="courses" value="Programming In C++">Programming In C++</input><br>
             </div>
             <input style=" font-size: 15px; border: 0px;background:black;color:#fff;white cursor: pointer; border-radius: 3px; text-alignoutline: none;" 
 class="input-item" name="register" type="submit" value="REGISTER">
        </form>
    </body>
</html>
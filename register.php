<?php
  
        $conn = new mysqli("localhost","root","","project");
 if(!$conn){
    die("From is not connected to the database".mysqli_error());
 }
else{
    if(isset($_POST['register']))
    {
        $fullname = mysqli_real_escape_string($conn,$_POST['Fullname']) ;
        $email = mysqli_real_escape_string($conn,$_POST['email']) ;
        $password = mysqli_real_escape_string($conn,$_POST['password']) ;
        $conpass =mysqli_real_escape_string($conn,$_POST['conpass']) ;
        $rollnum = mysqli_real_escape_string($conn,$_POST['rollnumber']) ;
         $dob = mysqli_real_escape_string($conn,$_POST['date']) ;
        $gender = mysqli_real_escape_string($conn,$_POST['gender']) ;
        $dep = mysqli_real_escape_string($conn,$_POST['department']) ;
        $course = mysqli_real_escape_string($conn,$_POST['courses']) ;
    if($password==$conpass){
        $sql = "INSERT INTO register(Fullname,email,password,conpass,rollnumber,date,gender,department,courses) VALUES('$fullname','$email','$password','$conpass','$rollnum','$dob','$gender','$dep','$course')";
        $result = mysqli_query($conn,$sql);
        if(!$result)
        {
            echo "Not registered";
        }
        else{
            echo "Registered Successfully";
        }
        mysqli_close($conn);
    }
      else
      {
          echo "Password not matched.....Registration unsuccessful:(";
      }
    }

}
  
?>

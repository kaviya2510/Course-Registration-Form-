<?php
$connect=mysqli_connect("localhost","root","","project") or die("Connection is failed");
if(isset($_POST['login']))
{
    $username=$_POST['rollnumber'];
    $password1=$_POST['password'];
    $query="select fullname,rollnumber,courses from register where rollnumber='$username' and password='$password1' ";
    $result=mysqli_query($connect,$query);
    $row=mysqli_fetch_array($result);
    $name=$row[0];
    $rollnum=$row[1];
    $course=$row[2];
    $count=mysqli_num_rows($result);
    if(mysqli_num_rows($result)>0 ){
       echo "Logged in successfully And your registered courses is shown below";
       echo "<br>";
       echo $name;
       echo "---";
       echo $rollnum;
       echo "---";
       echo $course;
      
    
    }
    else
      echo "Failed to login...:( Incorrect username or password";

}
?>
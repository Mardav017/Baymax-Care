<?php 
session_start();
include 'signupdbconnection.php';

if($_SERVER["REQUEST_METHOD"] == "POST")
{  
    $fname=$_POST['fname'];
    $phone=$_POST['phone'];
    $mail=$_POST['mail'];
    $date=$_POST['date'];
    $pswd=$_POST['pswd'];
    $cpswd=$_POST['cpswd'];
    $exists=false;
    if(($pswd== $cpswd))
   $var= "INSERT INTO `signup` (`fname`, `phone`, `mail`, `date`, `pswd`, `cpswd`) 
   VALUES ('$fname', '$phone', '$mail', '$date', '$pswd', '$cpswd')" ;
   $data = mysqli_query($conn,$var);

   if($data)
    {
        header("Location:http://localhost/Project/login/login.php");
    }
    else
    {
        echo "Data insertion failed!!!! Please try again";
        header("Location:http://localhost/signup/signup.php");
    }



}

?>
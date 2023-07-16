<?php
session_start();


 $email = $_POST['mail'];
 $password = $_POST['pswd'];

$conn = new mysqli('localhost','root','','signup');
 if($conn->connect_error){
    die("failed to connect:".$conn->connect_error);
 }
 else{
    $stmt = $conn->prepare("SELECT * FROM Drsignup WHERE mail = ?");
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows>0){
        $data = $stmt_result->fetch_assoc();
            if($data['pswd']===$password){
                $_SESSION['mail']=$data['mail'];
        
                //header("Location: demo.php");
                header("Location:http://localhost/Baymax%20Care/Drlogin/home/Doctor_Home.php");
            }
            else{
                
                header("Location:http://localhost/Baymax%20Care/Drlogin/Drlogin.php");
                exit();
            }
        }
    else{    
        header("Location:Drlogin.php");
        exit();
    }
 }
?>
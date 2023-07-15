<?php
session_start();
include 'logindbconnection.php';

 $email = $_POST['mail'];
 $password = $_POST['pswd'];

$conn = new mysqli('localhost','root','','signup');
 if($conn->connect_error){
    die("failed to connect:".$conn->connect_error);
 }
 else{
    $stmt = $conn->prepare("SELECT * FROM signup WHERE mail = ?");
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows>0){
        $data = $stmt_result->fetch_assoc();
            if($data['pswd']===$password){
                $_SESSION['mail']=$data['mail'];
        
                //header("Location: demo.php");
                header("Location:http://localhost/Project/User%20page/user_homepage.php");
            }
            else{
                header("Location:http://localhost/Project/login/login.php");

                exit();
            }
        }
    else{    
        header("Location:http://localhost/Project/login/login.php");
        exit();
    }
 }
?>
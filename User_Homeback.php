<?php
session_start();
$search=$_POST['find'];
$conn = new mysqli('localhost','root','','signup');
ECHO $search;
if($conn->connect_error){
    die ("failed to connect:".$conn->connect_error);

}
else{
    $stmt= $conn->prepare("SELECT * FROM medicine WHERE medicinename=?");
    $stmt->bind_param("s",$search);
    $stmt->execute();
    $stmt_result=$stmt->get_result();
    if($stmt_result->num_row>0){
        $data=$stmt_result->fetch_assoc();
        echo $data['_id'];
    }
}

?>
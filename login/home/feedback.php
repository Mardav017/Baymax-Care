<?php
// include 'dbconnection.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "signup";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name = $_POST["yourname"];
$phone = $_POST["phonenumber"];
$feed = $_POST["feedback"];
$sql = "INSERT INTO feedbacks (fname, phone, feedback)
VALUES ('$name', '$phone', '$feed')";

if ($conn->query($sql) === TRUE) {
  header("location:http://localhost/Baymax%20Care/login/home/user_homepage.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
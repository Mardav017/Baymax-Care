<?php
include 'dbconnection.php';
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
$sql = "INSERT INTO feedbacks (nam, contact_number, feedback)
VALUES ('$name', '$phone', '$feed')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


<?php
 // Create connection
 $conn = new mysqli('localhost','root','','signup');
// Check connection
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }
 $fname1 = $_POST["dname"];
 if (isset($_POST['dsubmit'])){
   $sql = "SELECT fname FROM drsignup WHERE fname= '$fname1'";
   $result = $conn->query($sql);
   if ($result->num_rows > 0) {
       // output data of each row
       while($row = $result->fetch_assoc()) {
           echo "<br> Name: ". $row["fname"];
       }
   } else {
       echo "0 results";
   }

 }
?>





<?php
include 'dbconnection.php';


// Create connection
$conn = new mysqli('localhost','root','','signup');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$medicine_name = $_POST["search"];

$sql = "SELECT medicinename,mrp,uses,alternatemedicines,sideeffect,howitwork FROM medicine WHERE medicinename = '$medicine_name'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> Name: ". $row["medicinename"]. " <br>MRP: ". $row["mrp"]. "<br>Uses:" . $row["uses"] ."<br>Alternatemedicines:" . $row["alternatemedicines"]. "<br>Sideeffect:" . $row["sideeffect"]. "<br>How It Work:" . $row["howitwork"]."<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

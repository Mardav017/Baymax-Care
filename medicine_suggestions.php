<?php
// Create connection
$conn = new mysqli('localhost', 'root', '', 'signup');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$searchTerm = $_GET['term'];
$sql = "SELECT * FROM medicine WHERE medicinename LIKE '%".$searchTerm."%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $suggestions = array();
    while($row = $result->fetch_assoc()) {

        //    $data['id']    = $row['id']; 
           $data['value'] = $row['medicinename'];
           array_push($suggestions, $data);
        } 
}

echo json_encode($suggestions);

$conn->close();
?>

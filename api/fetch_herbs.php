<?php
header('Content-Type: application/json');

$conn = new mysqli("localhost", "root", "", "ayush_herb");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM herbs";
$result = $conn->query($sql);

$herbs = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Fix image path
        $row['image'] = "../assets/" . $row['image'];

        
        $herbs[] = $row;
    }
}

echo json_encode($herbs);
$conn->close();

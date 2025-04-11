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
        // Fix main image path
        if (!empty($row['image'])) {
            $row['image'] = "../assets/" . $row['image'];
        }

        // Fix additional image paths
        if (!empty($row['img1'])) {
            $row['img1'] = "../assets/" . $row['img1'];
        }
        if (!empty($row['img2'])) {
            $row['img2'] = "../assets/" . $row['img2'];
        }
        if (!empty($row['img3'])) {
            $row['img3'] = "../assets/" . $row['img3'];
        }

        // Fix audio path
        if (!empty($row['audio_url'])) {
            $row['audio_url'] = "audio/" . $row['audio_url'];
        }

        // frame_url is already a full link, leave as-is

        $herbs[] = $row;
    }
}

echo json_encode($herbs);
$conn->close();
?>

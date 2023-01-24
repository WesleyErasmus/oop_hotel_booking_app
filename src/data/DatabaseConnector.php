<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stayinn";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM staff";
$result = $conn->query($sql);

$response = array();

while ($row = mysqli_fetch_assoc($result)) {

    $response[] = $row;
}

echo json_encode($response);
exit;
<?php
$name = $_POST['name'];
$emailid = $_POST['emailid'];
$phone = $_POST['phone'];
$username = $_POST['username'];
$password = $_POST['password'];

$servername = "localhost";
$username_db = "root";
$password_db = "";
$dbname = "restaurant_registration";

$conn = new mysqli($servername, $username_db, $password_db, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO user_registration(name, emailid, phone, username, password) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $name, $emailid, $phone, $username, $password);

if ($stmt->execute()) {
    header("Location: success.php");
    exit();
} else {
    echo "Error: " . $stmt->error;
}
    
$stmt->close();
$conn->close();
?>

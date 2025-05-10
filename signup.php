<?php
$host = '172.31.15.47';
$db = 'retrade';
$user = 'root';
$pass = 'yourpassword';

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);

$sql = "INSERT INTO users (name, email, password) VALUES ('$username', '$email', '$password')";
if ($conn->query($sql) === TRUE) {
    echo "Signup successful!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>

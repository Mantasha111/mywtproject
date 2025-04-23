<?php
include 'connect.php';

$name = $_POST['name'];
$email = $_POST['email'];

$sql = "INSERT INTO students (name, email) VALUES ('$name', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Student registered successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
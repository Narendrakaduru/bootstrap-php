<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$Uname=$_POST['username'];	
$Password=$_POST['password'];
$Email=$_POST['Email'];
$About=$_POST['about'];

$sql = "INSERT INTO sign (Uname, Password, Email, About)
VALUES ('$Uname','$Password','$Email','About')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
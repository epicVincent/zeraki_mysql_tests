<?php
$servername = "localhost";
$username = "";
$password = "";
$dbname = "education";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE student (studentid int(11) PRIMARY KEY NOT NULL,name varchar(250) NOT NULL ,course int(11) NOT NULL,FOREIGN KEY(course) REFERENCES course(courseid));";

if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>


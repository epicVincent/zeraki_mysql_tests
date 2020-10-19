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

$sql = "SELECT institution.name as institution, course.name as course, COUNT(course) FROM student  JOIN course ON student.course=courseid JOIN institution ON course.institution=institutionid GROUP BY course.courseid;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	echo $row['name1'];
    echo "institution name: " . $row["institution"]. "<br>" . " course name: " . $row["course"]. "<br>" . " no of students: " . $row["COUNT(course)"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>


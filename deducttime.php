<?php
$servername = "localhost";
$username = "root";
$password = "hackathon";
$dbname = "cc_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE cc_conversion SET pointsph='$ctimeh', pointspm='$ctimem' WHERE pid=211";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully :<br><a href='parentdashboard.php'>Return To Dashboard</a>";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>




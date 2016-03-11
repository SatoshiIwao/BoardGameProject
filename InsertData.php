<?php
	$servername = "server name";
	$username = "user name";
	$password = "password";
	$dbname = "db name";

	$pname = $_POST["pname"];
	$ptime = $_POST["ptime"];
	$newDate = $_POST["newDate"];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO records(Name, TimeOrScore, RecordDate) VALUES ('" . $pname . "','" . $ptime . "' , '" . $newDate . "')";

if (($conn->query($sql) === TRUE) ) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . ":" . $conn->error;
}

$conn->close();
?>

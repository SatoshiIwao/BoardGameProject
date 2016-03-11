<?php
	$servername = "ec2-52-6-203-170.compute-1.amazonaws.com";
	$username = "s_user9";
	$password = "s_user9";
	$dbname = "s_user9";

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
<?php
	$servername = "server's name";
	$username = "user name";
	$password = "password";
	$dbname = "dbname";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	
	$sql = "select Name, TimeOrScore, RecordDate from records order by TimeOrScore asc";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["Name"]. "&" . $row["TimeOrScore"]. "&" . $row["RecordDate"]. ",";
    }
	} else {
    	echo "0 results";
	}
	$conn->close();
?>

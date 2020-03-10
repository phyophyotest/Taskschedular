<?php
	$servername = "localhost";
	$database = "tasksch";
	$username = "root";
	$password = "";

	// Create connection

	$conn = mysqli_connect($servername, $username, $password, $database);

	// Check connection

	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}

	echo"Success";
	$sql="SELECT * FROM task";
	$db=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_assoc($db)){
		$name=$row['name'];
		$ins="INSERT INTO `task1`(`name`) VALUES ($name)";
		mysqli_query($conn,$ins);
	}
	mysqli_close($conn);

?>
<?php

$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "cce_website";

// Create connection
$conn = new mysqli($servername,
	$username, $password, $dbname);

$name = $_POST['name'];
$matricId = $_POST['matricId'];
$address = $_POST['address'];
// Check connection
if ($conn->connect_error) {
	die("Connection failed: "
		. $conn->connect_error);
}
$sqlquery = "INSERT INTO `students` (`name`, `matricId`, `address`) VALUES ('$name', '$matricId', '$address')";

// $sqlquery = "INSERT INTO students VALUES
// 	(2,$name', '$matricId', '$dept')";

if ($conn->query($sqlquery) === TRUE) {
	echo "record inserted successfully";
} else {
	echo "Error: " . $sqlquery . "<br>" . $conn->error;
}
?>
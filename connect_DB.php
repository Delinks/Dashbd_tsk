<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "basic_crud";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



//insert statement:inserting data into table
$sql = "INSERT INTO users_register (first_name, last_name, username, password)
VALUES ('Farida', 'Waziri', 'waziri', md5('dovely1'))";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



//echo "Connected successfully";
?>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "glasscity";

//variables bmitted by user
$loginUser = $_POST["loginUser"];
$loginPass = $_POST["loginPass"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT username FROM users WHERE username = '". $loginUser. "'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Tell user that username is already taken
  echo "Username is already taken.";

} else {
  //Insert username and password into database
  $sql = "INSERT INTO users (username, password, sr) VALUES ('". $loginUser. "', '". $loginPass. "', 0)";
  if ($conn->query($sql) === TRUE) {
    echo "New user created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
$conn->close();

?>
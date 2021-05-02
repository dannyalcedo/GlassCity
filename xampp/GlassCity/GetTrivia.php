<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "glasscity";

$questionID = rand(1, 4);

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM trivia WHERE id = '". $questionID. "'";

$question = $conn->query($sql);

if ($question->num_rows == 1) {
  // output data of each row
  while($row = $question->fetch_assoc()) {
    echo $row['question']."</next>";
    echo $row['choice1']."</next>";
    echo $row['choice2']."</next>";
    echo $row['choice3']."</next>";
    echo $row['choice4']."</next>";
    echo $row['correct']."</next>";
  }
} else {
  echo "Something went wrong";
}
$conn->close();

?>
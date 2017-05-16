<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "MusicPlayer";

// Create connection
//function connect()
//{
  $conn = mysqli_connect("127.0.0.1", "root", "", "MusicPlayer");
// Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
//}
?>

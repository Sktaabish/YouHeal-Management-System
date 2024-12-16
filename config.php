<!-- CONFIGURATION -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";

$conn = mysqli_connect(hostname: $servername, username: $username, password: $password, database: $dbname);

if(!$conn){
  die("Something Went Wrong");
}
?>
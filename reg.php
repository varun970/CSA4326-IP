<?php 
  if($_POST) {
  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "varun";
  
   
  // Database Connection
  $conn = new mysqli($servername, $username, $password, $database);
  
  // Check if error
  if($conn->connect_error) {
    echo "Connection Error";
  }
  
  // Username & Password
  $Email = $_POST["Email_ID"];
  $user = $_POST["username"];
  $pass = $_POST["password"];
  
  // Sql Query
  $sql = "INSERT INTO reg (email_id, user_name, pass_word) VALUES ('$Email', '$user', '$pass')";
 
  if($conn->query($sql)) {
   echo "Data stored successfully";
  } else {
   echo "Something went wrong";
  }
   
   $conn->close();
  }
?>
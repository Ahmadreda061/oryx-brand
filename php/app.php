<?php
    $server_name = "localhost";
    $user_name = "root";
    $password = "";
    $conn = mysqli_connect($server_name, $user_name, $password, "MANDB");
    // $sql = "DROP TABLE users";
/*
     $sql = "CREATE DATABASE MANDB";
if ($conn->connect_error){
  echo"connect failde";
}
else
echo "connect ";
*/
    $sql = "CREATE TABLE users (
      user_id INT PRIMARY KEY AUTO_INCREMENT,
      firstname VARCHAR(255) NOT NULL,
      lastname VARCHAR(255) NOT NULL,
      age INT,
      gender VARCHAR(10),
      email VARCHAR(255) UNIQUE NOT NULL,
      phone_no VARCHAR(20) NOT NULL,
      password VARCHAR(255) NOT NULL
      )";
      
//       if ($conn->query($sql) === TRUE) {
// echo "Database created successfully";
// } else {
// echo "Error creating database: " . $conn->error;
// }
  


?>
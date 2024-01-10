<?php
    $server_name = "localhost";
    $user_name = "root";
    $password = "";
    $conn = mysqli_connect($server_name, $user_name, $password, "MANDB");
    $fname = $_POST["firstname"];
    $lname = $_POST["lastname"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $phone = $_POST["phone_no"];
    $pass = $_POST["password"];


    $sql = "INSERT INTO users (firstname, lastname, age, gender, email, phone_no, password)
            VALUES ('$fname', '$lname', '$age', '$gender', '$email', '$phone', '$pass')";
    session_start();
    if ($conn->query($sql) === TRUE) {
        header('Location: login-user.php');

      } else {
        $_SESSION['error'] = "this email is already used";
        header('Location: sign-up.php');
      }
?>



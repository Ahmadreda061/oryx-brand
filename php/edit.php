<?php
    session_start();
    $server_name = "localhost";
    $user_name = "root";
    $password = "";
    $conn = mysqli_connect($server_name, $user_name, $password, "MANDB");
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $age = $_POST['age'];
    $phone = $_POST['phone_no'];
    $pass = $_POST['password'];
    $email = $_POST['email'];

    
    if($_POST["action"] == "c") {
        $sql = "UPDATE users
            SET firstname='$fname', lastname='$lname ', age='$age', phone_no='$phone', password='$pass'
            WHERE email='$email'";
        $sql2 = "SELECT * FROM users where email='$email'";
        if (mysqli_query($conn, $sql)) {
            $result = mysqli_query($conn, $sql2);
            $_SESSION['row'] = mysqli_fetch_assoc($result);
            header('location: edit-user.php');
        } 
        
    } else {
            $sql = "DELETE FROM users WHERE email='$email'";
            if (mysqli_query($conn, $sql)) {
                unset($_SESSION["row"]);
                // echo "deleted";
                header("location: ../index.php");
            }
            
        }
?>
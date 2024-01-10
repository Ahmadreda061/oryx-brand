
<?php
    session_start();
    $server_name = "localhost";
    $user_name = "root";
    $password = "";
    $conn = mysqli_connect($server_name, $user_name, $password, "MANDB");
    // if($conn) echo "connected";
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email']; 
        $password = $_POST['password']; 
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result); 
            if($password == $row["password"]) {
                $_SESSION["row"] = $row;  // i will get the row with all attributes to create info-user page 
                header('Location: ../index.php');
            } else {
                $_SESSION["pass_error"] = "The password you’ve entered is incorrect";
                header('Location: login-user.php');
            }

        } else { 
            $_SESSION["email_error"] = "The email you entered isn’t connected to an account.";
            header('Location: login-user.php');
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Signup</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css.map">
    <link rel="stylesheet" href="../css/all.css">
    <link rel="stylesheet" href="../css/sign-up.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,300;6..12,400;6..12,500;6..12,700;6..12,900&display=swap" >
    <style>
        <?php
            // to make change on css file 
            include "../css/sign-up.css"; 
        ?>
    </style>
</head>
<body>
    <script src="../js/nav-load.js"></script>
    <div class="sign-up d-flex justify-content-center align-items-center">
        <div class="container">
            <form  action="login.php" method="post" class="d-flex flex-column w-50 m-auto">
                <h2>Sign In</h2>
                <div class="email">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    <p class="m-0 email-error">
                        <?php
                            session_start();
                            if (isset($_SESSION['email_error'])){
                                echo $_SESSION['email_error'];
                                unset($_SESSION['email_error']);
                        }
                    ?>      
                    </p>
                </div>
                <div class="pass">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                    <p class="m-0 pass-error">
                        <?php
                            if (isset($_SESSION['pass_error'])){
                                echo $_SESSION['pass_error'];
                                unset($_SESSION['pass_error']);
                            }
                        ?>
                    </p>
                </div>
                <button type="submit" class="btn btn-outline-dark fs-5 ">Sign In</button>
            </form>
        </div>
    </div> 
</body>
</html>

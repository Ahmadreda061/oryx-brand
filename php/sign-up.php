<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css.map">
    <link rel="stylesheet" href="../css/all.css">
    <link rel="stylesheet" href="../css/sign-up.css">
    <style>
        <?php
            // to make change on css file 
            include "../css/sign-up.css" 
        ?>
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,300;6..12,400;6..12,500;6..12,700;6..12,900&display=swap" >
</head>
    
</head>
<body>
    <script src="../js/nav-load.js"></script>
    <?php
        // i want start session before btn submit 
        session_start();   // call session start to using tempprarily storing data across all the web pages
    ?>
    <div class="sign-up d-flex justify-content-center align-items-center">
        <div class="container">
            <form  action="signup.php" method="post" class="d-flex flex-column w-50 m-auto"> 
                <h2>Sign Up</h2>
                <div class="full-name d-flex gap-3">
                    <div class="first">
                        <label for="firstname">First Name:</label>
                        <input type="text" id="firstname" name="firstname" required>
                    </div>
                    <div class="last">
                        <label for="lastname">Last Name:</label>
                        <input type="text" id="lastname" name="lastname" required>
                    </div>
                </div>
                <div class="age-gender d-flex gap-3">
                    <div class="age">
                        <label for="age">Age:</label>
                        <input type="number" id="age" name="age">
                    </div>
                    <div class="gender ">
                    <label for="gender">Gender:</label>
                    <select id="gender" name="gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                    </div>               
                </div>        
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>     
                <label for="phone_no">Phone Number:</label>
                <input type="tel" id="phone_no" name="phone_no" pattern="\+962[0-9]{9}" title="Phone number must start with +962 and have 9 digits after it" required>       
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <button type="submit" class="btn btn-outline-dark fs-5 ">Sign Up</button>
                <div class="ex d-flex justify-content-between">
                    <a href="../php/login-user.php">Sign-In now</a>
                    <p class="error-sign">
                    <?php
                        // if there is an error in php file will catch here 
                        if (isset($_SESSION['error'])){
                            echo $_SESSION['error'];
                            unset($_SESSION['error']);
                        }
                    ?>
                    </p>
                </div>
            </form>
        </div>
    </div> 
</body>
</html>

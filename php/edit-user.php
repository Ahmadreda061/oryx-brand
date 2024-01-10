

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/all.css">
    <link rel="stylesheet" href="../css/edit.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css.map">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,300;6..12,400;6..12,500;6..12,700;6..12,900&display=swap" >
    <style>
        <?php
            // to make change on css file 
            include "../css/edit.css" 
        ?>
    </style>
</head>
<body>
    <!-- <script src="../js/nav-load.js"></script> -->
    <?php
        session_start();
        if (isset($_SESSION["row"])){
            $user = $_SESSION["row"];
        }
    ?>
    <header class="edit-profile p-3">
        <div class="container">
            <div class="edit-profile__header d-flex">
                <a href="../index.php" aria-label="go to home page">
                    <div class="arrow d-flex justify-content-center align-items-center">
                        <i class="fa-solid fa-arrow-left-long"></i>
                    </div>
                </a>
                <div class="logo text-center">
                    <img class="img-fluid" src="../assets/images/logo-removebg-preview.png" alt="logo">
                </div>
            </div>
            <div class="edit-profile__card mt-5 p-5">
                <h1>Edit profile</h1>
                <form action="edit.php" method="post">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-8 left">
                            <label for="firstname">First Name</label>
                            <input type="text" id="firstname" name="firstname" value="<?php echo $user['firstname']?>">
                            <label for="lastname">Last Name</label>
                            <input type="text" id="lastname" name="lastname"  value="<?php echo $user['lastname']?>">
                            <label for="age">Age</label>
                            <input type="number" id="age" name="age"  value="<?php echo $user['age']?>">
                            <label for="gender">Gender</label>
                            <input type="text" id="gender" name="gender" readonly  value="<?php echo $user['gender']?>">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-8 right">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" readonly  value="<?php echo $user['email']?>">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password"  value="<?php echo $user['password']?>">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone_no" name="phone_no" pattern="\+962[0-9]{9}"  value="<?php echo $user['phone_no']?>" title="Phone number must start with +962 and have 9 digits after it">
                            <div class="submits d-flex ">
                                <button class='btn btn-outline-dark fs-5 me-4' type="submit" name="action" value="c">Confirm Changes</button>
                                <button class='btn btn-outline-dark fs-5 ' type="submit" name="action" value="d">Delete Account</button>
                            </div>
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </header>
    <script src="https://kit.fontawesome.com/79feeb020c.js" crossorigin="anonymous"></script>

</body>
</html>

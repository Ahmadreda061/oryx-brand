<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ORYX BRAND</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css.map">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/home.css">
    <style>
        <?php
            // to make change on css file 
            include "css/home.css" 
        ?>
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,300;6..12,400;6..12,500;6..12,700;6..12,900&display=swap" >
</head>
<body>
    <?php session_start(); ?>
    <nav class="navbar navbar-expand-lg ">
        <div class="container">
            <a href="#" aria-label="ORYX BRAND logo" class="logo"><img src="assets/images/logo.png" alt="logo"></a>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#main"
                aria-controls="main"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <i class="fa-solid fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="main">
            <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                <li class="nav-item d-flex align-items-center">
                    <a class="nav-link p-2 p-lg-3 fs-5 active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item d-flex align-items-center">
                    <a class="nav-link p-2 fs-5 p-lg-3" href="#services">Services</a>
                </li>
                <li class="nav-item d-flex align-items-center">
                    <a class="nav-link p-2 fs-5 p-lg-3 " href="/project/html/shop-user.html">Shop</a>
                </li>
                <li class="nav-item d-flex align-items-center">
                    <a class="nav-link p-2 fs-5 p-lg-3 " href="#about">About us</a>
                </li>

                <li class="nav-item d-flex align-items-center d-none" id="info">
                    <a class="nav-link p-2 fs-5 p-lg-3 "  href='/project/php/edit-user.php'>info</a>
                </li>
            </ul>
                <?php
                    if (isset($_SESSION['row'])) {
                        echo '
                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                let info = document.getElementById("info");
                                info.classList.remove("d-none");
                                let signUpBtn = document.getElementById("sign-up");
                                signUpBtn.classList.add("d-none");
                                });
                            </script>';
                        echo "<a href='#' ><button type='button' id='sign-out' class='btn btn-outline-dark fs-5 '>Sign Out</button></a>";
                        echo '
                            <script>
                                let signOutBtn = document.getElementById("sign-out");
                                if(signOutBtn) {
                                    signOutBtn.addEventListener("click", ()=>{
                                        // by http req i will send to server to unset the var row then reload the page so sign out
                                        let xhr = new XMLHttpRequest();
                                        xhr.open("POST", "php/unset_session.php", true);  // call unset file
                                        // Set the content type for POST requests
                                        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                                        xhr.onreadystatechange = ()=> {
                                            if (xhr.readyState == 4 && xhr.status == 200) {
                                                // if true response 
                                                console.log(xhr.responseText);
                                                location.reload();
                                            } 
                                        };
                                        xhr.send();
                                    });
                                }
                            </script>
                            ';
                    }
                ?>
                <a href='/project/php/sign-up.php' aria-label="sign up to shop"><button type='button' id='sign-up' class='btn btn-outline-dark fs-5 '>Regster</button></a>
            </div>
    </nav>
    <div class="header">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-6 col-lg-6 col-md-8 text">
                    <div class="hero-text">
                        <h2>Scarf Collection</h2>
                        <h3>Scarf - Winter Collections 2024</h3>
                        <p>A specialist label creating luxury essentials. Ethically crafted with an unwavering
                            commitment to exceptional quality.</p>
                        <a href="/project/html/shop-user.html"><button type="button" class="btn btn-outline-dark btn-lg ">Shop Now</button></a>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-8">
                    <div class="hero-bg d-flex justify-content-center">
                        <img class="img-fluid"  src="assets/images/hero-1.png" alt="hero image">
                    </div>
                </div>
            </div>
        </div> 
    </div>
    <section class="services text-center pb-5 pt-5" id="services">
        <div class="container">
            <div class="s-header">
                <h1 class="main-header pb-1 pt-5">Ser<span style="color: #333;">vi</span>ces</h1>
                <p class="fs-5">PREPARE TO BE AMAZED</p>
            </div>
            <div class="row mt-5 pt-5 pb-5">
                <div class="col-xl-4 col-lg-6 col-md-8">
                    <div class="service">
                        <img src="assets/images/fast.svg" alt="fast delivery">
                        <h2 class="mt-4 mb-4">Swift Delivery</h2>
                        <p>In today's fast-paced world, we understand the importance of timely and efficient delivery </p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-8">
                    <div class="service">
                        <img src="assets/images/pay.svg" alt="pay image">
                        <h2 class="mt-4 mb-4">Online Payments</h2>
                        <p>Experience the convenience of modern banking with  reliable and user-friendly online payment solutions.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-8">
                    <div class="service">
                        <img src="assets/images/scuere.svg" alt="scurity">
                        <h2 class="mt-4 mb-4"> Security</h2>
                        <p> choose a commitment to uncompromising security standards, because your peace of mind is invaluable.</p>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    <section class="about-us text-center pb-5 pt-5" id="about">
        <div class="container">
            <div class="s-header">
                <h1 class="main-header pb-1 pt-5"><span style="color: #333;">About</span>Us</h1>
                <p class="fs-5">THE GREAT TEAM</p>
            </div>
            <div class="row mt-5 pt-5 pb-5">
                <div class="col-xl-5 col-lg-5 col-md-8">
                    <img src="assets/images/a.png" alt="scarf from the shop" class="img-fluid">
                </div>

                <div class="col-xl-7 col-lg-7 col-md-8 d-flex flex-column justify-content-center">
                    <div class="about-us__text d-flex flex-column text-start pl-6">
                        <h2 class="m-3 text-center">Scarf Emporiums</h2>
                        <p class="mt-4 mb-4">Welcome to Scarf Emporium, where style meets warmth! We are a team of passionate university students who have come together to bring you a curated collection of beautiful scarves for every occasion.   Our mission is to provide you with high-quality scarves that not only keep you cozy but also add a
                            touch of elegance to your wardrobe.</p>
                        <p class="mt-4 mb-4">At Scarf Emporium, we believe that accessories are the perfect way to express your unique style.
                            Whether you're looking for a cozy winter scarf or a lightweight summer wrap, we've got something
                            special just for you. Explore our collection and elevate your fashion game with Scarf Emporium!</p>
                    </div>
                    <button type="button" href="project/html/sign-up.html" class="btn btn-outline-dark fs-4 text-start align-self-start mt-2 btn-about ">View More</button>
                </div>
                    
            </div>

        </div>
        
    </section>
    <footer>
        <img src="assets/images/logo-removebg-preview.png" width="80px" height="80px" class="logo" alt="logo">
        <p>Oryx Brand &copy; 2023. All rights reserved.</p>
        <div class="social-icons">
            <a class="face" aria-label="visit us in facebook" href="https://web.facebook.com/profile.php?id=61553350341502" target="_blank"><img src="assets/images/facebook.png" width="24" height="25" alt="facebook"></a>
            <a href="https://www.instagram.com/oryx_brand/" aria-label="visit us in instagram" target="_blank"><img src="assets/images/instagram.png" width="24" height="25" alt="instagram"></a>
            <a href="https://wa.me/+962786855369" target="_blank" aria-label="visit us in whatsapp"><img src="assets/images/whatsapp.png" width="24" height="25" alt="whatsapp"></a> 
        </div>
    </footer>
    <script src="js/nav.js"></script>
    <script src="https://kit.fontawesome.com/79feeb020c.js" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.bundle.min.js.map"></script>
</body>
</html>
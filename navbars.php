<?php 
session_start();
include("php/config.php");

// Check if the user is not logged in as a customer
if(isset($_SESSION['user_type']) != "c") {
    header("Location: login.php");
    exit(0);
}

$email = $_SESSION['email'];
$password = $_SESSION['password'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourism Website</title>
    <link rel="stylesheet" href="navbar.css">
</head>
<body>
    <nav>
        <div class="container">
            <h1 class="logo">Door2Destination</h1>
            <div class="navbar">
                </form>
                <ul class="nav-links">
                    <li><a href="navbars.php">Home</a></li>
                    <li><a href="sign.php">Sign In</a></li>
                    <li><a href="exp1.html">Places</a></li>
                    <li><a href="index.html">Hotels</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <!-- Slider Section -->
    <section class="section">
        <div class="slider">
            <div class="slide">
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">

                <div class="st first">
                    <img src="ram mandir final.webp" alt="">
                </div>

                <div class="st second">
                    <img src="lakshwadeep.jpg" alt="">
                </div>

                <div class="st third">
                    <img src="munnar.jpg" alt="">
                </div>

                <div class="st fourth">
                    <img src="manali" alt="">
                </div>

                <div class="nav-auto">
                    <div class="a-b1"></div>
                    <div class="a-b2"></div>
                    <div class="a-b3"></div>
                    <div class="a-b4"></div>
                </div>
            </div>

            <div class="nav-m">
                <label for="radio1" class="m-btn"></label>
                <label for="radio2" class="m-btn"></label>
                <label for="radio3" class="m-btn"></label>
                <label for="radio4" class="m-btn"></label>
            </div>
        </div>
    </section>

    <!-- JavaScript -->
    <script type="text/javascript">
        var counter = 1;
        setInterval(function(){
            document.getElementById('radio' + counter).checked = true;
            counter++;
            if(counter > 4){
                counter = 1;
            }
        }, 5000);
    </script>
 
    <!-- Card Section -->
    <a href="exp1.html"><h2>MOST VISITED PLACES</h2></a>
    <div class="card-container">
        <div class="card">
            <img src="leh.avif">
            <div class="card-content">
                <a href="#" class="a" style="text-decoration: none; color: black;"><h3>Leh</h3></a>
                <p>Leh is a city in the Indian Union territory of Ladakh. It is the largest city and the joint capital of Ladakh.</p>
                <a href="" class="btn">Read More</a>
            </div>
        </div>
    
        <div class="card">
            <img src="manali">
            <div class="card-content">
                <a href="#" class="a" style="text-decoration: none; color: black;"><h3>Manali</h3></a>
                <p>Manali is one of the most attractive tourist spot not only of Himachal Pradesh, but of International fame also...</p>
                <a href="" class="btn">Read More</a>
            </div>
        </div>
    
        <div class="card">
            <img src="amritsar">
            <div class="card-content">
                <a href="#" class="a" style="text-decoration: none; color: black;"><h3>Amritsar</h3></a>
                <p>Amritsar is the largest and most important city in Punjab and is a major commercial, cultural, and transportation centre.</p>
                <a href="" class="btn">Read More</a>
            </div>
        </div>
    </div>

    <a href="index.html"><h2>FEATURED HOTELS</h2></a>
    <div class="card-container">
        <div class="card">
            <img src="swissotel-nakai-osaka.jpg">
            <div class="card-content">
                <a href="#" class="a" style="text-decoration: none; color: black;"><h3>Swissotel </h3></a>
                <p>An upscale 5-star hotel that boasts a prime location amidst world-class shopping, dining, entertainment and business.</p>
                <a href="" class="btn">Read More</a>
            </div>
        </div>
    
        <div class="card">
            <img src="caption5.jpg">
            <div class="card-content">
                <a href="#" class="a" style="text-decoration: none; color: black;"><h3>Solaria Hotel</h3></a>
                <p>Solaria Hotel Hanoi is a 4-star hotel in the historic center. </p>
                <a href="" class="btn">Read More</a>
            </div>
        </div>
    
        <div class="card">
            <img src="4.jpg">
            <div class="card-content">
                <a href="#" class="a" style="text-decoration: none; color: black;"><h3>APA Hotel</h3></a>
                <p> The group offers Japanese efficiency and service, comfortable rooms, and amenities for corporate meetings, weddings, and parties. </p>
                <a href="" class="btn">Read More</a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <br>
    <hr>
    <br>
    <center>
        <p><a style="color: black;" href="">Privacy Policy</a></p>
        <p><a style="color: black;" href="">About Us</a></p>
        <p><a style="color: black;" href="form.php">Contact Us</a><br></p>
        <p style="color: black;">&copy; Door2Destination All rights reserved.</p>
    </center>

</body>

</html>

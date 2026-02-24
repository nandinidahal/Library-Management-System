<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <header class="header">
        <div class="row">
        <a href="#" title="" class="site-logo">
            Library Management System
        </a>
    <nav class="main-nav">
        <ul>
            <li><a href="index.php" title="Home">Home</a></li>
            <li><a href="about.php" title="About">About</a></li>
            <li><a href="admin.php" title="Admin">Admin Login</a></li>
            <li><a href="register.php" title="Register">Register</a></li>
            <li><a href="login.php" title="Login">Login</a></li>
        </ul>
    </nav>
    </div>
    </header>
<!--------<figure class="billboard">
    <img src="banner.jpg" alt="wallpaper">
    <figcaption></figcaption>
</figure>-------->
<main>
<div class="container">
    <div class="container1">
        <center><h5>Library Timing</h5><center>
        <ul>
            <li>Open at 8:00 AM</li>
            <li>Close at 8:00 PM</li>
            <li>(Saturday Off)</li>
        </ul>
        <br>
        <center><h5>Our Services</h5><center>
        <ul>
            <li>Peaceful Enviroment</li>
            <li>Free Wifi</li>
            <li>Discussion Room</li>
            <li>News Papers</li>
            <li>RO Water</li>
            <li>Full Furniture</li>
    </div>

    <div class="container2">
        <center><h2>User Login</h2></center>
        <form  id="userlogin" action="" method="post">
            <div class="fields">
                <label for="email">Email ID</label>
                <input type="email" id="email" name="email" require>
            </div>

            <div class="fields">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
        <p id="register">Not registered yet? <a href="register.php">Click here to register</a></p>
    </div>
</div>

<!--------php code for login form-------->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    // Connect to database
    require "DatabaseConnect.php";

    $email = $_POST['email'];
    $password = $_POST['password'];

    // Fetch user by email
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);

        // Verify password (assuming it's hashed in the DB)
       if ($password === $user['password'] && $email===$user['email']){
            //$_SESSION['Id'] = $user['Id'];
            //$_SESSION['user_name'] = $user['name'];
            // Redirect to dashboard
            header("Location: login_dashboard.php");
            exit();
        } 
        else {
            echo "Incorrect email or password.";
        }
    }
}    
?>
</main>

<footer class="footer">
    <div class="footer-container">
        <div class="footer-container1">
            <h3>Library Management System</h3>
            <p>&copy;2025 Library Management System,All Rights Reserved</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores ducimus rem illum cupiditate. Officia voluptates quo tempora, quasi inventore recusandae ipsam voluptatibus soluta labor</p>
        </div>

        <div class="footer-container1">
            <h3>Our Library Info</h3>
            <p>Balkhu,Kathmandu</p>
            <p class="footer-email">ourlibrary123@outlook.com</p>
            <p>01-33731</p>
        </div>

        <div class="footer-container1">
            <h3>Useful Links</h3>
            <ul>
                <li><a href="about.php" title="About">About Us</a></li>
                <li><a href="login.php" title="Login">Login</a></li>
                <li><a href="feedback.php" title="Contact">Feedback</a></li>
            </ul>
        </div>

    </div>
    <hr>
    <p> &copy;2025 Library Management System, All rights reserved</p>
</footer>   
</body>
</html>
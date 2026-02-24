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

    <main>
        <div class="form-title">Contact Us</div>
        <form action="" method="POST">
            <div class="field">
                <label for="fname">First Name</label>
                <input type="text" name="fname">
            </div>

            <div class="field">
                <label for="lname">Last Name</label>
                <input type="text" name="lname">
            </div>

            <div class="field">
                <label for="email">Email</label>
                <input type="email" name="email">
            </div>

            <div class="field">
                <label for="address">Address</label>
                <input type="text" name="address">
            </div>

            <div class="field">
                <label for="message">Message</label>
                <textarea name="message" cols=30 rows="6"></textarea>
            </div>
            
            <button type="submit" name="submit">Send</button>
        </form>
        <?php
            require 'DatabaseConnect.php';
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                $fname=$_POST['fname'];
                $lname=$_POST['lname'];
                $email=$_POST['email'];
                $address=$_POST['address'];
                $message=$_POST['message'];

                $inserted=mysqli_query($conn,"insert into feedback(fname,lname,email,address,message)  values('$fname','$lname','$email','$address','$message')");
                if($inserted){
                    echo "<p>You will  hear from us soon</p>";
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
                <li><a href="feedback.php" title="Contact"> Send Feedback</a></li>
            </ul>
        </div>
    
    </div>
    <hr>
    <p> &copy;2025 Library Management System, All rights reserved</p>
</footer>   
</body>
</html>
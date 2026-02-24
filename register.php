<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $password = $_POST['password'];
    $phone    = $_POST['phone'];
    $address  = $_POST['address'];

    $conn = mysqli_connect("localhost", "root", "", "LMS");

    if (!$conn) {
        die("Connection Failed! " . mysqli_connect_error());
    }
	// $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $insert = mysqli_query($conn, "INSERT INTO user1 (name, email, password, phone, address) 
                                 VALUES ('$name', '$email', '$password', '$phone', '$address')");

    mysqli_close($conn);

    if ($insert) {
        
        header("Location: index.php");
        exit(); 
    } else {
        echo "Error in registration: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <link rel="stylesheet" href="style.css">
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
           <li><a href="login.php" title="Login">Login</a></li>
         
        </ul>
      </nav>
    </div>
  </header>
<!--------<div id="register_container">
     <div id="side_bar">
        <h4>Library Timing</h4>
        <ul>
            <li>Opening: 6:00 AM</li>
            <li>Closing: 4:00 PM</li>
            <li>Sunday: Closed</li>
        </ul>
        <h4>Facilities</h4>
        <ul>
            <li>Furniture</li>
            <li>Free Wi-Fi</li>
            <li>Newspapers</li>
            <li>Peaceful Environment</li>
        </ul>
    </div>-------->
<main>
<div class="form-title">Register Here</div>    
<div id="register_form">

  <form action="register.php" method="post">
    <div class="field">
        <label for="name">Full Name</label>
        <input type="text" name="name" class="form-control" required>
    </div>

    <div class="field">
        <label for="email">Email ID</label>
        <input type="text" name="email" class="form-control" required>
    </div>

    <div class="field">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" required>

    </div>

    <div class="field">    
        <label for="phone">Mobile</label>
        <input type="text" name="phone" class="form-control" required>
    </div>

    <div class="field">
        <label for="address">Address</label>
        <input type="text" name="address" class="form-control" required> 
    </div>

      <button type="submit" >Register</button>    
  </form>
</div>
</div>
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
                <li><a href="about.php" title="About">About</a></li>
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
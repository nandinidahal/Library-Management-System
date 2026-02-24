<?php
session_start();
if (!isset($_SESSION['UserId'])) {
    header("Location: index.php");
    exit();
}

require "DatabaseConnect.php";
$userid = $_SESSION['UserId'];
$sql = "SELECT name, email, address FROM users WHERE UserId = $userid ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    $user = mysqli_fetch_assoc($result);
} 
else {
    die("User not found.");
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Profile</title>
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
          <li><a href="logout.php" title="logout">Logout</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <main>
  <div class="form-title">My Profile</div>  
  <div class="view_user_details">

    <p><strong>Name:</strong> <?php echo $user['name']; ?></p>
    <p><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></p>
    <p><strong>Address:</strong> <?php echo htmlspecialchars($user['address']); ?></p>

    <p class="another-page"><a href="login_dashboard.php">Back to Dashboard</a></p>
</div>
</main>

<div class="footer-maindiv"></div>
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
                <li><a href="admin.php" title="Admin">Admin Login</a></li>
                <li><a href="register.php" title="Register">Register</a></li>
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
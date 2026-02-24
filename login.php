<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require "DatabaseConnect.php";
    /* Connect to database
    $conn = mysqli_connect("localhost", "root", "", "lms");
    if (!$conn) {
        die("Connection Failed! " . mysqli_connect_error());
    }*/

    $email = $_POST['email'];
    $password = $_POST['password'];

    // Fetch user by email
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);

        // Verify password (assuming it's hashed in the DB)
        if ($password === $user['password']) {
            $_SESSION['UserId'] = $user['UserId'];
            $_SESSION['name'] = $user['name'];

            // Redirect to dashboard
            header("Location: login_dashboard.php");
            exit();
        } else {
            $error = "Incorrect password.";
        }
    } else {
        $error = "No user found with that email.";
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Login</title>
</head>
 <link rel="stylesheet" href="style.css" type="text/css">
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
        </ul>
      </nav>
    </div>
  </header>

  <main>
    <div class="login_form">
        <?php if (!empty($error)) : ?>
            <p style="color:red;"><?php echo $error; ?></p>
        <?php endif; ?>
        <div class="form-title">Login to LMS</div>    
        <form action="login.php" method="post">
            <div class="field">
                <label>Email</label>
                <input type="text" name="email" required>
            </div>

            <div class="field">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>

            <button type="submit">Login</button>
        </form>
    </div>
    <p id="login-message">haven't registerd yet? <a href="register.php">Register here</a>.</p>
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
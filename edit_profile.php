<?php
session_start();
if (!isset($_SESSION['UserId'])) {
    header("Location: index.php");
    exit();
}
require "DatabaseConnect.php";
/*$conn= mysqli_connect("localhost", "root", "", "lms");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}*/

$userid = $_SESSION['UserId'];
$error = "";
$success = "";

// Fetch user data
$sql = "SELECT name, email, password FROM users WHERE UserId = $userid";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $current_password = $_POST['current_password'] ?? '';
    $new_password = $_POST['new_password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';

    // Check current password matches plain text
    if ($current_password !== $user['password']) {
        $error = "Current password is incorrect.";
    } elseif ($new_password !== $confirm_password) {
        $error = "New password and confirm password do not match.";
    } elseif (strlen($new_password) < 6) {
        $error = "New password must be at least 6 characters long.";
    } else {
        // Update password in plain text
        $update_sql = "UPDATE users SET password='$new_password' WHERE UserId = $userid";
        if (mysqli_query($conn, $update_sql)) {
            $success = "Password updated successfully.";
            $user['password'] = $new_password;  // Update local variable
        } else {
            $error = "Failed to update password. Please try again.";
        }
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Profile</title>
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
     <div class="form-title">Edit Profile</div>
      <div class="edit_profile">   
    <p><strong>Name:</strong> <?php echo htmlspecialchars($user['name']); ?></p>
    <p><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></p>
    </div>
    <?php if ($error): ?>
        <p><?php echo htmlspecialchars($error); ?></p>
    <?php elseif ($success): ?>
        <p><?php echo htmlspecialchars($success); ?></p>
    <?php endif; ?>

    <form method="post" action="">
        <label>Current Password:</label><br>
        <input type="password" name="current_password" required><br><br>

        <label>New Password:</label><br>
        <input type="password" name="new_password" required><br><br>

        <label>Confirm New Password:</label><br>
        <input type="password" name="confirm_password" required><br><br>

        <button type="submit">Change Password</button>
    </form>
    <!--p class="another-page"><a href="login_dashboard.php">Back to Dashboard</a></!--p-->
    <p class="edit_profile_back_to_dashboard"><a href="login_dashboard.php">Back to Dashboard</a></p>
   
    <main>

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
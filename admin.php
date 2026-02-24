<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
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
    <!--div>
        <a href="admin.php">Admin Login</a>
        <a href="admin_dashboard.php">Dashboard</a>
    </-div-->


<main>    
<div class="form_box">
    <div class="form-title">Admin Login</div>
    <form method="post" action="">
        <div class="field">
            <label>Email:</label>
            <input type="text" name="email" required>
        </div>

        <div class="field">    
            <label>Password:</label><br>
            <input type="password" name="password" required><br><br>
        </div>

        <button type="submit" name="login" value="Login">Login</button>
    </form>
</div>
</main>
    <?php
    if (isset($_POST['login'])){
        $conn = mysqli_connect("localhost", "root", "", "lms");

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "SELECT * FROM admins WHERE email = '$email'";
        $result = mysqli_query($conn, $query);

        if ($row = mysqli_fetch_assoc($result)) {
            if ($row['password'] == $password) {
                header("Location:admin_dashboard.php");
                //echo "<p>Login successful. Welcome, " . $row['name'] . "!</p>";
                //echo "<a href='admin_dashboard.php'>Go to Dashboard</a>";
            } else {
                echo "<p>Wrong Password!</p>";
            }
        } else {
            echo "<p>Email not found!</p>";
        }

        mysqli_close($conn);
    }
    ?>

<div class="footer-maindin"></div>
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
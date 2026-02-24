<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
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

<!--div class="dashboard_box"> dashboard update>
    <p>Login successful. Welcome admin here are some actions you can perform:</p>
    <ul>
        <li><a href="add_book.php">Add New Book</a></li>
        <li><a href="delete_book.php">Delete Books</a></li>
        <li><a href="users_details.php">View Users</a></li>
        <li><a href="issue_book.php">Issue Book</a></li>
        <li><a href="book_details.php"> Book Details</a></li>
    </ul>
</div-->
<main>
<div class="dashboard_container">
    <div class="dashboard_card">
        <p>Add New Book</p>
        <a href="add_book.php" class="btn-green">Go</a>
    </div>
    <div class="dashboard_card">
        <p>Delete Books</p>
        <a href="delete_book.php" class="btn-red">Go</a>
    </div>
    <div class="dashboard_card">
        <p>View Users</p>
        <a href="UserDetails.php" class="btn-blue">Go</a>
    </div>
    <div class="dashboard_card">
        <p>Issue Book</p>
        <a href="IssuedBook.php" class="btn-yellow">Go</a>
    </div>
    <div class="dashboard_card">
        <p>Book Details</p>
        <a href="book_details.php" class="btn-green">Go</a>
    </div>
    <div class="dashboard_card">
        <p>View Feedbacks</p>
        <a href="ViewFeedback.php" class="btn-green">Go</a>
    </div>
     <div class="dashboard_card">
        <p> log out </p>
    <a href="admin.php" class="btn-yellow">Go</a>
</div>
</div>
<main>

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
<!DOCTYPE html>
<html>
<head>
    <title>Delete Books</title>
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

    <div class="form-title">Delete Books</div>
    <?php
    require "DatabaseConnect.php";
    
    if (isset($_GET['delete'])) {
    $id = $_GET['delete']; 
    $delete_query = "DELETE FROM books WHERE id = $id";

    if (mysqli_query($conn, $delete_query)) {
         /*$deleteMessage ="<p>Book deleted successfully.</p>";
         $backLink =' <a href="admin_dashboard.php">Back</a>';*/
         /* echo"<p>Book deleted successfully.</p>";
         echo'<a href="admin_dashboard.php">Back</a>';*/
        header("Location: viewdelete.php");
    } else {
        echo "<p>Error deleting book: " . mysqli_error($conn) . "</p>";
    }
}
?>
<!--$conn = mysqli_connect("localhost", "root", "", "lms");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}-->
<div class="dashboard_container"><!-- updated-->
    <div class="dashboard_card">
        <p>For Delete </p>
        <a href="book_details.php" class="btn-green">Go</a>
    </div>
    
        <!--div class="delete-message-container">
        <!-?php
            echo $deleteMessage ?? '';
            echo $backLink ?? '';
        ?>
    <div-->
        
    </div->
<!--echo"<p><a href='book_details.php'>Go to book list for delete </a></p>";-->

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
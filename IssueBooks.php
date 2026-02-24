<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <!---type:optional,relational:important-->
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
            <li><a href="ViewProfile.php" title="Login">Login</a></li>
        </ul>
    </nav>
    </div>
</header>

<main>
<div class="form-title">Issue Book</div>    
<form action="" method="POST">
        <div class="field">
            <label for="Bookno">Book No.</label>
            <input type="text" name="BookNo">
        </div>

        <div class="field">
            <label for="BookName">Book Name</label>
            <input type="text" name="BookName">
        </div>

        <div class="field">
            <label for="Author">Author</label>
            <input type="text" name="Author">
        </div>

        <div class="field">
            <label for="IssuedDate">Issued Date</label>
            <input type="date" name="IssuedDate">
        </div>

        <div class="field">
            <label for="Due Date">Due Date</label>
            <input type="date" name="DueDate">
        </div>

        <div class="field">
            <label for="UserId">User ID</label>
            <input type="number" name="UserId">
        </div> 
        
        <button type="submit" name="submit">Issue Book</button> 
</form>

<?php
    require 'DatabaseConnect.php';
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $BookNo=$_POST['BookNo'];
        $BookName=$_POST['BookName'];
        $Author=$_POST['Author'];
        $IssuedDate=$_POST['IssuedDate'];
        $DueDate=$_POST['DueDate'];
        $UserId=$_POST['UserId'];
        mysqli_query($conn,"insert into IssueBooks(BookNo,BookName,Author,IssuedDate,DueDate,UserId)  values('$BookNo','$BookName','$Author','$IssuedDate','$DueDate','$UserId')");
        header("location:IssuedBook.php");
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
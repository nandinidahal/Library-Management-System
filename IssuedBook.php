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
            <li><a href="login.php" title="Login">Login</a></li>
        </ul>
    </nav>
    </div>
</header>
<main>
<div class="table-title">View Issued Books</div>
<div class="table-container">
    <?php 
    require "DatabaseConnect.php";
    $result = mysqli_query($conn, "select * from IssueBooks");
    ?>
        <table border="1" class="display">
            <tr>
                <th>Book No.</th>
                <th>Book Name</th>
                <th>Author</th>
                <th>Issued Date</th>
                <th>Due Date</th>
                <th>User ID</th>
            </tr>
    <?php
    while($row = mysqli_fetch_assoc($result)) 
    {
        ?>
            <tr>
                <td><?php echo $row['BookNo']; ?> </td>
                <td><?php echo $row['BookName']; ?> </td>
                <td><?php echo $row['Author']; ?> </td>
                <td><?php echo $row['IssuedDate']; ?> </td>
                <td><?php echo $row['DueDate']; ?> </td>
                <td><?php echo $row['UserId']; ?> </td>
            </tr>
    <?php   
    }
    ?>
    </table>
</div>

<div class="table-container" id="sample">
    <a href="IssueBooks.php">Issue Book</a>
</div
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
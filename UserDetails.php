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

<!--------<figure class="billboard">
    <img src="banner.jpg" alt="wallpaper">
    <figcaption></figcaption>
</figure>-------->

<main>
<div class="table-title">Registered Users</div>
<div class="table-container">
    <?php
        require 'DatabaseConnect.php';  
        $result=mysqli_query($conn,"select * from Users");
    ?>


        <table border="1" class="display">
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Mobile</th>
                <th>Address</th>
            </tr>    
    <?php
        while($row=mysqli_fetch_assoc($result)){
    ?>
        <tr>
            <td><?php echo $row['UserId']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['password']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['address']; ?></td>
        </tr>
    <?php
        }
    ?>
    </table>
</div>
<div class="count" style="margin-left:50px; margin-top:10px">
<?php
    $count=mysqli_query($conn,"SELECT COUNT(*) as Totalusers from users");
    $show=mysqli_fetch_assoc($count);
    echo "No. of registered users: ".$show['Totalusers'];
?>
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
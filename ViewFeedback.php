<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
    <div class="form-title">Feeback Boxes</div>
    <div class="feedback-page">
        <?php
            require "DatabaseConnect.php";
            $result=mysqli_query($conn,"select * from feedback");
            //$row=mysqli_fetch_assoc($result);
            $counts=mysqli_num_rows($result);
            if($counts>0){
                while(($row=mysqli_fetch_assoc($result))){
                    if( empty($row['fname']) && empty($row['lname']) && empty($row['email']) && empty($row['address']) && empty($row['meassage'])){
                        continue;
                    }
        ?>        
                    <div class="feedbacks">
                        <p><?php echo "First Name:".$row['fname'];?></p>
                        <p><?php echo "Last Name:".$row['lname'];?></p>
                        <p><?php echo "Email:".$row['email'];?></p>
                        <p><?php echo "Address:".$row['address'];?></p>
                        <p><?php echo "Message:".$row['message'];?><br><br><br></p>    
                    </div>
        <?php             
                }
            }
        ?>    
            
    
    </div>        

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
                <li><a href="feedback.php" title="Feedback">Send Feedback</a></li>
            </ul>
        </div>

    </div>
    <hr>
    <p> &copy;2025 Library Management System, All rights reserved</p>
</footer>   
</body>
</html>
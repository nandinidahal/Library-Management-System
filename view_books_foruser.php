<!DOCTYPE html>
<html>
<head>
    <title>view Issued Books</title>
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
          <li><a href="logout.php" title="logout">Logout</a></li>
        </ul>
      </nav>
    </div>
  </header>
 <main>
    <div class="form-title">View Issued Book</div>
  <form method="POST">
    <div class="field">  
      <label for="user_id">Enter User ID</label>
      <input type="number" name="UserId" id="UserId" required required min="1">
    </div>
      <button type="submit" >Search</button>
  </form>
   <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $UserId = $_POST['UserId'];
    require "DatabaseConnect.php";
    $sql = "SELECT * FROM issuebooks WHERE UserId = $UserId";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<h3>Books issued to User ID $UserId:</h3>";
        echo "<ul>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<li><strong>-book id: " . $row['book_id'] . "<br></strong>" .
                 "<strong>-book name: " . $row['BookName'] . "</strong><br>" .
                 "<strong>-author: " . $row['Author'] . "</strong></li>";
        }
        echo "</ul>";
    } 
    else {
        echo "No books found for User ID $UserId.";
    }
    }
?>
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
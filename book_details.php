<!DOCTYPE html>
<html>
<head>
    <title>Book Details</title>
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
            <li><a href="admin_dashboard.php" title="Admin">Admin Login</a></li>
            <li><a href="register.php" title="Register">Register</a></li>
            <li><a href="delete_book.php" title="Login">Login</a></li>
        </ul>
    </nav>
    </div>
</header>

<main>
<div class="table-container">

    <div class="table-title">Book Details</div>
    <a href="add_book.php">Add new book</a>
    <br><br>

    <?php
    require "DatabaseConnect.php";
    /*$conn = mysqli_connect("localhost", "root", "", "lms");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }*/
    
    $query = "SELECT * FROM books";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        echo "<table border='1' class='display' cellpadding='10'>";
        echo "<tr>
                <th>ID</th>
                <th>Title</th>
                <th>Author</th>
                <th>Publisher</th>
                <th>Year</th>
                <th>Status</th>
                <th>Action</th>
            </tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            // Determine status
            $status = ($row['available'] == 1) ? "Available" : "Issued";

            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['title']}</td>
                    <td>{$row['author']}</td>
                    <td>{$row['publisher']}</td>
                    <td>{$row['year']}</td>
                    <td>{$status}</td>
                    <td>
                        <a href='edit_book.php?id={$row['id']}'>Edit</a> |
                        <a href='delete_book.php?delete={$row['id']}' onclick='return confirm(\"Are you sure?\")'>Delete</a>
                    </td>
                </tr>";
        }

        echo "</table>";
    } else {
        echo "<p>No books found.</p>";
    }

    mysqli_close($conn);
    ?>
</div>
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
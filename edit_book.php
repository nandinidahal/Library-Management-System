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

   
    <?php
    require "Databaseconnect.php";
    /*$conn = mysqli_connect("localhost", "root", "", "lms");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }*/
    if (!isset($_GET['id'])) {
        echo "<p>No book ID provided.</p>";
        exit;
    }

    $id = $_GET['id'];

    if (isset($_POST['update_book'])) {
        $title = $_POST['title'];
        $author = $_POST['author'];
        $publisher = $_POST['publisher'];
        $year = $_POST['year'];

        $update_query = "UPDATE books SET title='$title', author='$author', publisher='$publisher', year='$year' WHERE id=$id";

        if (mysqli_query($conn, $update_query)) {
            echo "<p>Book updated successfully.</p>";
            echo "<p><a href='book_details.php'>Back to  Books Details</a></p>";
        } else {
            echo "<p>Error updating book: " . mysqli_error($conn) . "</p>";
        }
    }

    // Fetch book data to pre-fill form
    $query = "SELECT * FROM books WHERE id=$id";
    $result = mysqli_query($conn, $query);

    if ($row = mysqli_fetch_assoc($result)) {
    ?>
      <div class="form-title">Edit Book</div>
      
    <form method="post" action="">
        <div class="field">
            <label>Title:</label>
            <input type="text" name="title" value="<?php echo htmlspecialchars($row['title']); ?>" required>
        </div>

        <div class="field">
            <label>Author:</label><br>
            <input type="text" name="author" value="<?php echo htmlspecialchars($row['author']); ?>" required>
        </div>

        <div>
            <label>Publisher:</label><br>
            <input type="text" name="publisher" value="<?php echo htmlspecialchars($row['publisher']); ?>" required>
        </div>

        <div class="field">
            <label>Year:</label><br>
            <input type="date" name="year" value="<?php echo htmlspecialchars($row['year']); ?>" required><br><br>
        </div>

        <button type="submit" name="update_book" value="Update Book">Update</button>
    </form>

    <?php
    } else {
        echo "<p>Book not found.</p>";
    }

    mysqli_close($conn);
    ?>    
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
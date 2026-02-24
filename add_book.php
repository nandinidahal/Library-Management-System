<!DOCTYPE html>
<html>
<head>
    <title>Add New Book</title>
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

<main>
    <div class="form-title">Add Book</div>
    <div class="form_box">
    <!--h2>Add New Book</!--h2-->
    <form method="post" action="">
        <div class="field">
            <label>Title</label>
            <input type="text" name="title" required>
        </div>

        <div class="field">
            <label>Author</label>
            <input type="text" name="author" required>
        <div>    

        <div>
            <label>Publisher</label>
            <input type="text" name="publisher" required>
        </div>
        
        <div class="field">
            <label>Year</label>
            <input type="date" name="year" required>
        </div>

        <button type="submit" name="add_book" value="Add Book">Add Book</button>
    </form>
</div>

    <?php
    if (isset($_POST['add_book'])) {
        $conn = mysqli_connect("localhost", "root", "", "lms");

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $title = $_POST['title'];
        $author = $_POST['author'];
        $publisher = $_POST['publisher'];
        $year = $_POST['year'];

        $query = "INSERT INTO books (title, author, publisher, year)
                  VALUES ('$title', '$author', '$publisher', '$year')";

        if (mysqli_query($conn, $query)) {
            echo "<p>Book added successfully!</p>";
           echo "<a href='book_details.php' title='view'>view</a>";
        } else {
            echo "<p>Error: " . mysqli_error($conn) . "</p>";
             echo "<a href='admin_dashboard.php' title='Back'>Back</a>";
        }

        mysqli_close($conn);
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
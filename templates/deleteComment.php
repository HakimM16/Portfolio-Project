<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logged in</title>
    <!-- <link rel="stylesheet" href="/styles/reset.css"> -->
    <link rel="stylesheet" href="../styles/layout.css">
    <link rel="stylesheet" href="../styles/admin_logo.css">
    <!-- layout for mobile -->
    <link rel="stylesheet" href="../styles/layout_for_mobile.css">
    <link rel="stylesheet" href="../styles/blog.css">
    <!-- blog styling for mobile -->
    <link rel="stylesheet" href="../styles/blog_for_mobile.css">
    <!-- Ubuntu styling -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Comfortaa:wght@300..700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Oswald:wght@200..700&family=Outfit:wght@100..900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Sigmar&family=Teko:wght@300..700&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header">
        <a href="../index.php" class="logo">Hakim.</a>
        <?php
            session_start(); // start the session
            // check if the user is logged in

            if (isset($_SESSION['logged']) && $_SESSION['username'] == 'hakimmabike@gmail.com') {
                echo '<a href="../index.php" class="admin">Admin</a>';
            }
            if (isset($_SESSION['logged'])) {
                echo '
                <nav class="navbar">
                    <a href="../index.php" class="active">Home</a>
                    <a href="about.php">About</a>
                    <a href="portfolio.php">Portfolio</a>
                    <a href="education.php">Education</a>
                    <a href="skills.php">Skills</a>
                    <a href="experience.php">Experience</a>
                    <a href="login.php">Login</a>
                    <a href="addentry.php">Add Blog</a>
                    <a href="viewblog.php">View Blog</a>
                    <a href="contact.php">Contact</a>
                    <a href="logout.php">Logout</a>
                </nav>
                
                ';
            } else {
                echo '
                <nav class="navbar">
                    <a href="../index.php" class="active">Home</a>
                    <a href="about.php">About</a>
                    <a href="portfolio.php">Portfolio</a>
                    <a href="education.php">Education</a>
                    <a href="skills.php">Skills</a>
                    <a href="experience.php">Experience</a>
                    <a href="login.php">Login</a>
                    <a href="contact.php">Contact</a>
                </nav>
                
                ';
            }
        ?>
    </header>
    <div class="container">
    <?php
            // get values from the form
            $id = $_POST['id'];

            //connect to the database
            $servername = "127.0.0.1";
            $username = "root";
            $password = "";
            $dbname = "phase2";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // delete the comment from the database
            $sql = "DELETE FROM comments WHERE id='$id'";
            if ($conn->query($sql) === TRUE) {
                echo "<h2>Comment deleted successfully</h2>";
                echo "<p>You will be redirected to the <strong>home page</strong> in 3 seconds.</p>";
                header("refresh:3;url=http://localhost/phase2/index.php"); // redirect to index.php after 3 seconds
            } else {
                echo "Error deleting comment: " . $conn->error;
            }

            // close the connection
            $conn->close();
        ?>
    </div>
</body>
</html>
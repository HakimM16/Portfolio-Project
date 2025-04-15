
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Post</title>
    <!-- <link rel="stylesheet" href="/styles/reset.css"> -->
    <link rel="stylesheet" href="../styles/layout.css">
    <link rel="stylesheet" href="../styles/admin_logo.css">
    <!-- layout for mobile -->
    <link rel="stylesheet" href="../styles/layout_for_mobile.css">
    <!-- styling for blog page -->
    <link rel="stylesheet" href="../styles/blog.css">
    <link rel="stylesheet" href="../styles/preventOverflow.css">
    <!-- blog styling for mobile -->
    <link rel="stylesheet" href="../styles/viewblog_for_mobile.css">
    <!-- styling for submit button -->
    <link rel="stylesheet" href="../styles/button_for_viewblog.css">
    <!-- Ubuntu styling -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Comfortaa:wght@300..700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Oswald:wght@200..700&family=Outfit:wght@100..900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Sigmar&family=Teko:wght@300..700&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- add in nav, figure, figcaption, footer, article and header -->
    <header class="header">
        <a href="../index.php" class="logo">Hakim.</a>

        <?php
            session_start(); // start the session
            if (isset($_SESSION['logged']) && $_SESSION['username'] == 'hakimmabike@gmail.com') {
                echo '<a href="../index.php" class="admin">Admin</a>';
            }
            // check if the user is logged in
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
        // get data from the form
        $comment = $_POST['comment'];
        $title = $_POST['title'];
        date_default_timezone_set("Europe/London"); // set the timezone to Europe/London
        $date = date("Y-m-d H:i:s"); // get the current date and time

        // connect to the database
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

        // add the comment to the database
        $sql = "INSERT INTO comments (title, content, created_at) VALUES ('$title', '$comment', '$date')";
        if ($conn->query($sql) === TRUE) {
            echo "<h2>Comment added successfully</h2>";
            echo "<p>Redirecting to the blog page...</p>";
            header("refresh:2;url=http://localhost/phase2/templates/viewblog.php"); // redirect to viewblog.php after 2 seconds
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
        // end the session
    ?>

    </div>
</body>
</html>

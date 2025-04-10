<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="/styles/reset.css"> -->
    <link rel="stylesheet" href="../styles/layout.css">
    <!-- layout for mobile -->
    <link rel="stylesheet" href="../styles/layout_for_mobile.css">
    <link rel="stylesheet" href="../styles/login.css">
    <!-- login styling for mobile -->
    <link rel="stylesheet" href="/styles/login_for_mobile.css">
    <!-- Ubuntu styling -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Comfortaa:wght@300..700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Oswald:wght@200..700&family=Outfit:wght@100..900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Sigmar&family=Teko:wght@300..700&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">    
</head>
<body>
    <header class="header">
        <a href="../index.php" class="logo">Hakim.</a>
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
    </header>
    <div class="container">
        <?php

            session_start();
            // check if the user is already logged in
            if (isset($_SESSION['logged'])) {
                header("Location: http://localhost/phase2/index.php"); // redirect to index.php
            
            } else {
                // get data from the form
                $email = $_POST['username'];
                $password1 = $_POST['password'];

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

                // check if the username and password are correct
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $sql = "SELECT * FROM logininfo WHERE email='$email' AND password='$password1'";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // redirect to addPost.php
                        $_SESSION['logged'] = true;
                        header("Location: loggedin.php");
                    } else {
                        echo "<h2>Invalid username or password</h2>";
                        echo "<p>Please try again.</p>";
                        header("refresh:2;url=http://localhost/phase2/templates/login.php"); // redirect to login.php after 2 seconds
                    }
                }
            }
        ?>
    </div>
</body>
</html>
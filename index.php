<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio Website HTM CSS Only</title>
    <link rel="stylesheet" href="styles/home.css">
    <!-- home styling for mobile -->
    <link rel="stylesheet" href="styles/home_for_mobile.css">
    <link rel="stylesheet" href="styles/layout.css">
    <!-- layout for mobile -->
    <link rel="stylesheet" href="/styles/layout_for_mobile.css">
    <!-- <link rel="stylesheet" href="/styles/reset.css"> -->
    <!-- Ubuntu styling -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Comfortaa:wght@300..700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Oswald:wght@200..700&family=Outfit:wght@100..900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Sigmar&family=Teko:wght@300..700&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header">
        <a href="#" class="logo">Hakim.</a>
        <?php
            session_start(); // start the session
            // check if the user is logged in
            if (isset($_SESSION['logged'])) {
                echo '
                <nav class="navbar">
                    <a href="#" class="active">Home</a>
                    <a href="templates/about.php">About</a>
                    <a href="templates/portfolio.php">Portfolio</a>
                    <a href="templates/education.php">Education</a>
                    <a href="templates/skills.php">Skills</a>
                    <a href="templates/experience.php">Experience</a>
                    <a href="templates/login.php">Login</a>
                    <a href="templates/addentry.php">Add Blog</a>
                    <a href="templates/viewblog.php">View Blog</a>
                    <a href="templates/contact.php">Contact</a>
                    <a href="templates/logout.php">Logout</a>
                </nav>
                
                ';
            } else {
                echo '
                <nav class="navbar">
                    <a href="#" class="active">Home</a>
                    <a href="templates/about.php">About</a>
                    <a href="templates/portfolio.php">Portfolio</a>
                    <a href="templates/education.php">Education</a>
                    <a href="templates/skills.php">Skills</a>
                    <a href="templates/experience.php">Experience</a>
                    <a href="templates/login.php">Login</a>
                    <a href="templates/contact.php">Contact</a>
                </nav>
                
                ';
            }
        ?>
    </header>
    <article class="home">
        <section class="main">
            <div class="main-content">
                <h1>Hi, I'm Hakim Mabike</h1>
                <h3>Welcome to my Portfolio</h3>
                <div class="btn-box"> <!--Uses flex-->
                    <a href="templates/portfolio.php">My portfolio</a>
                    <a href="templates/contact.php">Contact me</a>
                </div>
            </div>
        </section>
    </article>
    <!-- make footer -->
    <footer>
        <p>&copy; 2025 Hakim Mabike</p>
    </footer>
</body>
</html>
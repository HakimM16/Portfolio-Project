<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- <link rel="stylesheet" href="/styles/reset.css"> -->
    <link rel="stylesheet" href="../styles/layout.css">
    <link rel="stylesheet" href="../styles/admin_logo.css">
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
    <!-- add in nav, footer, article, aside and header -->
    <header class="header">
        <a href="../index.php" class="logo">Hakim.</a>
        <?php
            session_start(); // start the session
            if (isset($_SESSION['logged']) && $_SESSION['username'] == 'hakimmabike@gmail.com') {
                echo '<a href="../index.php" class="admin">Admin</a>';
            }
            // check if the user is logged in
            if (isset($_SESSION['logged'])) {
                header("location: alreadyloggedin.php"); // redirect to index.php
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
        <article>
            <aside>
                <h2 class="text-style">Login</h2>
                <form action="checklogin.php" method="post">
                    <label for="username" class="text-style">Email:</label>
                    <input type="email" id="username" name="username" required>
                    <br>
                    <label for="password" class="text-style">Password:</label>
                    <input type="password" id="password" name="password" class="text-style" required>
                    <br>
                    <button type="submit">Login</button>
                </form>
            </aside>
        </article>
        <footer>
            <p>&copy; 2025 Hakim Mabike</p>
        </footer>
    </div>
</body>
</html>
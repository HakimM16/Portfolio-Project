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
    <!-- styling for about.html -->
    <link rel="stylesheet" href="../styles/about.css">
    <!-- smaller screen styling -->
    <link rel="stylesheet" href="../styles/about_for_smaller.css">
    <!-- Ubuntu styling -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Comfortaa:wght@300..700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Oswald:wght@200..700&family=Outfit:wght@100..900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Sigmar&family=Teko:wght@300..700&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- add in nav, figure, figcaption, footer, article and header -->
    <header class="header">
        <a href="#" class="logo">Hakim.</a>

        <?php
            session_start(); // start the session
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
                    <a href="blog.php">Blog</a>
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
    <!-- make a description of yourself here -->
    <article class="home">
        <section class="main">
            <div class="main-content">
                <h1>Aspiring Software Engineer</h1>
                <h3>Computer Science Student at Queen Mary University of London</h3>
                <p>
                    I'm a Computer Science student at Queen Mary University of London, 
                    passionate about leveraging technology to solve real-world challenges. Building a strong foundation in programming, 
                    particularly in Python, JavaScript and Java, and actively improving my skills in software development and core computer science principles. 
                    Eager to explore new areas within tech such as cloud computing, continuously seek opportunities to deepen my knowledge and practical experience, 
                    staying open to innovative projects and collaborations that push my skills further.
                </p>
                
                <!-- Social Links with GitHub Icon -->
                <div class="icons">
                    <div class="social-links">
                        <a href="https://github.com/HakimM16" target="_blank" title="GitHub Profile">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/hakim-mabike-643848214/" target="_blank" title="LinkedIn Profile">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </div>
                    
                    <!-- Resume Download Button -->
                    <a href="../CV_for_course.pdf" download class="resume-download">
                        <i class="fas fa-download"></i> Download Resume
                    </a>
                </div>
            </div>
            <div class="pic">
                <img src="../images/Profile.jpg" alt="Profile picture">
            </div>
        </section>
    </article>
    <footer>
        <p>&copy; 2025 Hakim Mabike</p>
    </footer>
</body>
</html>
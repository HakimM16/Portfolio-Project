<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experience</title>
    <!-- <link rel="stylesheet" href="/styles/reset.css"> -->
    <link rel="stylesheet" href="../styles/layout.css">
    <link rel="stylesheet" href="../styles/admin_logo.css">
    <!-- layout for mobile -->
    <link rel="stylesheet" href="../styles/layout_for_mobile.css">
    <!-- Ubuntu styling -->
    <!-- styling for experience.html -->
    <link rel="stylesheet" href="../styles/experience.css">
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
            if ($_SESSION['username'] == 'hakimmabike@gmail.com') {
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
    <div class="timeline-container">
        <div class="center-line"></div>
        
        <!-- First job -->
        <div class="timeline-item">
          <div class="job-title">React.js Developer</div>
          <div class="company-info">
            <div class="company-logo">
              <img src="../images/company/starbucks.png" alt="Starbucks Logo" class="logo-img">
            </div>
            <div class="company-date">Starbucks: March 2020 - April 2021</div>
          </div>
          <ul>
            <li>Developing and maintaining web applications using React.js and other related technologies.</li>
            <li>Collaborating with cross-functional teams including designers, product managers, and other developers to create high-quality products.</li>
            <li>Implementing responsive design and ensuring cross-browser compatibility.</li>
            <li>Participating in code reviews and providing constructive feedback to other developers.</li>
          </ul>
        </div>
    
        <!-- Second job -->
        <div class="timeline-item">
          <div class="job-title">React Native Developer</div>
          <div class="company-info">
            <div class="company-logo">
              <img src="../images/company/tesla.png" alt="Tesla Logo" class="logo-img">
            </div>
            <div class="company-date">Tesla: Jan 2021 - Feb 2022</div>
          </div>
          <ul>
            <li>Developing and maintaining web applications using React.js and other related technologies.</li>
            <li>Collaborating with cross-functional teams including designers, product managers, and other developers to create high-quality products.</li>
            <li>Implementing responsive design and ensuring cross-browser compatibility.</li>
            <li>Participating in code reviews and providing constructive feedback to other developers.</li>
          </ul>
        </div>
    
        <!-- Third job -->
        <div class="timeline-item">
          <div class="job-title">Web Developer</div>
          <div class="company-info">
            <div class="company-logo">
              <img src="../images/company/shopify.png" alt="Shopify Logo" class="logo-img">
            </div>
            <div class="company-date">Shopify: Jan 2022 - Jan 2023</div>
          </div>
          <ul>
            <li>Developing and maintaining web applications using React.js and other related technologies.</li>
            <li>Collaborating with cross-functional teams including designers, product managers, and other developers to create high-quality products.</li>
            <li>Implementing responsive design and ensuring cross-browser compatibility.</li>
            <li>Participating in code reviews and providing constructive feedback to other developers.</li>
          </ul>
        </div>
    
        <!-- Fourth job -->
        <div class="timeline-item">
          <div class="job-title">Full stack Developer</div>
          <div class="company-info">
            <div class="company-logo">
              <img src="../images/company/meta.png" alt="Meta Logo" class="logo-img">
            </div>
            <div class="company-date">Meta: Jan 2023 - Present</div>
          </div>
          <ul>
            <li>Developing and maintaining web applications using React.js and other related technologies.</li>
            <li>Collaborating with cross-functional teams including designers, product managers, and other developers to create high-quality products.</li>
            <li>Implementing responsive design and ensuring cross-browser compatibility.</li>
            <li>Participating in code reviews and providing constructive feedback to other developers.</li>
          </ul>
        </div>
      </div>
    <footer>
        <p>&copy; 2025 Hakim Mabike</p>
    </footer>
</body>
</html>
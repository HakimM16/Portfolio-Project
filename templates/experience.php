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
    <link rel="stylesheet" href="../styles/center_line.css">
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
    <div class="timeline-container">
        <div class="center-line"></div>
        
        <!-- First job -->
        <div class="timeline-item">
          <div class="job-title">Warehouse Operative</div>
          <div class="company-info">
            <div class="company-logo">
              <img src="../images/company/Ocado.png" alt="Ocado Logo" class="logo-img">
            </div>
            <div class="company-date">Ocado Retail: October 2023 - Present</div>
          </div>
          <ul>
            <li>Collaborated with team members to meet daily targets, ensuring on-time delivery and customer satisfaction.</li>
            <li>Implemented organizational strategies to optimise space utilisation and streamline workflow.</li>
            <li>Followed strict safety and quality guidelines to maintain a clean, hazard-free work environment.</li>
          </ul>
        </div>
    
        <!-- Second job -->
        <div class="timeline-item">
          <div class="job-title">Internship Experience UK (IEUK) Technology & Engineering</div>
          <div class="company-info">
            <div class="company-logo">
              <img src="../images/company/Bright-network-logo.png" alt="Bright network Logo" class="logo-img">
            </div>
            <div class="company-date">Bright Netwrok: July 2025</div>
          </div>
          <ul>
            <li>Participated in a structured virtual internship aimed at enhancing key technical and employability skills in the technology and engineering sectors.</li>
            <li>Participated in industry-led workshops by Google, Cisco, JLR, and Lloyds Banking Group on AI applications, project management, and assessment strategies.</li>
            <li>Completed a sector skills project simulating industry challenges and delivered solution presentations to peers.</li>
            <li>Engaged in graduate panels and networking sessions to explore career pathways with industry professionals.</li>
          </ul>
        </div>
    
        
    <footer>
        <p>&copy; 2025 Hakim Mabike</p>
    </footer>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/education.css">
    <!-- education styling for mobile -->
    <link rel="stylesheet" href="../styles/education_for_mobile.css">
    <link rel="stylesheet" href="../styles/layout.css">
    <!-- layout for mobile -->
    <link rel="stylesheet" href="../styles/layout_for_mobile.css">
     <!-- <link rel="stylesheet" href="/styles/reset.css"> -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Font Awesome or similar icon library for the tag icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <!-- Ubuntu styling -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Anton&family=Comfortaa:wght@300..700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Oswald:wght@200..700&family=Outfit:wght@100..900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Sigmar&family=Teko:wght@300..700&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- add in nav, figure, figcaption, footer and header -->
    <header class="header">
        <a href="../index.php" class="logo">Hakim.</a>

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
    <article class="home">
        <section class="extraInfo">
            <!-- education -->
            <div class="education">
                <h2 class="section-title">Education</h2>
                <aside class="education-item">
                    <div class="education-logo">
                        <img src="../images/logo.jpg" alt="Queen Mary University of London Logo">
                    </div>
                    <div class="education-details">
                        <h2 class="university-name">Queen Mary University of London</h2>
                        <p class="degree">Bachelor of Science - BS, Computer Science</p>
                        <p class="duration">Sep 2024 - Jul 2027</p>
                        
                        <div class="skills">
                            <span class="skill-tag"><i class="fas fa-tag"></i> Java and Python (Programming Language)</span>
                        </div>
                    </div>
                </aside>
            </div>
            <!-- certification -->
             <br>
            <div class="certification">
                <h2 class="section-title">Certifications</h2>
                <!-- Learn Java: Object-Oriented Programming Course -->
                <aside class="certification-item">
                    <div class="certification-logo">
                        <img src="../images/codecademy_logo.png" alt="codecademy logo">
                    </div>
                    <div class="certification-details">
                        <h2 class="certification-name">Learn Java: Object-Oriented Programming Course</h2>
                        <p class="certification-provider">Codecademy</p>
                        <p class="certification-duration">Issued Feb 2025</p>
                        
                        <div class="skills">
                            <span class="skill-tag"><i class="fas fa-tag"></i> Java (Programming Language)</span>
                        </div>
                    </div>
                </aside>
                <!-- openAI with JavaScript -->
                <aside class="certification-item">
                    <div class="certification-logo">
                        <img src="../images/codecademy_logo.png" alt="codecademy logo">
                    </div>
                    <div class="certification-details">
                        <h2 class="certification-name">OpenAI API Coding with JavaScript Course</h2>
                        <p class="certification-provider">Codecademy</p>
                        <p class="certification-duration">Issued Feb 2025</p>
                        
                        <div class="skills">
                            <span class="skill-tag"><i class="fas fa-tag"></i> JavaScript (Programming Language)</span>
                        </div>
                    </div>
                </aside>
                <!-- learn javascript -->
                <aside class="certification-item">
                    <div class="certification-logo">
                        <img src="../images/codecademy_logo.png" alt="codecademy logo">
                    </div>
                    <div class="certification-details">
                        <h2 class="certification-name">Learn JavaScript Course</h2>
                        <p class="certification-provider">Codecademy</p>
                        <p class="certification-duration">Issued Jan 2025</p>
                        
                        <div class="skills">
                            <span class="skill-tag"><i class="fas fa-tag"></i> JavaScript (Programming Language)</span>
                        </div>
                    </div>
                </aside>
                <!-- learn python 3 -->
                <aside class="certification-item">
                    <div class="certification-logo">
                        <img src="../images/codecademy_logo.png" alt="codecademy logo">
                    </div>
                    <div class="certification-details">
                        <h2 class="certification-name">Learn Python 3 Course</h2>
                        <p class="certification-provider">Codecademy</p>
                        <p class="certification-duration">Issued Jan 2025</p>
                        
                        <div class="skills">
                            <span class="skill-tag"><i class="fas fa-tag"></i> Python (Programming Language)</span>
                        </div>
                    </div>
                </aside>
                <!-- openai with python -->
                <aside class="certification-item">
                    <div class="certification-logo">
                        <img src="../images/codecademy_logo.png" alt="codecademy logo">
                    </div>
                    <div class="certification-details">
                        <h2 class="certification-name">OpenAI API Coding with Python Course</h2>
                        <p class="certification-provider">Codecademy</p>
                        <p class="certification-duration">Issued Dec 2024</p>
                        
                        <div class="skills">
                            <span class="skill-tag"><i class="fas fa-tag"></i> Python (Programming Language)</span>
                        </div>
                    </div>
                </aside>
            </div>
        </section>
    </article>
    <footer>
        <p>&copy; 2025 Hakim Mabike</p>
    </footer>
</body>
</html>
<!--Portfolio.html-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Section</title>
    <link rel="stylesheet" href="../styles/portfolio.css">
    <link rel="stylesheet" href="../styles/layout.css">
    <!-- layout for mobile -->
    <link rel="stylesheet" href="../styles/layout_for_mobile.css">
    <!-- <link rel="stylesheet" href="/styles/reset.css"> -->
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
                    <a href="viewblog.php">View Blog</a>
                    <a href="addentry.php">Add Blog</a>
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
    <section class="portfolio-section">
        <h1 class="fade-in">My Portfolio</h1>
        <p class="fade-in">Explore some of my recent projects below.</p>
        <div class="portfolio-items">
            <div class="portfolio-item fade-in">
                <h3>Cost of Living 💷</h3>
                <p class="project-description">
                    This project is a <strong>cost of living comparison web application</strong> that allows users to input expenses for two cities and compare them through an interactive form. Built with 
                    <span class="highlighter">HTML</span>, <span class="highlighter">CSS</span>, <span class="highlighter">JavaScript</span> for the frontend and 
                    <span class="highlighter">Python (Flask)</span> for the backend, it displays a detailed breakdown of expenses using 
                    <strong>responsive tables</strong> and a <strong>visually appealing design</strong>.
                </p>                
                <a href="https://cost-of-living-project.vercel.app">View Project</a>
            </div>
            
            <div class="portfolio-item fade-in">
                <h3>Connect 4 🕹️</h3>
                <p class="project-description">
                    This project is a <strong>Connect 4 project</strong> where players take turns dropping pieces 
                    to connect four in a row. Built with <span class="highlighter">HTML</span>, 
                    <span class="highlighter">CSS</span>, and <span class="highlighter">JavaScript</span>, it dynamically 
                    generates the board, checks for winners, and announces results. It showcases skills in 
                    <span class="highlighter">web development</span>, <strong>DOM manipulation</strong>, and 
                    <strong>game logic implementation</strong>.
                </p>                               
                <a href="https://connect-4-9ehl.vercel.app">View Project</a>
            </div>
            <div class="portfolio-item fade-in">
                <h3>Crypto Tracker 🪙</h3>
                <p class="project-description">
                    The Crypto Tracker App is a <strong>React.js-based web application</strong> that enables users to monitor 
                    <strong>real-time cryptocurrency prices</strong>, analyze value trends through <strong>interactive charts</strong>, 
                    and access essential crypto-related information. Built with 
                    <span class="highlighter">React.js</span> and <span class="highlighter">React Router DOM</span> for seamless navigation, 
                    it utilizes <span class="highlighter">Axios</span> to fetch live and historical data from the 
                    <span class="highlighter">CryptoCompare API</span>. Visualizations are powered by 
                    <span class="highlighter">Chart.js</span> or <span class="highlighter">Recharts</span>, while modern and responsive 
                    styling is achieved with <span class="highlighter">Tailwind CSS</span> or 
                    <span class="highlighter">Material-UI</span>. The app is designed for 
                    <strong>cryptocurrency enthusiasts</strong> to stay updated and make informed decisions effortlessly.
                </p>
                <a href="https://crypto-tracker-tau-ten.vercel.app">View Project</a>
            </div>
            <div class="portfolio-item fade-in">
                <h3>Gemini Clone 🔹</h3>
                <p class="project-description">
                    This is a Google Gemini clone in a dark mode layout built with <strong>react.js</strong>, 
                    <strong>tailwind css</strong> and <strong>Gemini API</strong>. It produces basic text with 
                    <span class="highlighter">bullet points</span> and <span class="highlighter">italics</span>.
                </p>
                <a href="https://gemini-clone-coral-sigma.vercel.app">View Project</a>
            </div>  
            <div class="portfolio-item fade-in">
                <h3>Finance chatbot 📈</h3>
                <p class="project-description">
                    This chatbot serves as a <strong>personal finance advisor</strong>, providing financial advice based on your questions. 
                    The application is built using <span class="highlighter">Next.js</span> for the frontend and retrieves responses 
                    to prompts via the <span class="highlighter">OpenAI API</span>.
                </p>
                <a href="https://finance-advisor-chatbot.vercel.app">View Project</a>
            </div>
            <!--
            <div class="portfolio-item fade-in">
                <h3>Project 3</h3>
                <p class="project-description">A brief description of the project.</p>
                <a href="../index.php">View Project</a>
            </div>
            -->
        </div>
    </section>

    <footer>
        <p>&copy; 2025 Hakim Mabike</p>
    </footer>
</body>
</html>
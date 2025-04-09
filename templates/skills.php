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
    <link rel="stylesheet" href="../styles/skills.css">
    <!-- skills styling for mobile -->
    <link rel="stylesheet" href="../styles/skills_for_mobile.css">
    <!-- Ubuntu styling -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Comfortaa:wght@300..700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Oswald:wght@200..700&family=Outfit:wght@100..900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Sigmar&family=Teko:wght@300..700&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
</head>
<body>
    <!--Skills and achievments-->
    <!-- add in nav, figure, figcaption, footer, article and header -->
    <header class="header">
        <a href="#" class="logo">Hakim.</a>
        <?php
            session_start(); // start the session
            // check if the user is logged in
            if (isset($_SESSION['logged'])) {
                echo '
                <nav class="navbar">
                    <a href="#" class="active">Home</a>
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
                    <a href="#" class="active">Home</a>
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
    <!-- Talk about the programming languages you know and the projects you have worked on. -->
    <main>
        <section class="skills">
            <div class="title">
                <h5>Programming Languages and Frameworks I use</h5>
            </div>
            <ul>
                <li>
                    <div class="image">
                        <img src="../images/html.png" alt="HTML">
                    </div>
                </li>
                <li>
                    <div class="image">
                        <img src="../images/css.png" alt="CSS">
                    </div>
                </li>
                <li>
                    <div class="image">
                        <img src="../images/python.png" alt="Python">
                    </div>
                </li>
                <li>
                    <div class="image">
                        <img src="../images/java.png" alt="Java">
                    </div>
                </li>
                <li>
                    <div class="image">
                        <img src="../images/javascript.png" alt="JavaScript">
                    </div>
                </li>
                <li>
                    <div class="image">
                        <img src="../images/reactjs.png" alt="React.js">
                    </div>
                </li>
                <li>
                    <div class="image">
                        <img src="../images/nextjs.png" alt="Next.js">
                    </div>
                </li>
                <li>
                    <div class="image">
                        <img src="../images/flask.png" alt="Flask">
                    </div>
                </li>
                <li>
                    <div class="image">
                        <img src="../images/tailwind.png" alt="Tailwind CSS">
                    </div>
                </li>
            </ul>
        </section>
        <section class="projects">
            <div class="title">
                <h5>Projects where I showcased my skills</h5>
            </div>
            <article class="project-cards">
                <div class="card">
                    <div class="chat-interface">
                       <img src="../images/gemini_clone.png" alt="Gemini Clone">
                    </div>
                    
                    <div class="title-container">
                      <div class="title">Gemini Clone</div>
                      <div class="gemini-icon icon">✦</div>
                    </div>
                    
                    <div class="description">
                        Created a Google Gemini clone in a dark mode layout built with react.js, tailwind css and Gemini API
                    </div>
                    
                    <div class="tags">
                      <span class="tag green">#reactjs</span>
                      <span class="tag blue">#Gemini API</span>
                      <span class="tag orange">#Tailwind CSS</span>
                    </div>
                </div>
                <div class="card">
                    <div class="chat-interface">
                        <img src="../images/cost_of_living.png" alt="Cost of Living">
                    </div>
                    
                    <div class="title-container">
                      <div class="title">Cost of Living</div>
                      <div class="living-icon icon">💵</div>
                    </div>
                    
                    <div class="description">
                        Created a cost of living comparison web application, built with HTML, CSS, JavaScript for frontend and Python (Flask) for the backend.
                    </div>
                    
                    <div class="tags">
                        <span class="tag green">#HTML</span>
                        <span class="tag orange">#CSS</span>
                      <span class="tag green">#JavaScript</span>
                      <span class="tag blue">#Flask</span>
                    </div>
                </div>
                <div class="card">
                <div class="chat-interface">
                    <img src="../images/personal_finance.png" alt="Finance Chatbot">
                </div>
                
                <div class="title-container">
                    <div class="title">Finance Chatbot</div>
                    <div class="finance-icon icon">🪙</div>
                </div>
                
                <div class="description">
                    Created a finance chatbot that provides financial advice and investment tips to users. Built with next.js and OpenAI API.
                </div>
                
                <div class="tags">
                    <span class="tag green">#nextjs</span>
                    <span class="tag blue">#OpenAI API</span>
                </div>
                </div>
            </article>
        </section>
    </main>
    <footer>
        <p>&copy; 2025 Hakim Mabike</p>
    </footer>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Blog</title>
    <!-- <link rel="stylesheet" href="/styles/reset.css"> -->
    <link rel="stylesheet" href="../styles/layout.css">
    <!-- layout for mobile -->
    <link rel="stylesheet" href="../styles/layout_for_mobile.css">
    <!-- styling for blog page -->
    <link rel="stylesheet" href="../styles/viewblog.css">
    <link rel="stylesheet" href="../styles/viewblog2.css">
    <link rel="stylesheet" href="../styles/preventOverflow.css">
    <link rel="stylesheet" href="../styles/selector.css">
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
        <div class="container1">
            <div class="month">
                <!-- make a form to select the month -->
                <form action="viewblog.php" method="post">
                    <label for="month" class="select_month">Select Month:</label>
                    <div>
                        <select name="month" id="month">
                            <option value="all">All</option>
                            <option value="1">January</option>
                            <option value="2">February</option>
                            <option value="3">March</option>
                            <option value="4">April</option>
                            <option value="5">May</option>
                            <option value="6">June</option>
                            <option value="7">July</option>
                            <option value="8">August</option>
                            <option value="9">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                        <input type="submit" value="Filter" id="filter">
                    </div>
                </form>
            </div>
        </div>
        <div class="blog-container">
            <!-- blog template for user-->
            <!-- <div class="blog-post">
                <div class="top">
                    <h2>Blog Post Title</h2>
                    <p><small>Posted on 2023-10-01</small></p>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <hr>
                <div class="comment-section">
                    <h3>Comments</h3>
                    <div class="comment">
                        <p><strong>User1:</strong> This is a comment.</p>
                    </div>
                    <form action="addcomment.php" method="post">
                        <label for="comment">Add a comment</label>
                        <textarea id="comment" name="comment" rows="4" cols="50"></textarea>
                        <input type="submit" value="Post Comment">
                        <button class="delete" type="submit" name="value">
                            Post Comment
                        </button>
                    </form>
                </div>
                <hr>
                <form action="deletepost.php" method="post">
                    <button class="delete" type="submit" name="value">
                        Delete Post
                    </button>
                </form>
            </div> -->
            <!-- blog template for adminstrator-->
            <!-- <div class="blog-post">
                <div class="top">
                    <h2>Blog Post Title</h2>
                    <p><small>Posted on 2023-10-01</small></p>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <hr>
                <div class="comment-section">
                    <h3>Comments</h3>
                    <div class="comment-for-admin">
                        <p value="comment"><strong>User1:</strong> This is a comment.</p>
                        <form action="deleteComment.php" method="post">
                            <button class="delete" type="submit" name="value" value="comment">
                                Delete Comment
                            </button>
                        </form>
                    </div>
                </div>
                <hr>
                <form action="deletepost.php" method="post">
                    <button class="delete" type="submit" name="value">
                        Delete Post
                    </button>
                </form>
            </div> -->
            <?php

                // get value from the form
                if (isset($_POST['month'])) {
                    $month = $_POST['month'];
                } else {
                    $month = 'all'; // default value
                }

                //connect to the database
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

                $blogPosts = []; // Array to store all blog posts

                // if-statement to check if the month is selected or all
                if ($month == 'all') {
                    // get the data from the database - without ORDER BY
                    $sql = "SELECT * FROM bloginfo";
                    $result = $conn->query($sql);

                    

                    if ($result->num_rows == 0) {
                        echo '<p class="no-posts">No posts available.</p>';
                        
                    }
                    
                    if ($result->num_rows > 0) {
                        // Store all rows in our array
                        while($row = $result->fetch_assoc()) {
                            $blogPosts[] = $row;
                        }
                        
                        // Sort the array by created_at in descending order
                        usort($blogPosts, function($a, $b) {
                            return strtotime($b["created_at"]) - strtotime($a["created_at"]);
                        });
                        
                        // Now display the sorted posts
                        foreach($blogPosts as $row) {
                            // changing the format of the date to be more readable
                            $date = new DateTime($row["created_at"]);
                            $formatted_date = $date->format('d F Y, H:i') . ' UTC'; 
                            // give custom card if email is hakimmabike@gmail.com
                            if (isset($_SESSION['username']) && $_SESSION['username'] != 'hakimmabike@gmail.com') {
                                // get comments from the database based on the title
                                $sql1 = "SELECT * FROM comments WHERE title = '". $row["title"]. "' ORDER BY created_at DESC";
                                $result1 = $conn->query($sql1);

                                echo '<div class="blog-post">';
                                echo ' <div class="top">';
                                echo ' <h2>'. $row["title"]. '</h2>';
                                echo ' <p><small>🕛 Posted on '. $formatted_date. '</small></p>';
                                echo ' </div>';
                                echo ' <div class="content-wrapper"><p class="info">'. $row["info"]. '</p></div>';
                                echo '<hr>';
                                echo '<div class="comment-section">';
                                echo '<h2>Comments</h2>';

                                if ($result1->num_rows > 0) {
                                    // Store all rows in our array
                                    while($row1 = $result1->fetch_assoc()) {
                                        echo '<div class="comment">';
                                        echo '<p value="comment" class="info">&bull; '. $row1["content"] . '</p>';
                                        echo '</div>';
                                    }
                                }
                                echo '<hr>';
                                echo '<form action="addcomment.php" method="post" id="comment-form">';
                                echo '<label for="comment">Add a comment</label>';
                                echo '<textarea id="comment" name="comment" rows="4" cols="50"></textarea>';
                                echo '<button id="post-comment" type="submit" name="title" value="'. $row["title"] .'">';
                                echo 'Post Comment';
                                echo '</button>';
                                echo '</form>';
                                echo '</div>';
                                echo ' </div>';
                            } else {
                                // get comments from the database based on the title
                                $sql1 = "SELECT * FROM comments WHERE title = '". $row["title"]. "' ORDER BY created_at DESC";
                                $result1 = $conn->query($sql1);
                                echo '<div class="blog-post">';
                                echo ' <div class="top">';
                                echo ' <h2>'. $row["title"]. '</h2>';
                                echo ' <p><small>🕛 Posted on '. $formatted_date. '</small></p>';
                                echo ' </div>';
                                echo ' <div class="content-wrapper"><p class="info">'. $row["info"]. '</p></div>';
                                echo '  <hr>';
                                echo '<div class="comment-section">';
                                echo '<h2>Comments</h2>';
                                if ($result1->num_rows > 0) {
                                    // Store all rows in our array
                                    while($row1 = $result1->fetch_assoc()) {
                                        echo '<div class="comment">';
                                        echo '<p value="comment" class="info">&bull; '. $row1["content"] . '</p>';
                                    }
                                }
                                echo '<form action="deleteComment.php" method="post">';
                                echo '<button class="delete delete-comment" type="submit" name="value" value="comment">';
                                echo 'Delete Comment';
                                echo '</button>';
                                echo '</form>';
                                echo '</div>';
                                echo '</div>';
                                echo '<hr>';
                                echo ' <form action="deletepost.php" method="post">';
                                echo ' <button class="delete" type="submit" name="title" value="'. $row["title"] .'">Delete Post</button>';
                                echo ' </form>';
                                echo ' </div>';
                            }

                        }
                    } 
                } else {
                    // get the data from the database - without ORDER BY
                    $sql = "SELECT * FROM `bloginfo` WHERE MONTH(created_at) = $month";
                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
                        // Store all rows in our array
                        while($row = $result->fetch_assoc()) {
                            $blogPosts[] = $row;
                        }
                        
                        // Sort the array by created_at in descending order
                        usort($blogPosts, function($a, $b) {
                            return strtotime($b["created_at"]) - strtotime($a["created_at"]);
                        });
                        
                        // Now display the sorted posts
                        foreach($blogPosts as $row) {
                            // changing the format of the date to be more readable
                            $date = new DateTime($row["created_at"]);
                            $formatted_date = $date->format('d F Y, H:i') . ' UTC'; 
                            // give custom card if email is hakimmabike@gmail.com
                            if (isset($_SESSION['username']) && $_SESSION['username'] != 'hakimmabike@gmail.com') {
                                // get comments from the database based on the title
                                $sql1 = "SELECT * FROM comments WHERE title = '". $row["title"]. "' ORDER BY created_at DESC";
                                $result1 = $conn->query($sql1);

                                echo '<div class="blog-post">';
                                echo ' <div class="top">';
                                echo ' <h2>'. $row["title"]. '</h2>';
                                echo ' <p><small>🕛 Posted on '. $formatted_date. '</small></p>';
                                echo ' </div>';
                                echo ' <div class="content-wrapper"><p class="info">'. $row["info"]. '</p></div>';
                                echo '<hr>';
                                echo '<div class="comment-section">';
                                echo '<h2>Comments</h2>';

                                if ($result1->num_rows > 0) {
                                    // Store all rows in our array
                                    while($row1 = $result1->fetch_assoc()) {
                                        echo '<div class="comment">';
                                        echo '<p value="comment" class="info">&bull; '. $row1["content"] . '</p>';
                                        echo '</div>';
                                    }
                                }
                                echo '<hr>';
                                echo '<form action="addcomment.php" method="post" id="comment-form">';
                                echo '<label for="comment">Add a comment</label>';
                                echo '<textarea id="comment" name="comment" rows="4" cols="50"></textarea>';
                                echo '<button id="post-comment" type="submit" name="title" value="'. $row["title"] .'">';
                                echo 'Post Comment';
                                echo '</button>';
                                echo '</form>';
                                echo '</div>';
                                echo ' </div>';
                            } else {
                                // get comments from the database based on the title
                                $sql1 = "SELECT * FROM comments WHERE title = '". $row["title"]. "' ORDER BY created_at DESC";
                                $result1 = $conn->query($sql1);
                                echo '<div class="blog-post">';
                                echo ' <div class="top">';
                                echo ' <h2>'. $row["title"]. '</h2>';
                                echo ' <p><small>🕛 Posted on '. $formatted_date. '</small></p>';
                                echo ' </div>';
                                echo ' <div class="content-wrapper"><p class="info">'. $row["info"]. '</p></div>';
                                echo '  <hr>';
                                echo '<div class="comment-section">';
                                echo '<h2>Comments</h2>';
                                if ($result1->num_rows > 0) {
                                    // Store all rows in our array
                                    while($row1 = $result1->fetch_assoc()) {
                                        echo '<div class="comment">';
                                        echo '<p value="comment" class="info">&bull; '. $row1["content"] . '</p>';
                                    }
                                }
                                echo '<form action="deleteComment.php" method="post">';
                                echo '<button class="delete delete-comment" type="submit" name="value" value="comment">';
                                echo 'Delete Comment';
                                echo '</button>';
                                echo '</form>';
                                echo '</div>';
                                echo '</div>';
                                echo '<hr>';
                                echo ' <form action="deletepost.php" method="post">';
                                echo ' <button class="delete" type="submit" name="title" value="'. $row["title"] .'">Delete Post</button>';
                                echo ' </form>';
                                echo ' </div>';
                            }

                        }
                    }
                }
                $conn->close();
            ?>
        </div>
    </div>
</body>
</html>
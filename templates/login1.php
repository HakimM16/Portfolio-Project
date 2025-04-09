<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        session_start();
        // check if the user is already logged in
        if (isset($_SESSION['logged'])) {
            header("Location: http://localhost/phase2/index.html");
        
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
                    header("Location: addPost.php");
                } else {
                    echo "Invalid email or password";
                }
            }
        }
    ?>
</body>
</html>
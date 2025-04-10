<?php
    // get data from post
    $title = $_POST['title'];

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

    // delete the post from the database
    $sql = "DELETE FROM bloginfo WHERE title='$title'";

    if ($conn->query($sql) === TRUE) {
        // redirect to blog.php
        header("Location: viewblog.php"); // redirect to blog.php
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    // close the connection
    $conn->close();

?>
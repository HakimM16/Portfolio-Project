
<?php
    // get data from the form
    $title = $_POST['title'];
    $content = $_POST['content'];
    date_default_timezone_set("Europe/London"); // set the timezone to Europe/London
    $date = date("Y-m-d H:i:s"); // get the current date and time
    
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

    // insert the data into the database
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $sql = "INSERT INTO bloginfo (title, info, created_at) VALUES ('$title', '$content', '$date')";

        if ($conn->query($sql) === TRUE) {
            header("Location: viewblog.php"); // redirect to viewblog.php
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
        
    }

?>

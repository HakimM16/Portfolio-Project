<?php
    session_start(); // start the session
    
    $_SESSION['users'] = null; // destroy the session variable
    session_destroy(); // destroy the session

    header("location: http://localhost/phase2/index.php"); // redirect to index.php
    

    
?>
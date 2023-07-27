<?php
        // Database connection details
        $db_host = "localhost";
        $db_user = "root";
        $db_pass = "";
        $db_name = "portfolio_db";

        // Create a connection to the database
        $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

        // Check the connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
?>
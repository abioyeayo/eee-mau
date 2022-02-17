<?php  

    $servername = "localhost";
    $username = "u335940528_eee_mau_web";
    $password = "eeeAdmin1";
    $dbname = "u335940528_eee_mau_db";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

        
    //$conn->close();
?>

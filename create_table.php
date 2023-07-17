
<?php
    $server = 'localhost'; // 127.0.0.1
    $username = 'root';
    $password = 'rootroot';
    $db = 'csc309';

    // Open a new connection
    $con = new mysqli($server, $username, $password, $db);

    // Check connection
    if ($con->connect_error){
        die("Connection failed: " . $con->connect_error);
    }

    // Create a Table
    $sql = 'CREATE TABLE users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50) NOT NULL UNIQUE,
        gender CHAR(1) NOT NULL,
        date_of_birth DATE NOT NULL
    )';

    $result = $con->query($sql);

    if ($result === true) {
        echo 'Table created successfully';
    } else {
        echo 'Error creating Table: ' . $con->error;
    }

    // Close connection
    $con->close();
?>

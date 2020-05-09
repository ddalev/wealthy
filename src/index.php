<?php

$loader = require __DIR__ . '/vendor/autoload.php';


    $servername = 'db';
    $username = 'user';
    $password = 'password';
    $database = 'test_db';

    $databaseState = 'no state';

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database, $port);
    $databaseState = 'Connected successfully';
    // Check connection
    if ($conn->connect_error) {
        $databaseState = 'Connection failed: ' . $conn->connect_error;
    }
?>
<html>
    <head>
        <title>Hello World</title>
    </head>

    <body>
        <p><?= 'Hello, World!'; ?></p>
        <p><?= $databaseState; ?></p>
    </body>
</html>

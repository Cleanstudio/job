<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ln_db";

    try {
        $con = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "connect successfully!";

    } catch(PDOException $e) {
        echo "Connect failed:" . $e->getMessage();
    }

?>
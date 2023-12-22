<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password);

    // Check connection
    if (!$conn) {
      die("เชื่อมต่อฐานข้อมูลไม่สำเร็จ: " . mysqli_connect_error());
    }
    echo "เชื่อมต่อฐานข้อมูลสำเร็จ";
?>
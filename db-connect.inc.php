<?php

    $conn = mysqli_connect("remotemysql.com:3306", "Hj1sZCDP0i", "UqUKa8bo96", "Hj1sZCDP0i");

    if (mysqli_connect_errno()) {
        echo "Failed to established a connection: " . mysqli_connect_error();
        exit();
    }
?>
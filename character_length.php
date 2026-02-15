<?php
    include("db_connection.php");

    $sql = "SELECT CHARACTER_LENGTH(full_name) AS LengthOfString FROM students";
    $result = $conn->query($sql);

    echo "<h1>CHARACTER_LENGTH Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo ' Length of String: ' . $row['LengthOfString'] . "<br>";
    }
?>

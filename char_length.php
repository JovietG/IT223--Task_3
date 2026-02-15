<?php
    include("db_connection.php");

    $sql = "SELECT CHAR_LENGTH(full_name) AS LengthOfString FROM students";
    $result = $conn->query($sql);

    echo "<h1>CHAR_LENGTH Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo ' Length of String: ' . $row['LengthOfString'] . "<br>";
    }
?>

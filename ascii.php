<?php
    include("db_connection.php");

    $sql = "SELECT ASCII(full_name) AS asciiValue FROM students";
    $result = $conn->query($sql);

    echo "<h1>ASCII Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo ' ASCII Value: ' . $row['asciiValue'] . "<br>";
    }
?>

<?php
    include("db_connection.php");

    $sql = "SELECT LCASE(full_name) AS lowerCaseName FROM students";
    $result = $conn->query($sql);

    echo "<h1>LCASE Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo $row['lowerCaseName'] . "<br>";
    }
?>

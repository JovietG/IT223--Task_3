<?php
    include("db_connection.php");

    $sql = "SELECT LEAST(1.25, 2.50, 1.50) AS leastValue";
    $result = $conn->query($sql);

    echo "<h1>LEAST Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo $row['leastValue'] . "<br>";
    }

    $conn->close();
?>

<?php
    include("db_connection.php");

    $sql = "SELECT CEILING(gwa) AS ceilingValue FROM students";
    $result = $conn->query($sql);

    echo "<h1>CEILING Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo $row['ceilingValue'] . "<br>";
    }

    $conn->close();
?>

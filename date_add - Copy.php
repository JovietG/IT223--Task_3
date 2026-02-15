<?php
    include("db_connection.php");

    $sql = "SELECT DATE_ADD(enrollment_date, INTERVAL 1 MONTH) AS dateAddValue FROM students";
    $result = $conn->query($sql);

    echo "<h1>DATE_ADD Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo $row['dateAddValue'] . "<br>";
    }

    $conn->close();
?>

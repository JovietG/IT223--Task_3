<?php
    include("db_connection.php");

    $sql = "SELECT DAYOFWEEK(enrollment_date) AS dayOfWeekValue FROM students";
    $result = $conn->query($sql);

    echo "<h1>DAYOFWEEK Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo $row['dayOfWeekValue'] . "<br>";
    }

    $conn->close();
?>

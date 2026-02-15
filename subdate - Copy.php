<?php
    include("db_connection.php");

    $sql = "SELECT SUBDATE(enrollment_date, INTERVAL 10 DAY) AS subDateValue FROM students";
    $result = $conn->query($sql);

    echo "<h1>SUBDATE Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo $row['subDateValue'] . "<br>";
    }

    $conn->close();
?>

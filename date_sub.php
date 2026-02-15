<?php
    include("db_connection.php");

    $sql = "SELECT DATE_SUB(enrollment_date, INTERVAL 5 DAY) AS dateSubValue FROM students";
    $result = $conn->query($sql);

    echo "<h1>DATE_SUB Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo $row['dateSubValue'] . "<br>";
    }

    $conn->close();
?>

<?php
    include("db_connection.php");

    $sql = "SELECT ADDDATE(enrollment_date, INTERVAL 10 DAY) AS addDateValue FROM students";
    $result = $conn->query($sql);

    echo "<h1>ADDDATE Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo $row['addDateValue'] . "<br>";
    }

    $conn->close();
?>

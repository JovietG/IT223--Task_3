<?php
    include("db_connection.php");

    $sql = "SELECT LAST_DAY(enrollment_date) AS lastDayValue FROM students";
    $result = $conn->query($sql);

    echo "<h1>LAST_DAY Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo $row['lastDayValue'] . "<br>";
    }

    $conn->close();
?>

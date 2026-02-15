<?php
    include("db_connection.php");

    $sql = "SELECT DAYOFMONTH(enrollment_date) AS dayOfMonthValue FROM students";
    $result = $conn->query($sql);

    echo "<h1>DAYOFMONTH Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo $row['dayOfMonthValue'] . "<br>";
    }

    $conn->close();
?>

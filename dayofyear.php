<?php
    include("db_connection.php");

    $sql = "SELECT DAYOFYEAR(enrollment_date) AS dayOfYearValue FROM students";
    $result = $conn->query($sql);

    echo "<h1>DAYOFYEAR Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo $row['dayOfYearValue'] . "<br>";
    }

    $conn->close();
?>

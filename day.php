<?php
    include("db_connection.php");

    $sql = "SELECT DAY(enrollment_date) AS dayValue FROM students";
    $result = $conn->query($sql);

    echo "<h1>DAY Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo $row['dayValue'] . "<br>";
    }

    $conn->close();
?>

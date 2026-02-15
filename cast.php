<?php
    include("db_connection.php");

    $sql = "SELECT CAST(enrollment_date AS CHAR) AS castValue FROM students";
    $result = $conn->query($sql);

    echo "<h1>CAST Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo $row['castValue'] . "<br>";
    }

    $conn->close();
?>

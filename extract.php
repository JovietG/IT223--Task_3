<?php
    include("db_connection.php");

    $sql = "SELECT EXTRACT(YEAR FROM enrollment_date) AS extractYear FROM students";
    $result = $conn->query($sql);

    echo "<h1>EXTRACT Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo $row['extractYear'] . "<br>";
    }

    $conn->close();
?>

<?php
    include("db_connection.php");

    $sql = "SELECT DATE_FORMAT(enrollment_date, '%M %d, %Y') AS formattedDate FROM students";
    $result = $conn->query($sql);

    echo "<h1>DATE_FORMAT Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo $row['formattedDate'] . "<br>";
    }

    $conn->close();
?>

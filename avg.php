<?php
    include("db_connection.php");

    $sql = "SELECT AVG(gwa) AS avgValue FROM students";
    $result = $conn->query($sql);

    echo "<h1>AVG Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo $row['avgValue'] . "<br>";
    }

    $conn->close();
?>

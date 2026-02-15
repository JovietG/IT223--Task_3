<?php
    include("db_connection.php");

    $sql = "SELECT CEIL(gwa) AS ceilValue FROM students";
    $result = $conn->query($sql);

    echo "<h1>CEIL Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo $row['ceilValue'] . "<br>";
    }

    $conn->close();
?>

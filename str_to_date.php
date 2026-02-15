<?php
    include("db_connection.php");

    $sql = "SELECT STR_TO_DATE('2025-02-04', '%Y-%m-%d') AS strDateValue";
    $result = $conn->query($sql);

    echo "<h1>STR_TO_DATE Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo $row['strDateValue'] . "<br>";
    }

    $conn->close();
?>

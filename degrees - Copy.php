<?php
    include("db_connection.php");

    $sql = "SELECT DEGREES(1) AS degreesValue";
    $result = $conn->query($sql);

    echo "<h1>DEGREES Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo $row['degreesValue'] . "<br>";
    }

    $conn->close();
?>

<?php
    include("db_connection.php");

    $sql = "SELECT CURTIME() AS curTimeValue";
    $result = $conn->query($sql);

    echo "<h1>CURTIME Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo $row['curTimeValue'] . "<br>";
    }

    $conn->close();
?>

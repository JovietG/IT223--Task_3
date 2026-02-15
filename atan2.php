<?php
    include("db_connection.php");

    $sql = "SELECT ATAN2(5, 10) AS atan2Value";
    $result = $conn->query($sql);

    echo "<h1>ATAN2 Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo $row['atan2Value'] . "<br>";
    }

    $conn->close();
?>

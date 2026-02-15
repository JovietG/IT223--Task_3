<?php
    include("db_connection.php");

    $sql = "SELECT CURRENT_TIMESTAMP() AS currentTimestampValue";
    $result = $conn->query($sql);

    echo "<h1>CURRENT_TIMESTAMP Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo $row['currentTimestampValue'] . "<br>";
    }

    $conn->close();
?>

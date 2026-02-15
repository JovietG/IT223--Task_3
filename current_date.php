<?php
    include("db_connection.php");

    $sql = "SELECT CURRENT_DATE() AS currentDateValue";
    $result = $conn->query($sql);

    echo "<h1>CURRENT_DATE Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo $row['currentDateValue'] . "<br>";
    }

    $conn->close();
?>

<?php
    include("db_connection.php");

    $sql = "SELECT FROM_DAYS(738000) AS fromDaysValue";
    $result = $conn->query($sql);

    echo "<h1>FROM_DAYS Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo $row['fromDaysValue'] . "<br>";
    }

    $conn->close();
?>

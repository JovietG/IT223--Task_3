<?php
    include("db_connection.php");

    $sql = "SELECT CONV(15, 10, 2) AS convValue";
    $result = $conn->query($sql);

    echo "<h1>CONV Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo $row['convValue'] . "<br>";
    }

    $conn->close();
?>

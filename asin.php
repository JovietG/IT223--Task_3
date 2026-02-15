<?php
    include("db_connection.php");

    $sql = "SELECT ASIN(0.5) AS asinValue";
    $result = $conn->query($sql);

    echo "<h1>ASIN Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo $row['asinValue'] . "<br>";
    }

    $conn->close();
?>

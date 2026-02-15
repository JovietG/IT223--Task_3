<?php
    include("db_connection.php");

    $sql = "SELECT ACOS(0.5) AS acosValue";
    $result = $conn->query($sql);

    echo "<h1>ACOS Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo $row['acosValue'] . "<br>";
    }

    $conn->close();
?>

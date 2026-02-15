<?php
    include("db_connection.php");

    $sql = "SELECT ATAN(1) AS atanValue";
    $result = $conn->query($sql);

    echo "<h1>ATAN Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo $row['atanValue'] . "<br>";
    }

    $conn->close();
?>

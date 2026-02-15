<?php
    include("db_connection.php");

    $sql = "SELECT FORMAT(1234567.89, 2) AS formattedNumber";
    $result = $conn->query($sql);

    echo "<h1>FORMAT Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo $row['formattedNumber'] . "<br>";
    }
?>

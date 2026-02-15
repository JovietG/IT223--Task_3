<?php
    include("db_connection.php");

    $sql = "SELECT BINARY 'Hello' AS binaryValue";
    $result = $conn->query($sql);

    echo "<h1>BINARY Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo $row['binaryValue'] . "<br>";
    }

    $conn->close();
?>

<?php
    include("db_connection.php");

    $sql = "SELECT IFNULL(NULL, 'Default Value') AS ifNullValue";
    $result = $conn->query($sql);

    echo "<h1>IFNULL Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo $row['ifNullValue'] . "<br>";
    }

    $conn->close();
?>

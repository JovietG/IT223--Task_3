<?php
    include("db_connection.php");

    $sql = "SELECT ISNULL(NULL) AS isNullValue";
    $result = $conn->query($sql);

    echo "<h1>ISNULL Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo $row['isNullValue'] . "<br>";
    }

    $conn->close();
?>

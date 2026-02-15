<?php
    include("db_connection.php");

    $sql = "SELECT BIN(10) AS binValue";
    $result = $conn->query($sql);

    echo "<h1>BIN Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo $row['binValue'] . "<br>";
    }

    $conn->close();
?>

<?php
    include("db_connection.php");

    $sql = "SELECT DATABASE() AS databaseValue";
    $result = $conn->query($sql);

    echo "<h1>DATABASE Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo $row['databaseValue'] . "<br>";
    }

    $conn->close();
?>

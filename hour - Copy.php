<?php
    include("db_connection.php");

    $sql = "SELECT HOUR(NOW()) AS hourValue";
    $result = $conn->query($sql);

    echo "<h1>HOUR Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo $row['hourValue'] . "<br>";
    }

    $conn->close();
?>

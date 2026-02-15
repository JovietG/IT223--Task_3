<?php
    include("db_connection.php");

    $sql = "SELECT DATE(NOW()) AS dateValue";
    $result = $conn->query($sql);

    echo "<h1>DATE Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo $row['dateValue'] . "<br>";
    }

    $conn->close();
?>

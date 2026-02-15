<?php
    include("db_connection.php");

    $sql = "SELECT CURRENT_USER() AS currentUserValue";
    $result = $conn->query($sql);

    echo "<h1>CURRENT_USER Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo $row['currentUserValue'] . "<br>";
    }

    $conn->close();
?>

<?php
    include("db_connection.php");

    $sql = "SELECT INSERT('dnsc.edu', 1, 4, 'aces') AS insertedString";
    $result = $conn->query($sql);

    echo "<h1>INSERT Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo $row['insertedString'] . "<br>";
    }
?>

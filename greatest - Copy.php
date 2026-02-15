<?php
    include("db_connection.php");

    $sql = "SELECT GREATEST(1.25, 2.50, 1.50) AS greatestValue";
    $result = $conn->query($sql);

    echo "<h1>GREATEST Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo $row['greatestValue'] . "<br>";
    }

    $conn->close();
?>

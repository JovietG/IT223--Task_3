<?php
    include("db_connection.php");

    $sql = "SELECT id DIV 2 AS divValue FROM students";
    $result = $conn->query($sql);

    echo "<h1>DIV Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo $row['divValue'] . "<br>";
    }

    $conn->close();
?>

<?php
    include("db_connection.php");

    $sql = "SELECT FLOOR(gwa) AS floorValue FROM students";
    $result = $conn->query($sql);

    echo "<h1>FLOOR Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo $row['floorValue'] . "<br>";
    }

    $conn->close();
?>

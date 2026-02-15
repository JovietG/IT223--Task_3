<?php
    include("db_connection.php");

    $sql = "SELECT CONVERT(full_name USING utf8) AS convertValue FROM students";
    $result = $conn->query($sql);

    echo "<h1>CONVERT Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo $row['convertValue'] . "<br>";
    }

    $conn->close();
?>

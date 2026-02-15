<?php
    include("db_connection.php");

    $sql = "SELECT full_name, IF(institute='IC','Yes','No') AS ifValue FROM students";
    $result = $conn->query($sql);

    echo "<h1>IF Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo $row['full_name'] . " - " . $row['ifValue'] . "<br>";
    }

    $conn->close();
?>
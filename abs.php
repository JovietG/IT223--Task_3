<?php
    include("db_connection.php");

    $sql = "SELECT ABS(-gwa) AS absValue FROM students";
    $result = $conn->query($sql);

    echo "<h1>ABS Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo $row['absValue'] . "<br>";
    }

    $conn->close();
?>

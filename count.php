<?php
    include("db_connection.php");

    $sql = "SELECT COUNT(*) AS countValue FROM students";
    $result = $conn->query($sql);

    echo "<h1>COUNT Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo $row['countValue'] . "<br>";
    }

    $conn->close();
?>

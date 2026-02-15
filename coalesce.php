<?php
    include("db_connection.php");

    $sql = "SELECT COALESCE(NULL, full_name, 'No Name') AS coalesceValue FROM students";
    $result = $conn->query($sql);

    echo "<h1>COALESCE Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo $row['coalesceValue'] . "<br>";
    }

    $conn->close();
?>

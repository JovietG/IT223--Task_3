<?php
    include("db_connection.php");

    $sql = "SELECT FIELD('a', 'a', 'b', 'c', 'd') AS fieldPosition";
    $result = $conn->query($sql);

    echo "<h1>FIELD Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo $row['fieldPosition'] . "<br>";
    }
?>

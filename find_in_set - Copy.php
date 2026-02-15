<?php
    include("db_connection.php");

    $sql = "SELECT FIND_IN_SET('b', 'a,b,c,d') AS fieldPosition";
    $result = $conn->query($sql);

    echo "<h1>FIND_IN_SET Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo $row['fieldPosition'] . "<br>";
    }
?>

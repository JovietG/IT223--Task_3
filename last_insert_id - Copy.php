<?php
    include("db_connection.php");

    $sql = "SELECT LAST_INSERT_ID() AS lastInsertIdValue";
    $result = $conn->query($sql);

    echo "<h1>LAST_INSERT_ID Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo $row['lastInsertIdValue'] . "<br>";
    }

    $conn->close();
?>

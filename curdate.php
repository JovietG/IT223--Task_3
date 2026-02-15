<?php
    include("db_connection.php");

    $sql = "SELECT CURDATE() AS curDateValue";
    $result = $conn->query($sql);

    echo "<h1>CURDATE Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo $row['curDateValue'] . "<br>";
    }

    $conn->close();
?>

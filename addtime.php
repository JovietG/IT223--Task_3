<?php
    include("db_connection.php");

    $sql = "SELECT ADDTIME(NOW(), '02:00:00') AS addTimeValue";
    $result = $conn->query($sql);

    echo "<h1>ADDTIME Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo $row['addTimeValue'] . "<br>";
    }

    $conn->close();
?>

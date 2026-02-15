<?php
    include("db_connection.php");

    $sql = "SELECT COS(1) AS cosValue";
    $result = $conn->query($sql);

    echo "<h1>COS Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo $row['cosValue'] . "<br>";
    }

    $conn->close();
?>

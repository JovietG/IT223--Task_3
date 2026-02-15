<?php
    include("db_connection.php");

    $sql = "SELECT STRCMP('Hello', 'World') AS compareStrings";
    $result = $conn->query($sql);

    echo "<h1>STRCMP Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo $row['compareStrings'] . "<br>";
    }
?>

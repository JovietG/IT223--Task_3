<?php
    include("db_connection.php");

    $sql = "SELECT COT(1) AS cotValue";
    $result = $conn->query($sql);

    echo "<h1>COT Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo $row['cotValue'] . "<br>";
    }

    $conn->close();
?>

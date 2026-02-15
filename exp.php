<?php
    include("db_connection.php");

    $sql = "SELECT EXP(gwa) AS expValue FROM students";
    $result = $conn->query($sql);

    echo "<h1>EXP Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo $row['expValue'] . "<br>";
    }

    $conn->close();
?>

<?php
    include("db_connection.php");

    $sql = "SELECT INSTR('dnsc.edu', 'c') AS matchPosition";
    $result = $conn->query($sql);

    echo "<h1>INSTR Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo $row['matchPosition'] . "<br>";
    }
?>

<?php
    include("db_connection.php");

    $sql = "SELECT full_name, CASE WHEN institute='ILEGG' THEN 'Yes' ELSE 'Not' END AS caseValue FROM students";
    $result = $conn->query($sql);

    echo "<h1>CASE Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo $row['full_name'] . " - " . $row['caseValue'] . "<br>";
    }

    $conn->close();
?>

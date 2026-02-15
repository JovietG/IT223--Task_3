<?php
    include("db_connection.php");

    $sql = "SELECT DATEDIFF(CURDATE(), enrollment_date) AS dateDiffValue FROM students";
    $result = $conn->query($sql);

    echo "<h1>DATEDIFF Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo $row['dateDiffValue'] . "<br>";
    }

    $conn->close();
?>

<?php
    include("db_connection.php");

    $sql = "SELECT DAYNAME(enrollment_date) AS dayNameValue FROM students";
    $result = $conn->query($sql);

    echo "<h1>DAYNAME Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo $row['dayNameValue'] . "<br>";
    }

    $conn->close();
?>

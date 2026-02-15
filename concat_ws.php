<?php
    include("db_connection.php");

    $sql = "SELECT CONCAT_WS(' - ', 'Fullname: ', full_name, 'Enrollment Date: ', enrollment_date) AS studentEnrollemt FROM students";
    $result = $conn->query($sql);

    echo "<h1>CONCAT_WS Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo $row['studentEnrollemt'] . "<br>";
    }
?>

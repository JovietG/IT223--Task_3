<?php
    include("db_connection.php");

    $sql = "SELECT CONCAT('Fullname: ', full_name, ' - GWA: ', gwa) AS studentGWA FROM students";
    $result = $conn->query($sql);

    echo "<h1>CONCAT Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo $row['studentGWA'] . "<br>";
    }
?>

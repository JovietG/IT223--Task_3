<?php
    include("db_connection.php");

    $sql = "SELECT CONNECTION_ID() AS connectionIdValue";
    $result = $conn->query($sql);

    echo "<h1>CONNECTION_ID Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo $row['connectionIdValue'] . "<br>";
    }

    $conn->close();
?>

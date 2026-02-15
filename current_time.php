    <?php
    include("db_connection.php");

    $sql = "SELECT CURRENT_TIME() AS currentTimeValue";
    $result = $conn->query($sql);

    echo "<h1>CURRENT_TIME Function</h1>";

    while ($row = $result->fetch_assoc()) {
        echo $row['currentTimeValue'] . "<br>";
    }

    $conn->close();
?>

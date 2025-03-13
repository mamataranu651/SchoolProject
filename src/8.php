<?php

$database_host = "localhost";
$database_user = "root";
$database_name = "schoolproject";
$database_password = "";

try {
    $conn = new PDO("mysql:host=$database_host;dbname=$database_name", $database_user, $database_password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT * FROM students");
    $stmt->execute();

    $result = $stmt->fetchAll();

    echo json_encode($result);
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;

?>

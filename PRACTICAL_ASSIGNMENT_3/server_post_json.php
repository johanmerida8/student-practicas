<?php
    header('Content-Type: application/json');
    include_once 'dbconfig.php';

    $conn = new mysqli($servername, $username, $password, $database, $port);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $product = json_decode(file_get_contents('php://input'), true);

    $sql = "INSERT INTO product(first_name, last_name, birth_date, city) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssd', $first_name['first_name'], $last_name['last_name'], $birth_date['birth_date'] $city['city']);

    $stmt->execute();
    $conn->close();

    echo json_encode(array('result' => 'ok'));
?>
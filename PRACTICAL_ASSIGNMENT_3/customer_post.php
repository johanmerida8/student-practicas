<?php
    header('Content-Type: application/json');

    $conn = new mysqli('localhost', 'root', '', 'assignment3', '3308');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $birth_date = $_POST['birth_date'];
    $city = $_POST['city'];

    $sql = "INSERT INTO customer(first_name, last_name, birth_date, city) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    $stmt->bind_param('ssss', $first_name, $last_name, $birth_date, $city);

    $stmt->execute();
    $conn->close();

    echo json_encode(array('result' => 'ok'));

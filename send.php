<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Подключение к базе данных (замените данными вашей базы данных)
    $host = "localhost";
    $username = "root";
    $password = "";       
    $database = "english";

    $conn = new mysqli($host, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];

    $timestamp = date('Y-m-d H:i:s');

    $sql = "INSERT INTO applications (timestamp, name, phone, email) VALUES ('$timestamp', '$name', '$phone', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo json_encode(array("success" => true));
    } else {
        echo json_encode(array("success" => false, "error" => $conn->error));
    }

    // Закрытие соединения с базой данных
    $conn->close();
} 
?>

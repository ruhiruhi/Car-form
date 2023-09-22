<?php

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$car = $_POST["car"];

$conn = new mysqli("localhost", "root", "", "car_db");
if ($conn->connect_error) {
    die("Connection Failed!" . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO car_tbl (name,email,phone,car) VALUES (?,?,?,?)");
    $stmt->bind_param("ssis", $name, $email, $phone, $car);
    $stmt->execute();
    $stmt->close();
    echo "Connected Successfully!";
    $conn->close();
}
?>


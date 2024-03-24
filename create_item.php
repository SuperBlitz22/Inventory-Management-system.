<?php
include 'connection.php';

$name = $_POST['name'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];

$sql = "INSERT INTO items (name, quantity, price) VALUES ('$name', $quantity, $price)";

if ($conn->query($sql) === TRUE) {
    echo "Item added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

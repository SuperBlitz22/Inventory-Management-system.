<?php
include 'connection.php';

$id = $_GET['id'];

$sql = "SELECT * FROM items WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $name = $row['name'];
    $quantity = $row['quantity'];
    $price = $row['price'];

    include 'edit_item_form.html';
} else {
    echo "Item not found.";
}

$conn->close();
?>

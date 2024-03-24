<?php
include 'connection.php';

$sql = "SELECT * FROM items";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Name: " . $row["name"] . " - Quantity: " . $row["quantity"] . " - Price: $" . $row["price"];
        echo " <a href='edit_item.php?id=" . $row["id"] . "'>Edit</a>";
        echo " <a href='delete_item.php?id=" . $row["id"] . "'>Delete</a><br>";
    }
} else {
    echo "No items in the inventory.";
}

$conn->close();
?>

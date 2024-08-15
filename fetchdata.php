<?php
require_once 'conn.php'; // Make sure this file sets up the $conn variable

header('Content-Type: application/json'); // Set content type to JSON

$sql="SELECT * FROM products";
$result=mysqli_query($conn,$sql);

$products=[];

$products = [];
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $products[] = $row;
    }
}

echo json_encode($products);
<?php
    require_once('database.php');

// Get the product form data
$productName = filter_input(INPUT_POST, 'productName');
$productDescription = filter_input(INPUT_POST, 'productDescription');
$price = filter_input(INPUT_POST, 'price');
$quantity = filter_input(INPUT_POST, 'quantity');
$img = filter_input(INPUT_POST, 'img');

// Validate inputs
if ($price == null || $quantity == null || 
        $productDescription == null || $productName == null || $img == null) {

    $error = "Invalid. Please go back and check all fields";
    include('error.php');
} else {
    require_once('database.php');

// Add the product to the database  
$query = 'INSERT INTO books (productName, productDescription, price, quantity, img)
VALUES (:productName, :productDescription, :price, :quantity, :img)';
$statement = $db->prepare($query);
$statement->bindValue(':productName', $productName);
$statement->bindValue(':productDescription', $productDescription);
$statement->bindValue(':price', $price);
$statement->bindValue(':quantity', $quantity);
$statement->bindValue(':img', $img);
$statement->execute();
$statement->closeCursor();

    // Display the page
    include('admin.php');
}
?>
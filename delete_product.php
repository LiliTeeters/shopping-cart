<?php
require_once('database.php');


// Get IDs 
$product_id = filter_input(INPUT_POST, 'product_id');


// Delete the product from the database
if ($product_id != false) {
    $query = 'DELETE FROM books
              WHERE productID = :product_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':product_id', $product_id);
    $success = $statement->execute();
    $statement->closeCursor();    
}
include('admin.php');
<?php
require('database.php');
$query = 'SELECT *
          FROM books
          ORDER BY productID';
$statement = $db->prepare($query);
$statement->execute();
$products = $statement->fetchAll();
$statement->closeCursor();

// Get IDs

?>
<?= template_header() ?>
    <center><main>
        <h1>Add A New Product</h1>
        <form action="add_product.php" method="post"
              id="add_product_form">   

            <label>Name:</label>
            <input type="text" name="productName"><br>

            <label>Description:</label>
            <input type="text" name="productDescription"><br>

            <label>Price:</label>
            <input type="decimal" name="price"><br>

            <label>Quantity:</label>
            <input type="int" name="quantity"><br>

            <label>Image:</label>
            <input type="text" name="img"><br>


            <label>&nbsp;</label>
            <input type="submit" value="Add Product"><br>
        </form>
        <p><a href="admin.php">View Product List</a></p>
        </center>
    <?php template_closing() ?>

    
<?php

require_once('database.php');

$stmt = $db->prepare('SELECT * FROM books ORDER BY productID');
$stmt->execute();
$books = $stmt->fetchAll(PDO::FETCH_ASSOC);
$stmt ->closeCursor();

?>


<?= template_header() ?>
<br><br>
<center><h1>Bookstore Items</h1></center>
<br>
<br>



<section class="cart content-wrapper">
    <!-- display a table of Students -->
    <center> <table>
        <tr>
           
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Image</th>
            <th>&nbsp;</th>
        </tr>
        <?php foreach ($books as $book) : ?>
            <tr>
           
            <td><?php echo $book['productName']; ?></td>
            <td><?php echo $book['productDescription']; ?></td>
           <td>$<?php echo $book['price']; ?></td>
            <td> <center><?php echo $book['quantity']; ?></center></td>
            <td><?php echo $book['img']; ?></td>
            <td><form action="delete_product.php" method="post">
                <input type="hidden" name="product_id"
                       value="<?php echo $book['productID']; ?>">
                <input type="hidden" name="product_name"
                       value="<?php echo $book['productName']; ?>">
                <input type="submit" value="Delete">
            </form></td>
        </tr>
        <?php endforeach; ?>

        
    </table></center>

   

    <h2><a href="add_product_form.php">Add A New Product</a></h2>
    
   

</section>

<?= template_closing() ?>
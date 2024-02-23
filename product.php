<?php
require_once('database.php');


// Check to make sure the id parameter is specified in the URL
if (isset($_GET['id'])) {
    $stmt = $db->prepare('SELECT * FROM books WHERE productID = ?');
    $stmt->execute([$_GET['id']]);
    // Fetch the product from the database and return the result as an Array
    $book = $stmt->fetch(PDO::FETCH_ASSOC);
 
}
?>

<?=template_header()?>

<div class="product content-wrapper">
    <img src="imgs/<?php echo $book['img']?>" width= auto height="560" alt="<?php echo $book['productName']?>">
    <div>
        <h1 class="name"><?php echo $book['productName']?></h1>
        <span class="price">
            &dollar;<?php echo $book['price']?>
        </span>
        <br>
        <div class="description">
            <?php echo $book['productDescription']?>
        </div>
        <form action="index.php?page=cart" method="post">
            <input type="number" name="quantity" value="1" min="1" max="<?php echo $book['quantity']?>" placeholder="Quantity" required>
            <input type="hidden" name="product_id" value="<?php echo $book['productID']?>">
            <input type="submit" value="Add To Cart">
        </form>
      
    </div>
</div>

<?=template_closing()?>
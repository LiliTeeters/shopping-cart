<?php
require_once('database.php');

// Get products
$stmt = $db->prepare('SELECT * FROM books ORDER BY productID');
$stmt->execute();
$books = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?=template_header()?>

<div class="products content-wrapper">
    <div class="products-wrapper">
        <?php foreach ($books as $book): ?>

        <!-- organize books by id -->
        <a href="index.php?page=product&id=<?php echo $book['productID']?>" class="product">
            <img src="imgs/<?php echo $book['img']?>" width=auto height="270" alt="<?php echo $book['productName']?>">
            <span class="name"><?php echo $book['productName']?></span>
            <span class="price">
                &dollar;<?php echo $book['price']?>
            </span>
        </a>
        <?php endforeach; ?>
    </div> 
</div>

<?=template_closing()?>
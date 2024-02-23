<?php
require_once('database.php');

// Get products
$stmt = $db->prepare('SELECT * FROM books ORDER BY productID');
$stmt->execute();
$books = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?= template_header() ?>

<div class="featured">
    <h2>One More Chapter</h2>
    <p>Bookstore</p>
</div>

<?=template_closing()?>
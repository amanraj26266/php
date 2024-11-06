<?php
session_start();

$products = [
    1 => ['name' => 'Product 1', 'price' => 10],
    2 => ['name' => 'Product 2', 'price' => 15],
    3 => ['name' => 'Product 3', 'price' => 20]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Products</title>
</head>
<body>

<h1>Products</h1>
<ul>
    <?php foreach ($products as $id => $product): ?>
        <li>
            <?= $product['name'] ?> - $<?= $product['price'] ?>
            <form action="cart.php" method="POST" style="display:inline;">
                <input type="hidden" name="product_id" value="<?= $id ?>">
                <button type="submit" name="action" value="add">Add to Cart</button>
            </form>
        </li>
    <?php endforeach; ?>
</ul>

<a href="cart.php">View Cart</a>

</body>
</html>

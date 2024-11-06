<?php
session_start();
$products = [
    1 => ['name' => 'Product 1', 'price' => 10],
    2 => ['name' => 'Product 2', 'price' => 20],
    3 => ['name' => 'Product 3', 'price' => 30]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
    <h1>Products</h1>
    <ul>
        <li>
            <?= $products[1]['name'] ?> - $<?= $products[1]['price'] ?>
            <form action="carts.php" method="POST" style="display:inline;">
                <input type="hidden" name="product_id" value="1">
                <button type="submit" name="action" value="add">Add to Cart</button>
            </form>
        </li>

        <li>
            <?= $products[2]['name'] ?> - $<?= $products[2]['price'] ?>
            <form action="carts.php" method="POST" style="display:inline;">
                <input type="hidden" name="product_id" value="2">
                <button type="submit" name="action" value="add">Add to Cart</button>
            </form>
        </li>

        <li>
            <?= $products[3]['name'] ?> - $<?= $products[3]['price'] ?>
            <form action="carts.php" method="POST" style="display:inline;">
                <input type="hidden" name="product_id" value="3">
                <button type="submit" name="action" value="add">Add to Cart</button>
            </form>
        </li>
    </ul>

    <a href="carts.php">View Cart</a>
</body>
</html>

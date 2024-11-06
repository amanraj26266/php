<?php
session_start();
$products = [
    1 => ['name' => 'Product 1', 'price' => 10],
    2 => ['name' => 'Product 2', 'price' => 15],
    3 => ['name' => 'Product 3', 'price' => 20]
];

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $productId = intval($_POST['product_id']);
    if (isset($products[$productId])) {
        if (isset($_SESSION['cart'][$productId])) {
            $_SESSION['cart'][$productId]++;
        } else {
            $_SESSION['cart'][$productId] = 1;
        }
    }
}

if (isset($_POST['action']) && $_POST['action'] == 'clear') {
    $_SESSION['cart'] = [];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your Cart</title>
</head>
<body>

<h1>Your Cart</h1>

<?php if (!empty($_SESSION['cart'])): ?>
    <ul>
        <?php foreach ($_SESSION['cart'] as $id => $quantity): ?>
            <li>
                <?= $products[$id]['name'] ?> - Quantity: <?= $quantity ?>
            </li>
        <?php endforeach; ?>
    </ul>
    <form action="cart.php" method="POST">
        <button type="submit" name="action" value="clear">Clear Cart</button>
    </form>
<?php else: ?>
    <p>Your cart is empty.</p>
<?php endif; ?>

<a href="index.php">Go back to products</a>

</body>
</html>

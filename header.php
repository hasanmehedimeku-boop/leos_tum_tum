<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Leo's Tum Tum Pet Shop</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<nav class="navbar">
    <div class="logo">🐾 Leo's Tum Tum</div>

    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="products.php">All Products</a></li>
        <li><a href="products.php?cat=cat_food">Cat Food</a></li>
        <li><a href="products.php?cat=cat_toys">Cat Toys</a></li>
        <li><a href="products.php?cat=dog_food">Dog Food</a></li>
        <li><a href="products.php?cat=dog_toys">Dog Toys</a></li>
        <li><a href="products.php?cat=fish_food">Fish Food</a></li>
        <li><a href="cart.php">Cart</a></li>

        <?php if(isset($_SESSION['user_id'])): ?>
            <li><a href="myaccount.php">My Account</a></li>
            <li><a href="logout.php">Logout</a></li>
        <?php else: ?>
            <li><a href="register.php">Register</a></li>
            <li><a href="login.php">Login</a></li>
        <?php endif; ?>
    </ul>
</nav>

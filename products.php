<?php include 'includes/header.php'; ?>

<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="css/style.css"></head>
<body>
<h2>Products</h2>
<?php
$where="";
if(isset($_GET['cat'])){
$c=$_GET['cat'];
$where="WHERE category='$c'";
}
$res=mysqli_query($conn,"SELECT * FROM products $where");
while($p=mysqli_fetch_assoc($res)){
echo "<div class='card'>
<img src='images/{$p['image']}' width='120'>
<h3>{$p['name']}</h3>
<p>৳{$p['price']}</p>
<a href='product_details.php?id={$p['id']}'>Details</a> |
<a href='cart.php?id={$p['id']}'>Add to Cart</a>
</div>";
}
?>
</body>
</html>
<?php include 'includes/footer.php'; ?>

<?php include 'includes/header.php'; ?>

<?php session_start(); include 'db.php';
if(isset($_GET['id'])){ $_SESSION['cart'][]=$_GET['id']; }
$total=0; ?>
<h2>My Cart</h2>
<?php
if(!empty($_SESSION['cart'])){
foreach($_SESSION['cart'] as $cid){
$p=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM products WHERE id=$cid"));
echo $p['name'].' - '.$p['price'].'<br>';
$total+=$p['price'];
}
echo "<p>Total: ৳$total</p>";
echo "<a href='place_order.php?total=$total'>Place Order</a>";
}else echo 'Cart is empty';
?>

<?php include 'includes/footer.php'; ?>

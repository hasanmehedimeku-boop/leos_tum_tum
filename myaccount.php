<?php include 'includes/header.php'; ?>

<?php session_start(); include 'db.php'; ?>
<h2>My Account</h2>
User: <?php echo $_SESSION['user']; ?><br>
<h3>My Orders</h3>
<?php
$res=mysqli_query($conn,"SELECT * FROM orders WHERE user_email='$_SESSION[user]'");
while($o=mysqli_fetch_assoc($res)){
echo "Order {$o['id']} - {$o['status']}<br>";
}
?>
<?php include 'includes/footer.php'; ?>

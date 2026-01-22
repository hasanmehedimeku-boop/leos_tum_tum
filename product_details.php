<?php include 'db.php'; $id=$_GET['id'];
$p=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM products WHERE id=$id")); ?>
<h2><?php echo $p['name']; ?></h2>
<img src="images/<?php echo $p['image']; ?>" width="200">
<p><?php echo $p['description']; ?></p>
<p>Price: ৳<?php echo $p['price']; ?></p>
<a href="cart.php?id=<?php echo $id; ?>">Add to Cart</a>
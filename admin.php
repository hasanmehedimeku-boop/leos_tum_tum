<?php include '../db.php'; ?>
<h2>Admin Panel</h2>
<?php
$res=mysqli_query($conn,"SELECT * FROM orders");
while($o=mysqli_fetch_assoc($res)){
echo "Order {$o['id']} - {$o['status']}
<a href='update_order.php?id={$o['id']}&s=Confirmed'>Confirm</a> |
<a href='update_order.php?id={$o['id']}&s=Delivered'>Delivered</a> |
<a href='update_order.php?id={$o['id']}&s=Deleted'>Delete</a><br>";
}
?>
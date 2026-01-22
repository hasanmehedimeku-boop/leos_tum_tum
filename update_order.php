<?php include '../db.php';
if($_GET['s']=='Deleted'){
mysqli_query($conn,"DELETE FROM orders WHERE id=$_GET[id]");
}else{
mysqli_query($conn,"UPDATE orders SET status='$_GET[s]' WHERE id=$_GET[id]");
}
header('location:admin.php');
?>
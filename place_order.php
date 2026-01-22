<?php session_start(); include 'db.php';
if(isset($_SESSION['user'])){
mysqli_query($conn,"INSERT INTO orders VALUES(NULL,'$_SESSION[user]',$_GET[total],'Pending')");
unset($_SESSION['cart']);
echo 'Order Placed Successfully';
}else echo 'Please login first';
?>
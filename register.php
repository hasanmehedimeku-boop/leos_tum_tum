<?php include 'includes/header.php'; ?>

<?php include 'db.php';
if(isset($_POST['reg'])){
mysqli_query($conn,"INSERT INTO users VALUES(NULL,'$_POST[name]','$_POST[email]','$_POST[password]')");
}
?>
<form method="post">
<input name="name" placeholder="Name">
<input name="email" placeholder="Email">
<input name="password" placeholder="Password">
<button name="reg">Register</button>
</form>
<?php include 'includes/footer.php'; ?>
